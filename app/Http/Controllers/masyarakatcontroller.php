<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
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
        // $aziz->create([
        // 'nik'=>$request->nik,
        // 'nama'=>$request->nama,
        // 'username'=>$request->username,
        // 'password'=>$request->password,
        // 'telp'=>$request->telp,
        // ]);
       
        //return redirect('masyarakat/registrasi')->with('info','Anda berhasil Registrasi');
        return back()->with('pesan','registrasi berhasil kakak');
    }

    public function login(){
        return view('masyarakat.login');
    }

    public function ceklogin(Request $request){
        $aziz = new Masyarakat();
        //cek username dan password exists(ada)di tabel masyarakat
        if ($aziz->where('username',$request->input)->where('password',$request->input)->exists()) {
            return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    }
    public function laporan(){
        return view('masyarakat.laporan');
    }

    public function pengaduan(){
        return view('masyarakat.pengaduan');
    }

    public function halaman(){
        return view('masyarakat/halaman');
    }
}
