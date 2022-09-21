<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\About;
use App\Models\Category;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $faqs = Faq::all();
        $categories = Category::all();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'categories'));



    }

    public function cart()
    {
        return view('interface.cart');
    }

    public function daftar()
    {
        return view('interface.login');
    }

    public function productgallery()
    {
        return view('interface.gallery');
    }

    public function productlist()
    {
        return view('interface.list');
    }

    public function detail()
    {
        return view('interface.detail');
    }
}
