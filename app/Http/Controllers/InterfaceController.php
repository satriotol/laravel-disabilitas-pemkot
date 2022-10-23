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
use App\Models\Tagline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class InterfaceController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $faqs = Faq::all();
        $kontak_kami = KontakKami::first();
        $socialmedia = SocialMedia::all();
        $categories = Category::all();
        $products = Product::all();
        $productimages = ProductImage::all();
        $tagline = Tagline::first();
        return view('interface.index', compact('sliders', 'abouts', 'faqs', 'kontak_kami','categories', 'socialmedia', 'products', 'productimages', 'tagline'));


    }

    public function jual()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $kontak_kami = KontakKami::all();
        $list_category = Category::pluck('name', 'id');
        $tagline = Tagline::first();
        return view('interface.jual', compact('socialmedia', 'categories', 'kontak_kami', 'list_category', 'tagline'));
    }

    public function pesan(Request $request){
        dd('haloo');
    }

    public function cart()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $kontak_kami = KontakKami::all();
        $tagline = Tagline::first();
        return view('interface.cart', compact('socialmedia', 'categories', 'kontak_kami', 'tagline'));
    }

    public function daftar()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $kontak_kami = KontakKami::all();
        $tagline = Tagline::first();
        return view('interface.login', compact('socialmedia', 'categories', 'kontak_kami', 'tagline'));
    }

    public function productgallery()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        $categories = Category::all();
        $kontak_kami = KontakKami::all();
        $tagline = Tagline::first();
        return view('interface.gallery', compact('socialmedia', 'products', 'categories', 'kontak_kami', 'tagline'));
    }

    public function productlist()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        $categories = Category::all();
        $kontak_kami = KontakKami::all();
        $tagline = Tagline::first();
        return view('interface.list', compact('socialmedia', 'products', 'categories', 'kontak_kami', 'tagline'));
    }

    public function detail(Product $product)
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        // $products = Product::all();
        $post = Product::orderBy('id', 'asc')->cursorpaginate(5);
        $kontak_kami = KontakKami::all();
        $tagline = Tagline::first();
        return view('interface.detail', compact('socialmedia', 'product', 'categories', 'post', 'kontak_kami','tagline'));
    }
}
