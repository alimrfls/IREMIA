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
    public function showStatusPemesanan(){
        $nomorpemesanan = NomorPemesanan::all();
        return view('Pemesanan.status-pemesanan')->with([
            'statusPemesanan'=>$nomorpemesanan
        ]);
    }
}
