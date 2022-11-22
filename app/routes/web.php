<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UniversitasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/saya', 'App\Http\Controllers\HomeController@index');
Route::get('/data', 'App\Http\Controllers\DataController@index');
Route::get('/data/{judul}', 'App\Http\Controllers\DataController@detail');
Route::get('/home', 'App\Http\Controllers\DataController@index' )->name('home'); 


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('pegawai', PegawaiController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('universitas', UniversitasController::class);
Route::resource('inputhipmi', \App\Http\Controllers\InputhipmiController::class);

//Route get => pegawai => index
//Route get => pegawai/create
//Route post => pegawai => store
//Route get => pegawai{id} => show
//Route put/patch => pegawai/{id} => update
//Route delete => pegawai{id} => delete 
//Route get => pegawai/(id)/edit => edit
