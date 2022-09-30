<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::where('user_id', Auth::user()->id)->get();
        return view('product.index', compact('product'));
    }

    public function create()
    {
        $list_category = Category::pluck('name', 'id');
        return view('product.create', compact('list_category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'discount_price' => 'nullable',
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

    public function edit(Product $product)
    {
        $list_category = Category::pluck('name', 'id');
        return view('product.create', compact('product', 'list_category'));
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'discount_price' => 'nullable',
            'description' => 'required',
            'stock' => 'required'
        ]);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->stock = $request->stock;

        $product->update();

        Session::flash('flash_message', 'Data Product berhasil disimpan');

        return redirect('/product');
    }

    public function detail(Product $product)
    {
        $product_images = ProductImage::where('product_id', $product->id)->get();
        return view('product.detail', compact('product', 'product_images'));
    }

    public function create_detail(Product $product)
    {
        $product_images = ProductImage::pluck('id', 'image');
        return view('product.create_detail', compact('product', 'product_images'));
    }

    public function store_detail(Request $request, Product $product)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        $foto_image = $request->image;
        $nama_file = time() . '.' . $foto_image->getClientOriginalExtension();
        $foto_image->move('gambar/', $nama_file);

        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image = $nama_file;
        $product_image->save();
        Session::flash('flash_message', 'Data Product berhasil disimpan');

        return redirect(route('product.detail', $product->id));
    }

    public function delete_detail(ProductImage $product_image)
    {
        $product_image->delete();
        Session::flash('flash_message', 'Data Product berhasil dihapus');
        return back();
    }

    public function delete(Product $product)
    {
        $product->delete();

        Session::flash('flash_message', 'Data Product berhasil dihapus');
        return redirect('/product');
    }
}
