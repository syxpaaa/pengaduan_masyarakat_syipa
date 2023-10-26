<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        return view('petugaslayot');
    }
    
    public function home(){
        return view('admin.home');
    }
        public function logout(){
            session()->flush();
            return back();
        }
    
}
