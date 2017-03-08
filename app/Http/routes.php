<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::group(['middleware' => ['web']],function() {
	Route::resource('mahasiswa','MahasiswaController');
	Route::resource('dosen','DosenController');
	Route::resource('perusahaan','PerusahaanController');
	Route::resource('pkl','PklController');
	Route::resource('prodi','ProdiController');
	Route::resource('bimbingan','BimbinganController');
	Route::resource('jadwal','JadwalController');
	Route::resource('status','StatusController');
	Route::resource('bidang','BidangController');
	Route::resource('nilai','NilaiController');
	Route::get('nilai', ['as' => 'nilai', 'uses' => 'NilaiController@index']);
	Route::get('bidang', ['as' => 'bidang', 'uses' => 'BidangController@index']);
	Route::get('status', ['as' => 'status', 'uses' => 'StatusController@index']);
	Route::get('jadwal', ['as' => 'jadwal', 'uses' => 'JadwalController@index']);
	Route::get('bimbingan', ['as' => 'bimbingan', 'uses' => 'BimbinganController@index']);
	Route::get('mahasiswa', ['as' => 'mahasiswa', 'uses' => 'MahasiswaController@index']);
	Route::get('dosen', ['as' => 'dosen', 'uses' => 'DosenController@index']);
	Route::get('perusahaan', ['as' => 'perusahaan', 'uses' => 'PerusahaanController@index']);
	Route::get('pkl', ['as' => 'pkl', 'uses' => 'PklController@index']);
	Route::get('prodi', ['as' => 'prodi', 'uses' => 'ProdiController@index']);		
});
Route::auth();

Route::get('/home', 'HomeController@index');
