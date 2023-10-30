<?php

use App\Http\Controllers\masyarakatcontroller;
use App\Http\Controllers\PetugasController;
use App\Http\Middleware\validasiMasyarakat;
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
Route::get('pengaduan',[masyarakatcontroller::class,'pengaduan'])->middleware(validasiMasyarakat::class);
Route::post('pengaduan',[masyarakatcontroller::class,'cekpengaduan']);
Route::get('laporan',[Masyarakatcontroller::class,'laporan']);
Route::get('registrasi',[Masyarakatcontroller::class,'registrasi']);
Route::post('simpan',[masyarakatcontroller::class,'simpan']);
Route::get('login',[masyarakatcontroller::class,'login']);
Route::post('login',[masyarakatcontroller::class,'ceklogin']);
Route::get('logot',[masyarakatcontroller::class,'logout']);




//data petugas
Route::get('petugas',[PetugasController::class,'index']);
Route::get('home',[PetugasController::class,'home']);
Route::get('validasi',[PetugasController::class,'validasi']);
Route::post('validasi',[PetugasController::class,'cekvalidasi']);

//admin
Route::get('admin',[PetugasController::class,'admin']);
Route::post('.login',[PetugasController::class,'ceklogin']);
Route::get('register',[PetugasController::class,'register']);
Route::post('simpen',[PetugasController::class,'simpen']);
