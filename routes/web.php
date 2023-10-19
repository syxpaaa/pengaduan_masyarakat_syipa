<?php

use App\Http\Controllers\masyarakatcontroller;
use App\Http\Controllers\PetugasController;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




//data masyarakat
Route::get('masyarakat',[Masyarakatcontroller::class,'index']);
Route::get('masyarakat/registrasi',[Masyarakatcontroller::class,'registrasi']);
Route::post('masyarakat/simpan',[masyarakatcontroller::class,'simpan']);
Route::get('masyarakat/login',[masyarakatcontroller::class,'login']);
Route::post('masyarakat/login',[masyarakatcontroller::class,'ceklogin']);
Route::get('masyarakat/laporan',[MasyarakatController::class,'laporan']);
Route::post('masyarakat/laporan',[MasyarakatController::class,'cekLaporan']);

Route::get('masyarakat/dasbor',[Masyarakatcontroller::class,'dasbor']);