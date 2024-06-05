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
    return view('auth/login');
});


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth', 'cekrole:admin']], function () {
    Route::get('/admin', 'HomeController@admin');
    Route::resource('rekapditolak', 'admin\RekapditolakController');
    Route::resource('rekapdisetujui', 'admin\RekapdisetujuiController');
    Route::resource('konfirmasi', 'admin\KonfirmasiController');
});

Route::group(['middleware' => ['auth', 'cekrole:instansi']], function () {
    Route::get('/instansi', 'HomeController@instansi');
    Route::resource('terkirim', 'instansi\TerkirimController');
    Route::resource('draft', 'instansi\DraftController');
    Route::resource('disetujui', 'instansi\DisetujuiController');
    Route::resource('ditolak', 'instansi\DitolakController');
    Route::resource('pengajuan', 'instansi\PengajuanController');
    Route::resource('profil', 'instansi\ProfilController');
});
