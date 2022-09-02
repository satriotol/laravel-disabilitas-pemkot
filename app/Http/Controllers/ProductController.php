<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Auth;
use Session;

use Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id', 'asc')->paginate(5);
        return view('product.index', compact('product'));
    }

    public function create(){
        $list_category = Category::pluck('name', 'id');
        return view('product.create', compact('list_category'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
            'stock' => 'required'
        ]);

        $product = new Product;
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;

        $product->save();

        Session::flash('flash_message', 'Data peminjam berhasil disimpan');

        return redirect('/product');
    }
}
