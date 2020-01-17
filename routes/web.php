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
Route::post('/insertTumpangan','PemakamanController@insertMakamTumpangan');
Route::get('/daftarMakam',function(){
    return view('Makam.insert_datamakam');
});
//==========================================================================


//lihat Makam
//==========================================================================
Route::get('/lihatMakam/{id}','PemakamanController@ShowMakam');
Route::get('/izinTumpangan',function (){
    return view('Tumpangan.insert_tumpangan');
});
//==========================================================================


//ijin tumpangan
//==========================================================================
Route::get('/formTumpangan/{id}','IPTMController@ShowFormTumpangan');
Route::post('/izinTumpangan/{id}','IPTMController@izinTumpangan');
Route::get('/viewSukses/{id}','IPTMController@ShowSuksesInput');
//==========================================================================


// ijin perpanjangan
//=============================================================================================
Route::get('/formPerpanjangan/{id}','IPTMController@ShowFormPerpanjangan');
Route::post('/izinPerpanjangan','IPTMController@izinPerpanjangan');
Route::get('/view-sukses_perpanjangan/{id}','IPTMController@ShowSuksesInputPerpanjangan');
//=============================================================================================


// cari dan liat Pemakaman
//=====================================================================================
Route::get('/pemakaman/cari','PemakamanController@ShowAllPemakaman');
Route::get('/pemakaman/{id}','PemakamanController@ShowDetailPemakamanByUser');
//=====================================================================================


//Cetak By Admin
//=======================================================
Route::get('/IPTM/perpanjangan','IPTMController@showFormCetakPerpanjangan');
Route::get('/IPTM/tumpangan','IPTMController@showFormCetakTumpangan');
Route::get('/IPTM/pemindahan','IPTMController@showFormCetakPemindahan');
Route::get('/IPTM/riwayat','IPTMController@ShowRiwayatCetakIPTM');

Route::get('/print_iptm_perpanjangan/{id}', 'IPTMController@PrintIPTMPerpanjangan');

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
