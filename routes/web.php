<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[DataController::class,'index'])->name('siswa');

Route::get('/siswa/detail/{nim}',[DataController::class,'detail']);

Route::get('/siswa/add',[DataController::class,'add']);
Route::post('/siswa/insert',[DataController::class,'insert']);

Route::get('/edit/{nim}',[DataController::class,'edit']);
Route::post('/update/{nim}',[DataController::class,'update']);

Route::get('/siswa/delete/{nim}',[DataController::class,'delete']);

Route::get('/pagenilai',[NilaiController::class,'pagenilai'])->name('nilai');
Route::get('/ganti/{id_nilai}',[NilaiController::class,'ganti']);
Route::post('/update/{id_nilai}',[NilaiController::class,'update']);

Route::get('/nilai/add',[NilaiController::class,'add']);
Route::post('/nilai/insert',[NilaiController::class,'insert']);


Route::get('/nilai/delete/{id_nilai}',[NilaiController::class,'delete']);

Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');
