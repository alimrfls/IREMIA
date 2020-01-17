<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakPesananController extends Controller
{
    public function printIPTM()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }
}
