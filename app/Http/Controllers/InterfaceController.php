<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\About;
<<<<<<< HEAD
use App\Models\Category;
=======
use App\Models\SocialMedia;
>>>>>>> 5e583cecec836b939c980c2c39cc75a9c7237fee
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $faqs = Faq::all();
<<<<<<< HEAD
        $categories = Category::all();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'categories'));
=======
        $socialmedia = SocialMedia::all();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'socialmedia'));
>>>>>>> 5e583cecec836b939c980c2c39cc75a9c7237fee



    }

    public function cart()
    {
        $socialmedia = SocialMedia::all();
        return view('interface.cart', compact('socialmedia'));
    }

    public function daftar()
    {
        $socialmedia = SocialMedia::all();
        return view('interface.login', compact('socialmedia'));
    }

    public function productgallery()
    {
        $socialmedia = SocialMedia::all();
        return view('interface.gallery', compact('socialmedia'));
    }

    public function productlist()
    {
        $socialmedia = SocialMedia::all();
        return view('interface.list', compact('socialmedia'));
    }

    public function detail()
    {
        $socialmedia = SocialMedia::all();
        return view('interface.detail', compact('socialmedia'));
    }
}
