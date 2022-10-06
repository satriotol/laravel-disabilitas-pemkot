<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tagline;

class TaglineController extends Controller
{
    public function index()
    {
        $tagline = Tagline::all();
        return view('tagline.index', compact('tagline'));
    }

    public function create()
    {
        return view('tagline.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'nama_website' => 'required'
        ]);

        $tagline = new Tagline;
        $tagline->nama_website = $request->nama_website;

        $tagline->save();
        Session::flash('flash_message', 'Data Tagline berhasil disimpan');

        return redirect('/tagline');

    }

    public function edit($id)
    {
        $tagline = Tagline::Find($id);
        return view('tagline.create', compact('tagline'));
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_website' => 'required'
        ]);

        $tagline = Tagline::find($id);
        $tagline->nama_website = $request->nama_website;

        $tagline->update();

        Session::flash('flash_message', 'Data Tagline berhasil disimpan');

        return redirect('/tagline');
    }

    public function delete(Tagline $tagline)
    {
        Session::flash('flash_message', 'Data Tagline berhasil dihapus');
        Session::flash('penting', true);

        return redirect('/tagline');
    }
}
