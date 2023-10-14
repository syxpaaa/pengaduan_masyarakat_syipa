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
Route::get('/',[Masyarakatcontroller::class,'index']);
Route::get('registrasi',[Masyarakatcontroller::class,'registrasi']);
Route::post('simpan',[masyarakatcontroller::class,'simpan']);
Route::get('login',[masyarakatcontroller::class,'login']);
Route::post('login',[masyarakatcontroller::class,'ceklogin']);
Route::get('laporan',[MasyarakatController::class,'laporan']);
Route::post('laporan',[MasyarakatController::class,'cekLaporan']);
Route::get('pengaduan',[masyarakatcontroller::class,'pengaduan']);


//data petugas
Route::get('petugas',[PetugasController::class,'index']);
