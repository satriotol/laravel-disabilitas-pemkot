<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Session;
use Storage;


class SliderController extends Controller
{
    public function slider(){
        $slider = Slider::orderBy('id', 'asc')->paginate(5);
        $no = 0;
        return view('slide', compact('slider','no'));
    }
    public function create(){
        return view('slider.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg'
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

}
