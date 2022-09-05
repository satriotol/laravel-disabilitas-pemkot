<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use Storage;


class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('id', 'asc')->paginate(5);
        return view('slider.slide', compact('slider'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $foto_slider = $request->image;
        $nama_file = time().'.'.$foto_slider->getClientOriginalExtension();
        $foto_slider->move('gambar/', $nama_file);

        $slider = new Slider;
        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->image = $nama_file;
        $slider->save();

        Session::flash('flash_message', 'Slider berhasil disimpan');

    	return redirect('/slider');
    }

    public function edit(Slider $slider)
    {
        return view('slider.create', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if ($request->image){
        $foto_slider = $request->image;
        $nama_file = time().'.'.$foto_slider->getClientOriginalExtension();
        $foto_slider->move('gambar/', $nama_file);
        $slider->image = $nama_file;
        }
        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->update();

        Session::flash('flash_message', 'Slider berhasil disimpan');

    	return redirect('/slider');
    }

    public function delete(Slider $slider)
    {
        $slider->delete();
        Session::flash('flash_message', 'Data slider berhasil dihapus');
        return redirect('/slider');
    }

}
