<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index(){
        $socialmedia = SocialMedia::orderBy('id', 'asc')->paginate(5);
        return view('socialmedia.index');
    }

    public function create()
    {
        return view('socialmedia.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);
        $foto_kategori = $request->image;
        $nama_file = time() . '.' . $foto_kategori->getClientOriginalExtension();
        $foto_kategori->move('gambar/', $nama_file);

        $kategori = new Category;
        $kategori->name = $request->name;
        $kategori->image = $nama_file;
        $kategori->save();

        Session::flash('flash_message', 'Data Kategori berhasil disimpan');

        return redirect('/category');
    }

    public function edit($id)
    {
        $kategori = Category::Find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Category::find($id);
        if ($request->image) {
            $foto_kategori = $request->image;
            $nama_file = time() . '.' . $foto_kategori->getClientOriginalExtension();
            $foto_kategori->move('gambar/', $nama_file);
            $kategori->image = $nama_file;
        }
        $kategori->name = $request->name;
        $kategori->update();

        Session::flash('flash_message', 'Data Kategori berhasil diupdate');

        return redirect('/category');
    }

    public function delete(Category $category)
    {
        $category->delete();
        Session::flash('flash_message', 'Data kategori berhasil dihapus');
        return redirect('/category');
    }
}
