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
        $product->description = $request->description;
        $product->stock = $request->stock;

        $product->save();

        Session::flash('flash_message', 'Data Product berhasil disimpan');

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::Find($id);
        $list_category = Category::pluck('name', 'id');
        return view('product.edit', compact('product', 'list_category'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->stock = $request->stock;

        $product->update();

        Session::flash('flash_message', 'Data Product berhasil disimpan');

        return redirect('/product');
    }

    public function delete($id){
        //menghapus data pada tabel data_peminjam
        $product = Product::find($id);
        $product->delete();

        Session::flash('flash_message', 'Data Product berhasil dihapus');
        Session::flash('penting', true);
        return redirect('/product');
    }
}
