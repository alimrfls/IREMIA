<?php

namespace App\Http\Controllers;

use App\AhliWaris;
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
        $id = $request['iptm_id'];

        $user = auth()->user();
        $randomId = "PPJ-".rand(pow(10, 5-1), pow(10, 5)-1);

        if($user->role == "admin_tpu")
        {
            $iptm_perpanjangan = IPTM::find($id);
            $iptm_perpanjangan->tanggal_iptm = now();
            $iptm_perpanjangan->masa_berlaku = $request["perpanjang_hingga"];

            if ($request->hasFile('fileIPTM_asli')) {
                $file = $request->file('fileIPTM_asli');
                $file->move(public_path('/Document/Perpanjangan'), $file->getClientOriginalName());
                $iptm_perpanjangan->file_iptm_asli = $file->getClientOriginalName();
            }

            $iptm_perpanjangan->save();

            $perpanjangan = new Perpanjangan();
            $perpanjangan->iptm_id = $id;
            $perpanjangan->nomor_surat = $randomId;
            $perpanjangan->tanggal_surat = now();
            $perpanjangan->tahun_surat = intval(date("Y"));
            $perpanjangan->status = "approved";
            $perpanjangan->cetak_oleh = Auth::user()->id;
            $perpanjangan->save();

            return redirect('/IPTM/perpanjangan/cetak/'.$perpanjangan->id);
        }
        else
        {
            $ahliwaris = new AhliWaris();
            $ahliwaris->nomor_ktp_ahliwaris = $request->nomor_ktp_ahliwaris;
            $ahliwaris->nama_ahliwaris = $request->nama_ahliwaris;
            $ahliwaris->alamat_ahliwaris = $request->alamat_ahliwaris;
            $ahliwaris->rt_ahliwaris = $request->rt_ahliwaris;
            $ahliwaris->rw_ahliwaris = $request->rw_ahliwaris;
            $ahliwaris->kelurahan_ahliwaris = $request->kelurahan_ahliwaris;
            $ahliwaris->kecamatan_ahliwaris = $request->kecamatan_ahliwaris;
            $ahliwaris->kota_ahliwaris = $request->kota_administrasi;
            $ahliwaris->telepon_ahliwaris = $request->telepon_ahliwaris;
            $ahliwaris->hubungan_ahliWaris = $request->hubungan_ahliwaris;
            $ahliwaris->save();

            $perpanjangan = new Perpanjangan();
            $perpanjangan->iptm_id = $id;
            $perpanjangan->nomor_surat_kehilangan = $request->nomor_surat_kehilangan;
            $perpanjangan->tanggal_surat_kehilangan = $request->tanggal_surat_kehilangan;
            $perpanjangan->tanggal_surat = now();
            $perpanjangan->nomor_surat = $randomId;
            $perpanjangan->tahun_surat = intval(date("Y"));
            $perpanjangan->status = "waiting";
            $perpanjangan->ahli_waris_id = $ahliwaris->id;
            $perpanjangan->save();

            return redirect('/IPTM/perpanjangan/sukses/' . $perpanjangan->id)->with('register_success', 'Welcome');
        }
    }

    public function ShowFormPerpanjangan($pemakamanid)
    {
        $pemakamans = DB::table('Pemakaman')
            ->where('Pemakaman.id', '=', $pemakamanid)
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

        return view('Member.IPTM.ajukan-perpanjangan');
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
