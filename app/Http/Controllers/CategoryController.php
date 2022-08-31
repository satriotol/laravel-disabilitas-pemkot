<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function kategori(){
        return view('categori');
    }

    public function create(){
        return view('kategori.create');
    }
}
