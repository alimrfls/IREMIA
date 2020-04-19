<?php

namespace App\Http\Controllers;

use App\AhliWaris;
use App\Almarhum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Tumpangan;
use App\NomorPemesanan;

class TumpanganController extends Controller
{
    //TUMPANGAN
    public function SubmitTumpangan(Request $request)
    {
        $id = $request['iptm_id'];

        $randomId = "   TPN-".rand(pow(10, 5-1), pow(10, 5)-1);

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


        $almarhum = new Almarhum();
        $almarhum->ahli_waris_id = $ahliwaris->id;

        $almarhum->nama_almarhum = $request->nama_almarhum;
        $almarhum->tanggal_wafat = $request->tanggal_wafat;

        $almarhum->nomor_ktp_almarhum = $request->nomor_ktp_almarhum;
        if ($request->hasFile('file_ktp_almarhum')) {
            $file = $request->file('file_ktp_almarhum');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());

            $almarhum->file_ktp_almarhum = $file->getClientOriginalName();
        }

        $almarhum->nomor_kk_almarhum = $request->nomor_kk_almarhum;
        if ($request->hasFile('file_kk_almarhum')) {
            $file = $request->file('file_kk_almarhum');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());

            $almarhum->file_kk_almarhum = $file->getClientOriginalName();
        }

        //Surat pengantar RT/RW
        $almarhum->nomor_sp_rtrw = $request->nomor_sp_rtrw;
        $almarhum->tanggal_sp_rtrw = $request->tanggal_sp_rtrw;
        if ($request->hasFile('file_sp_rtrw')) {
            $file = $request->file('file_sp_rtrw');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());

            $almarhum->file_sp_rtrw = $file->getClientOriginalName();
        }

        //Surat keterangan RS
        $almarhum->nomor_sk_kematian_rs = $request->nomor_sk_kematian_rs;
        $almarhum->tanggal_sk_kematian_rs = $request->tanggal_sk_kematian_rs;
        if ($request->hasFile('file_sk_kematian_rs')) {
            $file = $request->file('file_sk_kematian_rs');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());

            $almarhum->file_sk_kematian_rs = $file->getClientOriginalName();
        }
        $almarhum->save();


        $iptm_tumpangan = new Tumpangan();
        $iptm_tumpangan->iptm_lama_id = $id;
        $iptm_tumpangan->status = "waiting";

        $iptm_tumpangan->almarhum_id = $almarhum->id;
        $iptm_tumpangan->pemohon_id = Auth::user()->id;

        $iptm_tumpangan->nomor_surat = $randomId;
        $iptm_tumpangan->tanggal_surat = now();

        $iptm_tumpangan->nomor_sk_kehilangan_kepolisian = $request->nomor_kehilangan_kepolisian;
        $iptm_tumpangan->tanggal_sk_kehilangan_kepolisian = $request->tanggal_kehilangan_kepolisian;

        if ($request->hasFile('file_sk_kehilangan_kepolisian')) {
            $file = $request->file('file_sk_kehilangan_kepolisian');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());
            $iptm_tumpangan->file_sk_kehilangan_kepolisian = $file->getClientOriginalName();
        }
        if ($request->hasFile('file_iptm_asli')) {
            $file = $request->file('file_iptm_asli');
            $file->move(public_path('/Document/Tumpangan'), $file->getClientOriginalName());
            $iptm_tumpangan->file_iptm_asli = $file->getClientOriginalName();
        }

        $iptm_tumpangan->save();

        return redirect('/IPTM/tumpangan/sukses/' . $iptm_tumpangan->id)->with('register_success', 'Welcome');
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

        $user_role= Auth::user()->role;
        if($user_role == "admin_tpu") {
            $cetakPemakamanName = DB::table('pemakaman', 'users')
                ->join('users', 'pemakaman.id', '=', 'users.pemakaman_id')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

            return view('Tumpangan.CetakTumpangan')->with([
                "cetakPemakamanName" => $cetakPemakamanName,
            ]);
        }
        return view ('Member.IPTM.ajukan-tumpangan');

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
