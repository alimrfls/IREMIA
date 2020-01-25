<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Tumpangan;
use App\NomorPemesanan;

class TumpanganController extends Controller
{
    //TUMPANGAN
    public function SubmitTumpangan(Request $request, $id)
    {
        $rules = [
            'nomor_surat_rtrw' => 'required',
            'tanggal_surat_rtrw' => 'required',
            'nomor_sk_kematian_rumah_sakit' => 'required',
            'nomor_sk_kematian_kelurahan' => 'required',
            'nomor_iptm' => 'required',
            'tanggal_iptm' => 'required',
            'nomor_kehilangan_kepolisian' => 'required',
            'tanggal_kehilangan_kepolisian' => 'required',
            'nomor_ktp_ahliwaris' => 'required',
            'nomor_ktp_almarhum' => 'required',
            'nomor_kartu_keluarga' => 'required',
            'nama_ahliwaris' => 'required',
            'alamat_ahliwaris' => 'required',
            'rt_ahliwaris' => 'required',
            'rw_ahliwaris' => 'required',
            'kelurahan_ahliwaris' => 'required',
            'kecamatan_ahliwaris' => 'required',
            'kota_ahliwaris' => 'required',
            'telepon_ahliwaris' => 'required',
            'hubungan_ahliWaris' => 'required',
            'lokasi_tpu' => 'required',
            'nama_almarhum' => 'required',
            'nama_almarhum_lama' => 'required',
            'tanggal_wafat' => 'required',
            'blok_makam' => 'required',
            'blad_makam' => 'required',
            'petak_makam' => 'required',
            'masa_berlaku_iptm' => 'required'
        ];
        //$Pemakaman = Pemakaman::find('pemakamanid');

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/formTumpangan/' . $id)->withErrors($validator)->withInput();
        }

        $iptm_tumpangan = new Tumpangan();
        $iptm_tumpangan->nomor_surat_rtrw = $request['nomor_surat_rtrw'];
        $iptm_tumpangan->tanggal_surat_rtrw = $request['tanggal_surat_rtrw'];
        $iptm_tumpangan->nomor_sk_kematian_rumah_sakit = $request['nomor_sk_kematian_rumah_sakit'];
        $iptm_tumpangan->nomor_sk_kematian_kelurahan = $request['nomor_sk_kematian_kelurahan'];
        $iptm_tumpangan->nomor_iptm = $request['nomor_iptm'];
        $iptm_tumpangan->tanggal_iptm = $request['tanggal_iptm'];
        $iptm_tumpangan->nomor_kehilangan_kepolisian = $request['nomor_kehilangan_kepolisian'];
        $iptm_tumpangan->tanggal_kehilangan_kepolisian = $request['tanggal_kehilangan_kepolisian'];
        $iptm_tumpangan->nomor_ktp_ahliwaris = $request['nomor_ktp_ahliwaris'];
        $iptm_tumpangan->nomor_ktp_almarhum = $request['nomor_ktp_almarhum'];
        $iptm_tumpangan->nomor_kartu_keluarga = $request['nomor_kartu_keluarga'];
        $iptm_tumpangan->nama_ahliwaris = $request['nama_ahliwaris'];
        $iptm_tumpangan->alamat_ahliwaris = $request['alamat_ahliwaris'];
        $iptm_tumpangan->rt_ahliwaris = $request['rt_ahliwaris'];
        $iptm_tumpangan->rw_ahliwaris = $request['rw_ahliwaris'];
        $iptm_tumpangan->kelurahan_ahliwaris = $request['kelurahan_ahliwaris'];
        $iptm_tumpangan->kecamatan_ahliwaris = $request['kecamatan_ahliwaris'];
        $iptm_tumpangan->kota_ahliwaris = $request['kota_ahliwaris'];
        $iptm_tumpangan->telepon_ahliwaris = $request['telepon_ahliwaris'];
        $iptm_tumpangan->hubungan_ahliWaris = $request['hubungan_ahliWaris'];
        $iptm_tumpangan->lokasi_tpu = $request['lokasi_tpu'];
        $iptm_tumpangan->nama_almarhum = $request['nama_almarhum'];
        $iptm_tumpangan->nama_almarhum_lama = $request['nama_almarhum_lama'];
        $iptm_tumpangan->tanggal_wafat = $request['tanggal_wafat'];
        $iptm_tumpangan->blok_makam = $request['blok_makam'];
        $iptm_tumpangan->blad_makam = $request['blad_makam'];
        $iptm_tumpangan->petak_makam = $request['petak_makam'];
        $iptm_tumpangan->masa_berlaku_iptm = $request['masa_berlaku_iptm'];
        $iptm_tumpangan->pemakaman_id = $id;

        if ($request->hasFile('file_iptm_asli')) {
            $file = $request->file('file_iptm_asli');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());
            $iptm_tumpangan->file_iptm_asli = $file->getClientOriginalName();
        }
        if ($request->hasFile('file_sk_kematian_rumah_sakit')) {
            $file = $request->file('file_sk_kematian_rumah_sakit');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());
            $iptm_tumpangan->file_sk_kematian_rumah_sakit = $file->getClientOriginalName();
        }
        if ($request->hasFile('file_ktp_almarhum')) {
            $file = $request->file('file_ktp_almarhum');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());
            $iptm_tumpangan->file_ktp_almarhum = $file->getClientOriginalName();

        }
        $iptm_tumpangan->save();

        $randRegisNumber = 'TP00';
        echo ++$randRegisNumber;
        $registrasi = new nomorPemesanan();
        $registrasi->tumpangan_id = $iptm_tumpangan->id;
        $registrasi->Registrasi_number = $randRegisNumber;
        $registrasi->Registrasi_Status = 'Waiting';

        $registrasi->save();


        return redirect('/viewSukses/' . $iptm_tumpangan->id)->with('register_success', 'Welcome');

    }

    public function ShowFormTumpangan($pemakamanid)
    {
        $pemakamans = DB::table('pemakaman')
            ->where('pemakaman.id', '=', $pemakamanid)
            ->get();
        return view('Tumpangan.insert_tumpangan')->with([
            "pemakamanname" => $pemakamans,
        ]);
    }

    public function ShowFormTumpanganBaru(){
        $cetakPemakamanName = DB::table('pemakaman','users')
            ->join('users','pemakaman.id','=','users.pemakaman_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();

        return view('Tumpangan.CetakTumpangan')->with([
            "cetakPemakamanName"=>$cetakPemakamanName,
        ]);

    }

    public function ShowSuksesInput($id)
    {
        $tumpangan = DB::table('tumpangan')
            ->where('tumpangan.id', '=', $id)
            ->get();
        return view('Tumpangan.SuksesInsert')->with([
            "selesaitumpangan" => $tumpangan
        ]);
    }

}
