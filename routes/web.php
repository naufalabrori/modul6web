<?php

use Illuminate\Support\Facades\Route;

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
Route::get('berita', 'beritaController@index');
Route::get('berita/tambah','beritaController@create');
Route::post('berita/tambah/store','beritaController@store');
Route::get('berita/{berita}/destroy','beritaController@destroy');

Route::get('/', function () {
    return view('isi');
});


