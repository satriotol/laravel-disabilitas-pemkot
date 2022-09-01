<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Model;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }

    public function create()
    {
        return view('about.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);

        $foto_about = $request->image;
        $nama_file = time() . '.' . $foto_about->getClientOriginalExtension();
        $foto_about->move('gambar/', $nama_file);

        $about = new About;
        $about->description = $request->description;
        $about->image = $nama_file;
        $about->save();

        return redirect('/about');
    }

    public function edit($id)
    {
        $about = About::Find($id);
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        if ($request->image) {
            $foto_about = $request->image;
            $nama_file = time() . '.' . $foto_about->getClientOriginalExtension();
            $about->move('gambar/', $nama_file);
            $about->image = $nama_file;
        }
        $about->description = $request->description;
        $about->update();

        return redirect('/about');
    }

    public function delete(About $about)
    {
        $about->delete();
        return redirect('/about');
    }
}
