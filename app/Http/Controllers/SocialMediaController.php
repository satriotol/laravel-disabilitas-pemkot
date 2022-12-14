<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

use Illuminate\Support\Facades\Session;

use Storage;

class SocialMediaController extends Controller
{
    public function index(){
        $socialmedia = SocialMedia::all();
        return view('socialmedia.index', compact('socialmedia'));
    }

    public function create()
    {
        return view('socialmedia.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
            'url' => 'required'
        ]);

        $foto_socialmedia = $request->image;
        $nama_file = time() . '.' . $foto_socialmedia->getClientOriginalExtension();
        $foto_socialmedia->move('gambar/', $nama_file);

        $socialmedia = new SocialMedia;
        $socialmedia->name = $request->name;
        $socialmedia->image = $nama_file;
        $socialmedia->url = $request->url;

        $socialmedia->save();

        Session::flash('flash_message', 'Data socialmedia berhasil disimpan');

        return redirect('/socialmedia');
    }

    public function edit(SocialMedia $socialmedia)
    {
        return view('socialmedia.create', compact('socialmedia'));
    }

    public function update(Request $request, SocialMedia $socialmedia)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'nullable',
            'url' => 'required'
        ]);
        if ($request->image) {
            $foto_socialmedia = $request->image;
            $nama_file = time() . '.' . $foto_socialmedia->getClientOriginalExtension();
            $foto_socialmedia->move('gambar/', $nama_file);
            $socialmedia->image = $nama_file;
        }
        $socialmedia->name = $request->name;
        $socialmedia->url = $request->url;
        $socialmedia->update();

        Session::flash('flash_message', 'Data socialmedia berhasil diupdate');

        return redirect('/socialmedia');
    }

    public function delete(SocialMedia $socialmedia)
    {
        $socialmedia->delete();
        Session::flash('flash_message', 'Data socialmedia berhasil dihapus');
        return redirect('/socialmedia');
    }
}
