<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PemindahanController extends Controller
{
    //PEMINDAHAN

    /**
     * Admin TPU
     */

    public function showFormCetakPemindahan(){
        $cetakPemakamanName = DB::table('pemakaman','users')
            ->join('users','pemakaman.pemakamanid','=','users.pemakaman_id')
            ->where('users.id','=',Auth::user()->id)
            ->get();
        return view('Pemindahan.CetakPemindahan')->with([
            "cetakPemakamanName"=>$cetakPemakamanName,
        ]);

    }

    public function ShowRiwayatCetakIPTM(){
        return view("Pemakaman.history-cetak-iptm");
    }


    /**
     * Admin TPU
     */



    /**
     * Member
     */

}
