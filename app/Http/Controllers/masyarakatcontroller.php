<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class masyarakatcontroller extends Controller
{
    public function index(){
        return view('masyarakat.dasbor');
    }

    public function registrasi(){
        return view('masyarakat.registrasi');
    }

    public function simpan(request $request){
        $aziz =new Masyarakat();
        // cek data yang di kirim
        $cek=$request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:5',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);
        $aziz->create($request->all());
        if ($aziz->where('nik',$request->input('nik'))->where('username',$request->input('username'))->exists()){
            return redirect('dasbor')->with('pesan','login berhasil');
        }
        return back()->with('pesan','registrasi gagal kakak');
    }

    public function login(){
        return view('masyarakat.login');
    }

    public function ceklogin(Request $request){
        $aziz = new Masyarakat();
        //cek username dan password exists(ada)di tabel masyarakat
        if ($aziz->where('username',$request->input)->where('password',$request->input)->exists()) {
            return redirect('dasbor')->with('pesan','login berhasil');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');

    }
    public function laporan(){
        return view('masyarakat.laporan');
    }

    public function pengaduan(){
        return view('masyarakat.pengaduan');
    }

    public function cekpengaduan(Request $request){
        $cek = $request->validate([
            'nik'=> 'required| max:16',
            'tgl_pengaduan'=> 'required|date',
            'foto'=> 'required',
            'isi_laporan'=>'required',
            'status'=>'0'
        ]);
       // siapkan variabel untuk menampung file
       $foto = $request->file('foto');
       // tetntukan path file akan di simpan
       $folder = 'upload_data';
       // pindahkan file ke target folder
       $foto->move($folder, $foto->getClientOriginalName());

        $aziz = new pengaduan();
        $aziz->create($request->all());
       
       return redirect('dasbor')->with('pesan','pengaduan berhasil di kirim');
       
    }

    public function halaman(){
        return view('masyarakat.halaman');
    }
    public function logout(){
        session()->flush();
        return back();
    }
}
