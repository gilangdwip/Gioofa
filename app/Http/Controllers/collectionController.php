<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionController extends Controller
{
    public function index()
    {
        $collection = \App\models\collection::all();
        return view('be_collection/index',['collection'=> $collection]);

    }

    public function create(Request $request)
    {
        \App\models\collection::create($request->all());
        return redirect('/collection')->with('sukses','Data Berhasil diBuat');
    }

    public function edit($id)
    {
        $collection=\App\models\collection::find($id);
        return view('be_collection/edit', ['collection'=>$collection]);
    }

    public function update(Request $request,$id)
    {
        $collection=\App\models\collection::find($id);
        $collection->update($request->all());
        return redirect('/collection')->with('sukses','Data Berhasil diUpdate');
    }

    public function delete($id)
    {
        $collection=\App\models\collection::find($id);
        $collection->delete($collection);
        return redirect('/collection')->with('sukses','Data Berhasil diHapus');
    }

}
