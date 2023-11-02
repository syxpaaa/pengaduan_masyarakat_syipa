<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\masyarakatcontroller;
use App\Http\Controllers\PetugasController;
use App\Http\Middleware\cekAdmin;
use App\Http\Middleware\ValidasiAdmin;
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
Route::get('laporan',[Masyarakatcontroller::class,'laporan'])->middleware(validasiMasyarakat::class);
Route::get('registrasi',[Masyarakatcontroller::class,'registrasi']);
Route::post('simpan',[masyarakatcontroller::class,'simpan']);
Route::get('login',[masyarakatcontroller::class,'login']);
Route::post('login',[masyarakatcontroller::class,'ceklogin']);
Route::get('logot',[masyarakatcontroller::class,'logout']);




//data petugas
Route::get('petugas',[AdminController::class,'index'])->middleware(ValidasiAdmin::class);
//Route::get('home',[PetugasController::class,'home']);
Route::get('validasi',[AdminController::class,'validasi'])->middleware(ValidasiAdmin::class);
Route::get('status/{id}',[AdminController::class,'status']);
Route::get('keluar',[AdminController::class,'keluar']);

//admin
Route::get('Tanggapan',[AdminController::class,'Tanggapan'])->middleware(ValidasiAdmin::class);
Route::post('tanggapan',[AdminController::class,'simpenken']);
Route::get('petugas/login',[AdminController::class,'login']);
Route::post('petugas/login',[AdminController::class,'ceklogin']);
Route::get('register',[AdminController::class,'register'])->middleware(ValidasiAdmin::class,cekAdmin::class);
Route::post('register',[AdminController::class,'simpen']);
