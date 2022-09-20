<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index() {
        return view('interface.index');
    }

    public function cart() {
        return view('interface.cart');
    }

    public function daftar() {
        return view('interface.login');
    }

    public function productgallery() {
        return view('interface.gallery');
    }

    public function productlist() {
        return view('interface.list');
    }

    public function detail() {
        return view('interface.detail');
    }
}
