<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\About;
use App\Models\KontakKami;
use App\Models\SocialMedia;
use App\Models\Category;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $faqs = Faq::all();
        $kontak_kami = KontakKami::all();
        $socialmedia = SocialMedia::all();
        $categories = Category::all();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'kontak_kami','categories', 'socialmedia'));


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
