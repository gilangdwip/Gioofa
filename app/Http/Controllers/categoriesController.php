<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = \App\models\categories::all();
        return view('be_categories/index',['categories'=> $categories]);

    }

    public function create(Request $request)
    {
        \App\models\categories::create($request->all());
        return redirect('/categories')->with('sukses','Data Berhasil diBuat');
    }

    public function edit($id)
    {
        $categories=\App\models\categories::find($id);
        return view('be_categories/edit', ['categories'=>$categories]);
    }

    public function update(Request $request,$id)
    {
        $categories=\App\models\categories::find($id);
        $categories->update($request->all());
        return redirect('/categories')->with('sukses','Data Berhasil diUpdate');
    }

    public function delete($id)
    {
        $categories=\App\models\categories::find($id);
        $categories->delete($categories);
        return redirect('/categories')->with('sukses','Data Berhasil diHapus');
    }

}
