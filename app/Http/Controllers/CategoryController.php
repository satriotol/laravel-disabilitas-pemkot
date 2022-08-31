<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Session;

use Storage;

class CategoryController extends Controller
{
    public function kategori(){
        $kategori = Category::orderBy('id', 'asc')->paginate(5);
        $no = 0;
        return view('categori', compact('kategori','no'));
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $this->validate($request,[
    		'name' => 'required',
    		'image' => 'required|image|mimes:jpeg, jpg, png'
    	]);
        $foto_kategori = $request->image;
        $nama_file = time().'.'.$foto_kategori->getClientOriginalExtension();
        $foto_kategori->move('gambar/', $nama_file);

        $kategori = new Category;
        $kategori->name = $request->name;
        $kategori->image = $nama_file;
        $kategori->save();

        Session::flash('flash_message', 'Data Kategori berhasil disimpan');

    	return redirect('/category');
    }
}
