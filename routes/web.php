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

// Route::get('/', function () {
//     return view('welcome');
// });
// dashboard
//=========================================================================
Auth::routes();
Route::get('/', 'UserController@index');
Route::get('/dashboard',    function(){
    return view('home');
});
//==========================================================================



//All IPTM
Route::get('/IPTM/{inputType}/sukses/{id}','IPTMController@ShowSuksesInput');
Route::get('/IPTM/{inputType}/cetak/{id}','IPTMController@PrintIPTM');

//IPTM Perpanjangan

Route::get('/IPTM/perpanjangan','PerpanjanganController@ShowFormPerpanjanganBaru');
Route::post('/IPTM/perpanjangan/submit','PerpanjanganController@SubmitPerpanjangan');
Route::get('/IPTM/perpanjangan/{id}','PerpanjanganController@ShowFormPerpanjangan');
//Route::get('/IPTM/perpanjangan/cetak/{id}', 'PerpanjanganController@PrintIPTMPerpanjangan');


//IPTM Tumpangan

Route::get('/IPTM/tumpangan','TumpanganController@ShowFormTumpanganBaru');
Route::get('/IPTM/tumpangan/{id}','TumpanganController@ShowFormTumpangan');
Route::post('/IPTM/tumpangan/submit','TumpanganController@SubmitTumpangan');

Route::post('/insertTumpangan','PemakamanController@insertMakamTumpangan');
Route::get('/izinTumpangan',function (){
    return view('Tumpangan.insert_tumpangan');
});


Route::get('/IPTM/tumpangan/cetak/{id}', 'TumpanganController@PrintIPTMPerpanjangan');


//routes regis Pemakaman
//==========================================================================
Route::post('/pendaftaranPemakaman','PemakamanController@regisPemakaman');
Route::get('/pendaftaranPemakaman',function (){
    return view('Pemakaman.registerpic');
});

Route::get('/pemakaman','PemakamanController@ShowPemakaman');
//==========================================================================


//add makam sesuai tpu
//button insert di lihat Pemakaman
//==========================================================================

Route::get('/daftarMakam',function(){
    return view('Makam.insert_datamakam');
});
//==========================================================================


//lihat Makam
//==========================================================================
Route::get('/lihatMakam/{id}','PemakamanController@ShowMakam');

//==========================================================================


//ijin tumpangan
//==========================================================================

Route::get('/viewSukses/{id}','IPTMController@ShowSuksesInput');
//==========================================================================


// ijin perpanjangan
//=============================================================================================

//=============================================================================================


// cari dan liat Pemakaman
//=====================================================================================
Route::get('/pemakaman/cari','PemakamanController@ShowAllPemakaman');
Route::get('/pemakaman/{id}','PemakamanController@ShowDetailPemakamanByUser');
//=====================================================================================


//Cetak By Admin
//=======================================================


Route::get('/IPTM/pemindahan','PemindahanController@showFormCetakPemindahan');
Route::get('/IPTM/riwayat','IPTMController@ShowRiwayatCetakIPTM');



Route::get('/IPTM/pemindahan/cetak/{id}', 'PemindahanController@PrintIPTMPerpanjangan');

//=======================================================


// Member can Access temporary
//=======================================================

Route::get('/profile',function (){
    return view('auth.profile');
});

Route::get('/profile/edit',function (){
    return view('auth.edit-profile');
});

Route::get('/pemakaman/pesanan','PemesananController@showStatusPemesanan');

Route::get('/pemakaman/pesanan/riwayat',function (){
    return view('Pemesanan.history-pemesanan');
});

Route::get('/pemakaman/jadwal',function (){
    return view('Pemakaman.jadwal-pemakaman');
});

Route::get('/pemakaman/kadaluarsa',function (){
    return view('Makam.makam-kadaluarsa');
});
//Route::get('/pemakaman/pesanan',function (){
//    return view('Pemesanan.pemeriksaan-pemesanan');
//});
Route::get('/pemakaman/kelola',function (){
    return view('Makam.manage-makam');
});
//========================================================
