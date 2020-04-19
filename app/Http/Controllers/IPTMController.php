<?php

namespace App\Http\Controllers;

use App\IPTM;
use App\Pemakaman;
use App\User;
use App\Tumpangan;
use App\Pemindahan;
use App\NomorPemesanan;
use App\Perpanjangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class IPTMController extends Controller
{

    public function ShowAllIPTM(){

        if(Auth::user()->role == "member"){
            return view('Member.IPTM.semua-iptm');
        }

        return redirect('/');
    }

    public function ShowSuksesInput($inputType, $id)
    {
        $output = null;

        if($inputType == "perpanjangan"){
            $output = DB::table('perpanjangan')
                ->where('perpanjangan.id', '=', $id)
                ->get();

        }else if($inputType == "tumpangan"){
            $output = DB::table('tumpangan')
                ->where('tumpangan.id', '=', $id)
                ->get();
        }else if($inputType == "pemindahan"){
            $output = DB::table('pemindahan')
                ->where('ijinpemindahan.pemindahanid', '=', $id)
                ->get();
        }

        return view('Perpanjangan.SuksesInsert_perpanjangan')->with([
            "data" => $output,
            "tipe" => $inputType
        ]);

    }

    public function PrintIPTM($inputType, $id){

        $output = null;

        if ($inputType == "perpanjangan")
        {
            $output = DB::table("perpanjangan")->where("perpanjangan.id", "=", $id)
                ->join('iptm', 'iptm.id', '=', 'perpanjangan.iptm_id')
                ->join('makam', 'makam.id', '=', 'iptm.makam_id')
                ->join('almarhum', 'almarhum.iptm_id', '=', 'iptm.id')
                ->join('ahli_waris', 'almarhum.ahli_waris_id', '=', 'ahli_waris.id')->get();
        }
        else if($inputType == "pemindahan")
        {
            $output = DB::table("pemindahan")->where("pemindahan.id", "=", $id)
                ->join('iptm', 'iptm.id', '=', 'pemindahan.iptm_id')
                ->join('makam', 'makam.id', '=', 'iptm.makam_id')
                ->join('almarhum', 'almarhum.iptm_id', '=', 'iptm.id')
                ->join('ahli_waris', 'almarhum.ahli_waris_id', '=', 'ahli_waris.id')->get();
        }
        else if($inputType == "tumpangan")
        {
            $output = DB::table("tumpangan")->where("tumpangan.id", "=", $id)
                ->join('iptm', 'iptm.id', '=', 'tumpangan.iptm_id')
                ->join('makam', 'makam.id', '=', 'iptm.makam_id')
                ->join('almarhum', 'almarhum.iptm_id', '=', 'iptm.id')
                ->join('ahli_waris', 'almarhum.ahli_waris_id', '=', 'ahli_waris.id')->get();
        }

        return view('printIPTM')->with([
            'data' => $output,
            "tipe" => $inputType
        ]);
    }

    public function ShowRiwayatCetakIPTM(){
        return view('IPTM.riwayat-cetak');
    }

    public function ShowMakamKadaluarsa(){
        $makam = IPTM::all()->where("masa_berlaku", "<", now());

        return view("Makam.makam-kadaluarsa")->with([
            "makamCol" => $makam,
        ]);
    }

    public function ShowNewIPTMForm(){
        if(Auth::user()->role == "member"){

            return view('Member.buat-iptm');

        }else{
            return redirect('/');
        }
    }

    //JSON
    public function RequestGetIPTM(Request $req){
        $noIptm = "";
        $namaAlmarum = "";
        if($req->query('noiptm')){
            $noIptm = $req->query('noiptm');
        }elseif ($req->query('namaAlmarhum')){
            $namaAlmarum = $req->query('namaAlmarhum');
        }

        $iptm = DB::table("iptm")
            ->join('makam', 'makam.id', '=', 'iptm.makam_id')
            ->join('almarhum', 'almarhum.iptm_id', '=', 'iptm.id')
            ->join('ahli_waris', 'almarhum.ahli_waris_id', '=', 'ahli_waris.id')
            ->where('iptm.nomor_iptm', "=", $noIptm)
            ->orWhere('almarhum.nama_almarhum', "=", $namaAlmarum)
            ->get();

        return json_encode($iptm);
    }

    public function RequestGetIPTMByNo(Request $req){
        $noIptm = $req->query('noiptm');

        $iptm = DB::table("iptm")
            ->join('makam', 'makam.id', '=', 'iptm.makam_id')
            ->join('pemakaman', 'pemakaman.id', '=', 'makam.pemakaman_id')
            ->join('almarhum', 'almarhum.iptm_id', '=', 'iptm.id')
            ->join('ahli_waris', 'almarhum.ahli_waris_id', '=', 'ahli_waris.id')
            ->where('iptm.nomor_iptm', "=", $noIptm)
            ->orderBy('almarhum.tanggal_wafat', 'desc')
            ->get();

        return json_encode($iptm);
    }

}
