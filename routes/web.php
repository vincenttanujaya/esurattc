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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba2', function () {
    return view('user/coba2');
});

Route::get('/carisurat', function () {
    return view('user/pencariansurat');
});

Route::get('/keteranganaktif', function () {
    return view('user/skam');
});

Route::get('/kerjapraktik', function () {
    return view('user/kerjapraktik');
});

Route::get('/rekombeasiswa', function () {
    return view('user/rekombeasiswa');
});

Route::get('/rekomlomba', function () {
    return view('user/rekomlomba');
});

Route::get('/permohonandatalomba', function () {
    return view('user/permohonandatalomba');
});

Route::get('/permohonandatatugas', function () {
    return view('user/permohonandatatugas');
});


Route::get('/testnya', 'HomeController@testhalaman');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tambahatribut','AtributsuratController@create');
Route::get('/atributsurat', 'AtributsuratController@showatribut');
Route::post('/editatribut/{id}', 'AtributsuratController@editAtribut');
Route::post('/deleteatribut/{id}', 'AtributsuratController@deleteAtribut');

Route::get('/pejabat', 'PejabatController@showPejabat');
Route::post('/tambahpejabat', 'PejabatController@tambahPejabat');
Route::post('/deletepejabat/{id}', 'PejabatController@deletePejabat');
Route::post('/editpejabat/{id}', 'PejabatController@editPejabat');
Route::get('/deletepejabat2', 'PejabatController@deletePejabat2');

Route::get('/permohonansurat', 'SuratController@showPermintaan');
Route::get('/jenissurat', 'SuratController@showJenis');
