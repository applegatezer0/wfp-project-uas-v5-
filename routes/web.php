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
    return view('layouts.app');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/karyawan','HomeController@karyawan');
Route::get('/home','HomeController@index');
Route::get('/mahasiswa','HomeController@student');
Route::get('/profilMah', 'HomeController@profilMah');
Route::get('/jadwalMatkulMah', 'MatakuliahController@jadwalMatkulMah');
Route::get('/daftarKelasMah', 'HomeController@daftarKelasMah');
Route::get('/historyPerwalian', 'HomeController@historyPerwalianMah');
//Route::get('/transkripMah', 'MatakuliahController@transkrip');
Route::get('/transkripMah/{id}', 'MatakuliahController@show');

Route::get('/informasiMatkul', 'MatakuliahController@informasiMatkul');
Route::get('/inputMatkulBaru', 'MatakuliahController@inputMatkulBaru');
Route::get('/simpanMatkulBaru', 'MatakuliahController@store');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

//atau
/*Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/routes', 'HomeController@admin');
});*/