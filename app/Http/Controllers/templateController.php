<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $template = \App\models\template::all();
        return view('be_template/index',['template'=> $template]);

    }

    public function create(Request $request)
    {
        $input = $request->all();
        $input['image'] = request()->file('image')->store('template');
        \App\models\template::create( $input);
        return redirect('/template')->with('sukses','Data Berhasil diBuat');
    }

    public function edit($id)
    {
        $template=\App\models\template::find($id);
        return view('be_template/edit', ['template'=>$template]);
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $input['image'] = request()->file('image')->store('template');
        $template=\App\models\template::find($id);
        $template->update($input);
        return redirect('/template')->with('sukses','Data Berhasil diUpdate');
    }

    public function delete($id)
    {
        $template=\App\models\template::find($id);
        $template->delete($template);
        return redirect('/template')->with('sukses','Data Berhasil diHapus');
    }


    public function viewproduk($id)
    {
        $template=\App\models\template::find($id);
        return view('depan/preview', ['template'=>$template]);
    }
}
