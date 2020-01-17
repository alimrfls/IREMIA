<?php

namespace App\Http\Controllers;

use App\IPTMTumpangan;
use App\IPTMPerpanjangan;
use App\makamTumpangan;
use App\nomorPemesanan;
use App\Pemakaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function showStatusPemesanan(){
        $nomorpemesanan = nomorPemesanan::all();
        return view('Pemesanan.status-pemesanan')->with([
            'statusPemesanan'=>$nomorpemesanan
        ]);
    }
}
