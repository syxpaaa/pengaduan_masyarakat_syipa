<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    

    public function validasi(){
        $p = new pengaduan();
        return view('admin.validasi',['data'=>$p->all()]);
    }
    public function cekValidasi(Request $request){
        $p = new Pengaduan();
        $cek = $request->validate([
            'nik'=>'required|max:16',
            'foto'=>'unique',
            'isi_laporan'=>'required|min:10',
            'tgl_pengaduan'=>'unique'
        ]);
        $p->create($request->all());
        return back()->with('pesan','validasi berhasil');
    }
    
    public function admin(){
        return view('admin.login');
    }

    public function ceklogin(Request $request){
        $p = new Petugas();
        $p = $p ->where('username',$request->input('username'))->where('password',$request->input('password'));
 
        if($p ->exists()){
         session(['username'=>$request->input('username'),'password'=>$request->input('password')
        ]);
         return redirect('petugas');
        }
        return back();
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

    public function logout(){
        session()->flush();
        return back();
    }
}
