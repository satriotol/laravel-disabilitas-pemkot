<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Session;
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
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $foto_slider = $request->image;
        $nama_file = time().'.'.$foto_slider->getClientOriginalExtension();
        $foto_slider->move('gambar/', $nama_file);

        $slider = new Slider;
        $slider->name = $request->name;
        $slider->image = $nama_file;
        $slider->save();

        Session::flash('flash_message', 'Slider berhasil disimpan');

    	return redirect('/slider');
    }

    public function edit($id)
    {
        $slider = Slider::Find($id);
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->image) {
            $foto_slider = $request->image;
            $nama_file = time() . '.' . $foto_slider->getClientOriginalExtension();
            $foto_slider->move('gambar/', $nama_file);
            $slider->image = $nama_file;
        }
        $slider->name = $request->name;
        $slider->update();

        Session::flash('flash_message', 'Data Slider berhasil diupdate');

        return redirect('/slider');
    }

    public function delete(Slider $slider)
    {
        $slider->delete();
        Session::flash('flash_message', 'Data slider berhasil dihapus');
        return redirect('/slider');
    }

}
