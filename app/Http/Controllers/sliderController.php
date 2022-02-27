<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slider = \App\models\slider::all();
        return view('be_slider/index',['slider'=> $slider]);

    }

    public function create(Request $request)
    {
        $input = $request->all();
        $input['image'] = request()->file('image')->store('slider');
        \App\models\slider::create( $input);
        return redirect('/slider')->with('sukses','Data Berhasil diBuat');
    }

    public function edit($id)
    {
        $slider=\App\models\slider::find($id);
        return view('be_slider/edit', ['slider'=>$slider]);
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $input['image'] = request()->file('image')->store('slider');
        $slider=\App\models\slider::find($id);
        $slider->update($input);
        return redirect('/slider')->with('sukses','Data Berhasil diUpdate');
    }

    public function delete($id)
    {
        $slider=\App\models\slider::find($id);
        $slider->delete($slider);
        return redirect('/slider')->with('sukses','Data Berhasil diHapus');
    }
}
