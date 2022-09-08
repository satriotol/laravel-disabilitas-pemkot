<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tabel1(){
        return view('admin');
    }

    public function tabel2(){
        return view('admin');
    }

    public function tabel3(){
        return view('admin');
    }

    public function dashboard(){
        return view('dashboard1');
    }
}
