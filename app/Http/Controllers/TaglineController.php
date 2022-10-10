<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tagline;

class TaglineController extends Controller
{
    public function index()
    {
        $taglines = Tagline::all();
        return view('tagline.index', compact('taglines'));
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

        $taglines = new Tagline;
        $taglines->nama_website = $request->nama_website;

        $taglines->save();
        Session::flash('flash_message', 'Data Tagline berhasil disimpan');

        return redirect('/tagline');

    }

    public function edit($id)
    {
        $taglines = Tagline::Find($id);
        return view('tagline.create', compact('taglines'));
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'nama_website' => 'required'
        ]);

        $taglines = Tagline::find($id);
        $taglines->nama_website = $request->nama_website;

        $taglines->update();

        Session::flash('flash_message', 'Data Tagline berhasil disimpan');

        return redirect('/tagline');
    }

    public function delete(Tagline $taglines)
    {
        Session::flash('flash_message', 'Data Tagline berhasil dihapus');
        Session::flash('penting', true);

        return redirect('/tagline');
    }
}
