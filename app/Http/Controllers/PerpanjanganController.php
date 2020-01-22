<?php

namespace App\Http\Controllers;

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
        $id = $request['id_pemakaman'];

        $user = auth()->user();

        $rules = [
            'NoKtp_ahliwaris' => 'required',
            'nomorIPTM' => 'required',
            'tanggalIPTM' => 'required',
            'Nomor_surat_kehilangan' => 'required',
            'Tanggal_surat_kehilangan' => 'required',
            'Nama_Ahliwaris' => 'required',
            'AlamatAhliwaris' => 'required',
            'RTAhliwaris' => 'required',
            'RWAhliwaris' => 'required',
            'KelurahanAhliwaris' => 'required',
            'KecamatanAhliwaris' => 'required',
            'KotaAhliwaris' => 'required',
            'PhoneAhliwaris' => 'required',
            'HubunganAhliwaris' => 'required',
            'LokasiTPU' => 'required',
            'NamaAlmarhum' => 'required',
            'tanggalwafat' => 'required',
            'Blok' => 'required',
            'Blad' => 'required',
            'Petak' => 'required',
            'Masa_berlaku' => 'required',
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
        $iptm_perpanjangan = new Perpanjangan();
        $iptm_perpanjangan->nomor_ktp_ahliwaris = $request['NoKtp_ahliwaris'];
        $iptm_perpanjangan->nomor_iptm = $request['nomorIPTM'];
        $iptm_perpanjangan->tanggal_iptm = $request['tanggalIPTM'];
        $iptm_perpanjangan->nomor_surat_kehilangan = $request['Nomor_surat_kehilangan'];
        $iptm_perpanjangan->tanggal_surat_kehilangan = $request['Tanggal_surat_kehilangan'];
        $iptm_perpanjangan->nama_ahliwaris = $request['Nama_Ahliwaris'];
        $iptm_perpanjangan->alamat_ahliwaris = $request['AlamatAhliwaris'];
        $iptm_perpanjangan->rt_ahliwaris = $request['RTAhliwaris'];
        $iptm_perpanjangan->rw_ahliwaris = $request['RWAhliwaris'];
        $iptm_perpanjangan->kelurahan_ahliwaris = $request['KelurahanAhliwaris'];
        $iptm_perpanjangan->kecamatan_ahliwaris = $request['KecamatanAhliwaris'];
        $iptm_perpanjangan->kota_ahliwaris = $request['KotaAhliwaris'];
        $iptm_perpanjangan->telepon_ahliwaris = $request['PhoneAhliwaris'];
        $iptm_perpanjangan->hubungan_ahliwaris = $request['HubunganAhliwaris'];
        $iptm_perpanjangan->lokasi_tpu = $request['LokasiTPU'];
        $iptm_perpanjangan->nama_almarhum = $request['NamaAlmarhum'];
        $iptm_perpanjangan->tanggal_wafat = $request['tanggalwafat'];
        $iptm_perpanjangan->blok_makam = $request['Blok'];
        $iptm_perpanjangan->blad_makam = $request['Blad'];
        $iptm_perpanjangan->petak_makam = $request['Petak'];
        $iptm_perpanjangan->masa_berlaku = $request['Masa_berlaku'];
        $iptm_perpanjangan->jumlah_perpanjangan = $request['fileIPTM_asli'];
        $iptm_perpanjangan->pemakaman_id = $id;

        if ($request->hasFile('fileIPTM_asli')) {
            $file = $request->file('fileIPTM_asli');
            $file->move(public_path('/Document/Perpanjangan'), $file->getClientOriginalName());
            $iptm_perpanjangan->file_iptm_asli = $file->getClientOriginalName();
        }

        $iptm_perpanjangan->save();
        $randRegisNumber = 'PR00';
        echo ++$randRegisNumber;
        $registrasi = new nomorPemesanan();
        $registrasi->perizinan_id = $iptm_perpanjangan->id;
        $registrasi->Registrasi_number = $randRegisNumber;
        $registrasi->Registrasi_Status = 'Waiting';
        $registrasi->save();

        if($user->role == "admin_tpu")
        {
            return redirect('/IPTM/perpanjangan/cetak/'.$iptm_perpanjangan->id);
        }
        else
        {
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
        $cetakPemakamanName = DB::table('pemakaman','users')
            ->join('users','pemakaman.pemakamanid','=','users.pemakaman_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
        return view('Perpanjangan.CetakPerpanjangan')->with([
            "cetakPemakamanName"=>$cetakPemakamanName,
        ]);

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
