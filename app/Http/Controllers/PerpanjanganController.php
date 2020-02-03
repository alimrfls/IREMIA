<?php

namespace App\Http\Controllers;

use App\IPTM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Perpanjangan;
use App\NomorPemesanan;


class PerpanjanganController extends Controller
{

    //PERPANJANGAN
    public function SubmitPerpanjangan(Request $request)
    {
        $operation_type = $request['operation_type'];
        $id = $request['iptm_id'];

        $user = auth()->user();

        $rules = [
            'nomor_iptm' => 'required',
            'perpanjang_hingga' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {

            if($user->role == "admin_tpu")
            {
                return redirect('/IPTM/perpanjangan')->withErrors($validator)->withInput();
            }
            else
            {
                return redirect('/IPTM/perpanjangan/' . $id)->withErrors($validator)->withInput();
            }
        }

        $iptm_perpanjangan = IPTM::find($id);
        $iptm_perpanjangan->tanggal_iptm = now();
        $iptm_perpanjangan->masa_berlaku = $request["perpanjang_hingga"];

        if ($request->hasFile('fileIPTM_asli')) {
            $file = $request->file('fileIPTM_asli');
            $file->move(public_path('/Document/Perpanjangan'), $file->getClientOriginalName());
            $iptm_perpanjangan->file_iptm_asli = $file->getClientOriginalName();
        }

        $iptm_perpanjangan->save();


        if($user->role == "admin_tpu")
        {
            $perpanjangan = new Perpanjangan();
            $perpanjangan->iptm_id = $id;
            $perpanjangan->tanggal_surat = now();
            $perpanjangan->tahun_surat = intval(date("Y"));
            $perpanjangan->status = "approved";
            $perpanjangan->cetak_oleh = Auth::user()->id;
            $perpanjangan->save();

            return redirect('/IPTM/perpanjangan/cetak/'.$perpanjangan->id);
        }
        else
        {
            $randRegisNumber = 'PR00';
            echo ++$randRegisNumber;
            $registrasi = new nomorPemesanan();
            $registrasi->perizinan_id = $iptm_perpanjangan->id;
            $registrasi->Registrasi_number = $randRegisNumber;
            $registrasi->Registrasi_Status = 'Waiting';
            $registrasi->save();

            return redirect('/IPTM/perpanjangan/sukses/' . $iptm_perpanjangan->id)->with('register_success', 'Welcome');
        }
    }

    public function ShowFormPerpanjangan($pemakamanid)
    {
        $pemakamans = DB::table('Pemakaman')
            ->where('Pemakaman.pemakamanid', '=', $pemakamanid)
            ->get();
        return view('Perpanjangan.insert_perpanjangan')->with([
            "pemakamanname" => $pemakamans,

        ]);
    }

    public function ShowFormPerpanjanganBaru(){

        $user_role= Auth::user()->role;
        if($user_role == "admin_tpu"){
            $cetakPemakamanName = DB::table('pemakaman','users')
                ->join('users','pemakaman.id','=','users.pemakaman_id')
                ->where('users.id','=',Auth::user()->id)
                ->get();
            return view('Perpanjangan.CetakPerpanjangan')->with([
                "cetakPemakamanName"=>$cetakPemakamanName,
            ]);
        }

        return view('member.IPTM.ajukan-perpanjangan');
    }

    public function ShowSuksesInputPerpanjangan($id)
    {
        $perpanjangan = DB::table('perpanjangan')
            ->where('perpanjangan.id', '=', $id)
            ->get();
        return view('Perpanjangan.SuksesInsert_perpanjangan')->with([
            "selesaiperpanjangan" => $perpanjangan
        ]);

    }

}
