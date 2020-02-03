<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/', 'UserController@index');
Route::get('/dashboard',    function(){
    return view('home');
});


Route::prefix('IPTM')->group(function () {

    Route::get('/buat-permohonan', 'IPTMController@ShowNewIPTMForm');

    //All IPTM
    Route::get('/{inputType}/sukses/{id}','IPTMController@ShowSuksesInput');
    Route::get('/{inputType}/cetak/{id}','IPTMController@PrintIPTM');

    //IPTM Perpanjangan
    Route::get('/perpanjangan','PerpanjanganController@ShowFormPerpanjanganBaru');
    Route::post('/perpanjangan/submit','PerpanjanganController@SubmitPerpanjangan');
    Route::get('/perpanjangan/{id}','PerpanjanganController@ShowFormPerpanjangan');
    //Route::get('/IPTM/perpanjangan/cetak/{id}', 'PerpanjanganController@PrintIPTMPerpanjangan');

    //IPTM Tumpangan
    Route::get('/tumpangan','TumpanganController@ShowFormTumpanganBaru');
    Route::get('/tumpangan/{id}','TumpanganController@ShowFormTumpangan');
    Route::post('/tumpangan/submit','TumpanganController@SubmitTumpangan');

    Route::get('/pemindahan','PemindahanController@showFormCetakPemindahan');
    Route::get('/riwayat','IPTMController@ShowRiwayatCetakIPTM');
    Route::get('/pemindahan/cetak/{id}', 'PemindahanController@PrintIPTMPerpanjangan');
    Route::get('/tumpangan/cetak/{id}', 'TumpanganController@PrintIPTMPerpanjangan');

});


Route::prefix('pemakaman')->group(function () {

    Route::get('/','PemakamanController@ShowPemakaman');
    Route::get('/pesanan','PemesananController@showStatusPemesanan');
    Route::get('/pesanan/riwayat',function (){
        return view('Pemesanan.history-pemesanan');
    });
    Route::get('/jadwal',function (){
        return view('Pemakaman.jadwal-pemakaman');
    });
    Route::get('/expired', 'IPTMController@ShowMakamKadaluarsa');
    Route::get('/kelola',function (){
        return view('Makam.manage-makam');
    });

    Route::get('/cari','PemakamanController@ShowAllPemakaman');
    Route::get('/edit/{id}','PemakamanController@ShowDetailPemakamanByUser');

});


Route::post('/insertTumpangan','PemakamanController@insertMakamTumpangan');
Route::get('/izinTumpangan',function (){
    return view('Tumpangan.insert_tumpangan');
});

Route::post('/pendaftaranPemakaman','PemakamanController@regisPemakaman');
Route::get('/pendaftaranPemakaman',function (){
    return view('Pemakaman.registerpic');
});
Route::get('/daftarMakam',function(){
    return view('Makam.insert_datamakam');
});
Route::get('/lihatMakam/{id}','PemakamanController@ShowMakam');
Route::get('/viewSukses/{id}','IPTMController@ShowSuksesInput');

Route::get('/profile',function (){
    return view('auth.profile');
});
Route::get('/profile/edit',function (){
    return view('auth.edit-profile');
});

Route::get("/json/iptm", "IPTMController@RequestGetIPTM");
