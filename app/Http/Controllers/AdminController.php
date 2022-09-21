<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\SocialMedia;

class AdminController extends Controller
{
    public function dashboard(){
        $user = User::count();
        $product = Product::count();
        $kategori = Category::count();
        $sosmed = SocialMedia::count();
        return view('dashboard1', compact('user', 'product', 'kategori', 'sosmed'));
    }
}
