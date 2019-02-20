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


/*sisi pemohon*/
Route::get('/','PemohonController@permohonanawal');
Route::post('/tambahpermohonan','PemohonController@tambahPermohonan');
Route::post('/detailpermohonan','PemohonController@detailPermohonan');
Route::get('/carisurat', 'PemohonController@cariSurat');

Route::get('/downloada','JenissuratController@downloada');
Route::get('/downloadb','JenissuratController@downloadb');

Route::get('/testnya', 'HomeController@testhalaman');

Auth::routes();

Route::get('/home', 'SuratController@showPermintaan')->name('home');

Route::post('/tambahatribut','AtributsuratController@create');
Route::post('/tambahatribut2','AtributsuratController@create2');
Route::get('/atributsurat', 'AtributsuratController@showatribut');
Route::post('/editatribut/{id}', 'AtributsuratController@editAtribut');
Route::post('/deleteatribut/{id}', 'AtributsuratController@deleteAtribut');

Route::get('/pejabat', 'PejabatController@showPejabat');
Route::post('/tambahpejabat', 'PejabatController@tambahPejabat');
Route::post('/tambahpejabat2', 'PejabatController@tambahPejabat2');
Route::post('/deletepejabat/{id}', 'PejabatController@deletePejabat');
Route::post('/editpejabat/{id}', 'PejabatController@editPejabat');
Route::get('/deletepejabat2', 'PejabatController@deletePejabat2');

Route::get('/daftarjenissurat','JenissuratController@daftarjenissurat');
Route::get('/jenissurat','JenissuratController@showjenissurat');
Route::post('/tambahjenissurat','JenissuratController@tambahjenissurat');
Route::post('/lihatjenissurat','JenissuratController@lihatjenissurat');
Route::get('/ubahkeaktifan/{id}','JenissuratController@ubahkeaktifan');
Route::get('/lihatform/{id}','JenissuratController@lihatform');
Route::get('/editjenissurat/{id}','JenissuratController@editjenissurat');
Route::post('/ubahjenissurat','JenissuratController@ubahjenissurat');


Route::get('/surat','SuratController@showPermintaan');
Route::get('/prosessurat/{id}', 'SuratController@prosessurat')->name('prosessurat');
Route::post('/cetaksurat','SuratController@cetaksurat');
Route::post('/updatestatus/{id}', 'SuratController@updateStatus');
Route::post('/tolaksurat/{id}', 'SuratController@tolakSurat');
Route::get('/suratselesai/{id}', 'SuratController@suratselesai');

Route::get('/riwayat','RiwayatController@showRiwayat');
Route::get('/lihatsuratselesai/{id}','RiwayatController@lihatsurat');