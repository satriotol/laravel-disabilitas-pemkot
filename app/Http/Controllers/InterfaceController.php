<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Slider;
use App\Models\About;
use App\Models\KontakKami;
use App\Models\SocialMedia;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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
        $products = Product::all();
        $productimages = ProductImage::all();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'kontak_kami','categories', 'socialmedia', 'products', 'productimages'));


    }

    public function cart()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        return view('interface.cart', compact('socialmedia', 'categories'));
    }

    public function daftar()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        return view('interface.login', compact('socialmedia', 'categories'));
    }

    public function productgallery()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        $categories = Category::all();
        return view('interface.gallery', compact('socialmedia', 'products', 'categories'));
    }

    public function productlist()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        $categories = Category::all();
        return view('interface.list', compact('socialmedia', 'products', 'categories'));
    }

    public function detail()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        return view('interface.detail', compact('socialmedia', 'products'));
    }
}
