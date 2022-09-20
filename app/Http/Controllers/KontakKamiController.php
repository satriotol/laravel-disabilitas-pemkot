<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakKami;

use Illuminate\Support\Facades\Session;

class KontakKamiController extends Controller
{
    public function index(){
        $kontakkami = KontakKami::orderBy('id', 'asc')->paginate(5);
        return view('kontakkami.index', compact('kontakkami'));
    }

    public function create()
    {
        return view('kontakkami.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $kontakkami = new KontakKami;
        $kontakkami->name = $request->name;
        $kontakkami->email = $request->email;
        $kontakkami->message = $request->message;

        $kontakkami->save();

        Session::flash('flash_message', 'Data Kontak Kami berhasil disimpan');

        return redirect('/kontakkami');
    }

    public function edit(kontakkami $kontakkami)
    {
        return view('kontakkami.create', compact('kontakkami'));
    }

    public function update(Request $request, kontakkami $kontakkami)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $kontakkami->name = $request->name;
        $kontakkami->email = $request->email;
        $kontakkami->message = $request->message;
        $kontakkami->update();

        Session::flash('flash_message', 'Data Kontak Kami berhasil diupdate');

        return redirect('/kontakkami');
    }

    public function delete(kontakkami $kontakkami)
    {
        $kontakkami->delete();
        Session::flash('flash_message', 'Data Kontak Kami berhasil dihapus');
        return redirect('/kontakkami');
    }
}
