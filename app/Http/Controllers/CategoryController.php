<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Session;

use Storage;

class CategoryController extends Controller
{
    public function kategori(){
        return view('categori');
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $this->validate($request,[
    		'nama' => 'required',
    		'image' => 'required|image|mimes:jpeg, jpg, png'
    	]);
        $foto_kategori = $request->image;
        $nama_file = time().'.'.$foto_kategori->getClientOriginalExtension();
        $foto_kategori->move('gambar/', $nama_file);

        $kategori = new Category;
        $kategori->nama = $request->nama;
        $kategori->foto = $nama_file;
        $kategori->save();

        Session::flash('flash_message', 'Data peminjam berhasil disimpan');

    	return redirect('/category');
    }
}
