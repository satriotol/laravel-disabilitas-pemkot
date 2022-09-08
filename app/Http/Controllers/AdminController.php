<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\SocialMedia;

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
        $user = User::count();
        $product = Product::count();
        $kategori = Category::count();
        $sosmed = SocialMedia::count();
        return view('dashboard1', compact('user', 'product', 'kategori', 'sosmed'));
    }
}
