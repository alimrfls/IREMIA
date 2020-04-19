<?php

namespace App\Http\Controllers;

use App\Tumpangan;
use App\Perpanjangan;
use App\NomorPemesanan;
use App\Pemakaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function showStatusPemesanan($tipe_pesanan){

        $output = null;

        if($tipe_pesanan == "perpanjangan"){
            $output = DB::table('perpanjangan')
                ->join('iptm', 'iptm.id', '=', 'perpanjangan.iptm_id')
                ->join('almarhum', 'iptm.almarhum_id', '=', 'almarhum.id')
                ->where('perpanjangan.status', '=', 'waiting')
                ->get();

        }else if($tipe_pesanan == "tumpangan"){
            $output = DB::table('tumpangan')
                ->where('status', '=', 'waiting')
                ->get();

        }else if($tipe_pesanan == "pemindahan"){
            $output = DB::table('pemindahan')
                ->where('status', '=', 'waiting')
                ->get();
        }

        return view('Pemesanan.status-pemesanan')->with([
            "data" => $output,
            "tipe" => $tipe_pesanan
        ]);
    }
}
