<?php

namespace App\Http\Controllers;

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
            $output = DB::table('ijinpemindahan')
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
            $output = Perpanjangan::find($id);
        }
        else if($inputType == "pemindahan")
        {
            $output = Pemindahan::find($id);
        }
        else if($inputType == "tumpangan")
        {
            $output = Tumpangan::find($id);
        }

        return view('printIPTM')->with([
            'data' => $output,
            "tipe" => $inputType
        ]);
    }

}
