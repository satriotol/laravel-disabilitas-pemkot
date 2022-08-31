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

    public function edit($id){
        $kategori = Category::Find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id){
        $kategori = Category::find($id);
        $foto_kategori = $request->image;
        $nama_file = time().'.'.$foto_kategori->getClientOriginalExtension();
        $foto_kategori->move('gambar/', $nama_file);
        $kategori->name = $request->name;
        $kategori->image = $nama_file;
        $kategori->update();
        //Ketika kolom name pada tabel nama_peminjam diedit maka kolom user juga ikut berubah
        $cari_category_id = Category::where('id', $id)->pluck('id');
        $kategori = Category::where('id', $cari_category_id);
        $kategori->update([
            'name' => $request->name,
        ]);

        Session::flash('flash_message', 'Data Kategori berhasil diupdate');

        return redirect('/category');
    }
}
