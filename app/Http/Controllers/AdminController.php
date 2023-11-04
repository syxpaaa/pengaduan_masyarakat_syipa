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
        return view('admin.validasi',['data'=>$aziz->where('status','0')->get()]);
    }
    public function status($id){
        $aziz = new Pengaduan();
        $aziz->find($id)->update(['status'=> 'proses']);
        return back();
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
        $p = new tanggapan();
        $p->create($request->all());
        if ($p->where('id_tanggapan',$request->input('id_tanggapan'))->where('id_pengaduan',$request->input('id_pengaduan'))->where('tgl_tanggapan',$request->input('tgl_tanggapan'))->where('tanggapan',$request->input('tanggapan'))->where('id_petugas',$request->input('id_petugas'))->exists()){
            return redirect('validasi')->with('pesan','registrasi berhasil');
        }
        return back()->with('pesan','tanggapan gagal dikirim');
    }

    public function keluar(){
        session()->flush();
        return back();
    }
    public function tanggapin(){
        $aziz = new tanggapan();
        return view('admin.tanggapin',['data'=>$aziz->all()]);
    }
    public function simpenin(Request $request){
        $aziz = new tanggapan();
        $aziz->create($request->all());
        if ($aziz->where('id_tanggapan',$request->input('id_tanggapan'))->where('id_pengaduan',$request->input('id_pengaduan'))->where('tgl_tanggapan',$request->input('tgl_tanggapan'))->where('tanggapan',$request->input('tanggapan'))->where('id_petugas',$request->input('id_petugas'))->exists()){
            return redirect('validasi')->with('pesan','registrasi berhasil');
        }
    }
    public function laporan(){
        $inem = new pengaduan();
        return view('admin.laporan',['data'=>$inem->all()]);
    }
}
