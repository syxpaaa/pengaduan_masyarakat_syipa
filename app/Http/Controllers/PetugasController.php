<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        return view('petugaslayot');
    }
    public function login(){
        return view('Administrator.Login');
        }
    
        public function ceklogin(Request $request){
           $p = new Petugas();
           $p = $p ->where('username',$request->input('username'))->where('password',$request->input('password'));
    
           if($p ->exists()){
            session(['username'=>$request->input('username'),
            'password'=>$request->input('password')
           ]);
            return redirect('/admin');
           }
           return back();
        }
        public function logout(){
            session()->flush();
            return back();
        }
    
}
