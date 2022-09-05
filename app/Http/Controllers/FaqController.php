<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::orderBy('id', 'asc')->paginate(5);
        return view('faq.index', compact('faq'));
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();
        Session::flash('flash_message', 'Data FAQ berhasil disimpan');

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::Find($id);
        return view('faq.', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->update();

        Session::flash('flash_message', 'Data FAQ berhasil disimpan');

        return redirect('/faq');
    }

    public function delete(Faq $faq)
    {
        $faq->delete();

        Session::flash('flash_message', 'Data FAQ berhasil dihapus');
        Session::flash('penting', true);
        return redirect('/faq');
    }
}
