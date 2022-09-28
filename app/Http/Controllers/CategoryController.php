<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

use Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = Category::all();
        return view('kategori.categori', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png',
            'keterangan' => 'required'
        ]);
        $foto_kategori = $request->image;
        $nama_file = time() . '.' . $foto_kategori->getClientOriginalExtension();
        $foto_kategori->move('gambar/', $nama_file);

        $kategori = new Category;
        $kategori->name = $request->name;
        $kategori->image = $nama_file;
        $kategori->keterangan = $request->keterangan;
        $kategori->save();

        Session::flash('flash_message', 'Data Kategori berhasil disimpan');

        return redirect('/category');
    }

    public function edit(Category $kategori)
    {
        return view('kategori.create', compact('kategori'));
    }

    public function update(Request $request, Category $kategori)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'nullable',
            'keterangan' => 'required'
        ]);

        if ($request->image) {
            $foto_kategori = $request->image;
            $nama_file = time() . '.' . $foto_kategori->getClientOriginalExtension();
            $foto_kategori->move('gambar/', $nama_file);
            $kategori->image = $nama_file;
        }
        $kategori->name = $request->name;
        $kategori->keterangan = $request->keterangan;
        $kategori->update();

        Session::flash('flash_message', 'Data Kategori berhasil diupdate');

        return redirect('/category');
    }

    public function delete(Category $kategori)
    {
        $kategori->delete();
        Session::flash('flash_message', 'Data kategori berhasil dihapus');
        return redirect('/category');
    }
}
