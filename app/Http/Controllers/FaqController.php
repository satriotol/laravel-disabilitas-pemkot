<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq.index');
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

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::Find($id);
        return view('faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();

        return redirect('/faq');
    }

    public function delete(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }
}
