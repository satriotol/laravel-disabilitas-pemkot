<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\About;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
<<<<<<< HEAD
        $abouts = About::all();
        return view('interface.index', compact('sliders', 'abouts'));



=======
        return view('interface.index', compact('sliders'));
        $faqs = Faq::all();
        return view('interface.index', compact('faqs'));
>>>>>>> 2d66db75ac1899d5029a85b6f179a14380a3b6f6
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
