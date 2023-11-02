<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\petugas;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    

    public function validasi(){
        $aziz = new pengaduan();
        return view('admin.validasi',['data'=>$aziz->all()]);
    }
    public function status($id){
        $aziz = new Pengaduan();
        $aziz->find($id)->update(['status'=> 'proses']);
        return back()->with('pesan','validasi berhasil');
    }
    
    public function login(){
        return view('admin.daftar');
    }

    public function ceklogin(Request $request){
        $p = new petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('petugas');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
        ;
    }

    public function register(){
        return view('admin.register');
    }

    public function simpen(request $request){
        $p =new petugas();
        $cek=$request->validate([
            'nama_petugas'=>'required',
            'username'=>'required|min:5',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);
        $p->create($request->all());
        if ($p->where('nama_petugas',$request->input('nama_petugas'))->where('username',$request->input('username'))->where('password',$request->input('password'))->where('telp',$request->input('telp'))->exists()){
            return redirect('petugas')->with('pesan','registrasi berhasil');
        }
        return back()->with('pesan','registrasi gagal kakak');
    }

    public function Tanggapan(){
        $aziz = new tanggapan();
        return view('admin.tanggapan',['data'=>$aziz->all()]);
    }

    public function simpenken(Request $request){
        
    }

    public function keluar(){
        session()->flush();
        return back();
    }
}
