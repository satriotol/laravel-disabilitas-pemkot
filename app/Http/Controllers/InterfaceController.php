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
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class InterfaceController extends Controller
{
    public function __construct()
    {
      //its just a dummy data object.
      $kontak_kami = KontakKami::first();

      // Sharing is caring
      View::share('kontak_kami', $kontak_kami);
    }
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
        return view('interface.index', compact('sliders', 'abouts', 'faqs','categories', 'socialmedia', 'products', 'productimages', 'tagline'));


    }

    public function jual()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $list_category = Category::pluck('name', 'id');
        $tagline = Tagline::first();
        $kontak_kami = KontakKami::first();
        return view('interface.jual', compact('socialmedia', 'categories', 'list_category', 'tagline','kontak_kami'));
    }

    public function pesan(Request $request){
        dd('haloo');
    }

    public function cart()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $tagline = Tagline::first();
        $kontak_kami = KontakKami::first();
        return view('interface.cart', compact('socialmedia', 'categories', 'tagline','kontak_kami'));
    }

    public function daftar()
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        $tagline = Tagline::first();
        $kontak_kami = KontakKami::first();
        return view('interface.login', compact('socialmedia', 'categories', 'tagline','kontak_kami'));
    }

    public function productgallery()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::paginate(9);
        $categories = Category::all();
        $tagline = Tagline::first();
        return view('interface.gallery', compact('socialmedia', 'products', 'categories', 'tagline'));
    }

    public function productgallerycategory(Category $category)
    {
        $socialmedia = SocialMedia::all();
        $products = Product::where('category_id', $category->id)->paginate(9);
        $categories = Category::all();
        $tagline = Tagline::first();
        return view('interface.gallery', compact('socialmedia', 'products', 'categories', 'category', 'tagline'));
    }

    public function productlist()
    {
        $socialmedia = SocialMedia::all();
        $products = Product::all();
        $categories = Category::all();
        $tagline = Tagline::first();
        return view('interface.list', compact('socialmedia', 'products', 'categories', 'tagline'));
    }

    public function productlistcategory(Category $category)
    {
        $socialmedia = SocialMedia::all();
        $products = $category->products;
        $categories = Category::all();
        $tagline = Tagline::first();
        return view('interface.list', compact('socialmedia', 'products', 'categories', 'category', 'tagline'));
    }

    public function detail(Product $product)
    {
        $categories = Category::all();
        $socialmedia = SocialMedia::all();
        // $products = Product::all();
        $post = Product::orderBy('id', 'asc')->cursorpaginate(5);
        $tagline = Tagline::first();
        $kontak_kami = KontakKami::first();
        return view('interface.detail', compact('socialmedia', 'product','categories', 'post','tagline','kontak_kami'));
    }
}
