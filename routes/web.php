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

Route::get('/coba3', function () {
    return view('user/pencariansurat');
});

Route::get('/keteranganaktif', function () {
    return view('user/skam');
});

Route::get('/kerjapraktik', function () {
    return view('user/kerjapraktik');
});




