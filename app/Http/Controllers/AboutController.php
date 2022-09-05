<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AboutController extends Controller
{
    public function index()
    {
        $about = About::orderBy('id', 'asc')->paginate(5);
        return view('about.index', compact('about'));
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
        Session::flash('flash_message', 'Data About berhasil disimpan');
        return redirect('/about');
    }

    public function edit($id)
    {
        $about = About::Find($id);
        return view('about.create', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png'
        ]);

        $about = About::find($id);
        if ($request->image) {
            $foto_about = $request->image;
            $nama_file = time() . '.' . $foto_about->getClientOriginalExtension();
            $foto_about->move('gambar/', $nama_file);
            $about->image = $nama_file;
        }
        $about->description = $request->description;

        $about->update();

        Session::flash('flash_message', 'Data About berhasil disimpan');
        return redirect('/about');
    }

    public function delete(About $about)
    {
        $about->delete();

        Session::flash('flash_message', 'Data About berhasil dihapus');
        Session::flash('penting', true);
        return redirect('/about');
    }
}
