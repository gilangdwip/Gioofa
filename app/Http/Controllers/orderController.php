<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index()
    {
        $order = \App\models\order::all();
        return view('be_order/index',['order'=> $order]);

    }

    public function create(Request $request)
    {
        \App\models\order::create($request->all());
        return redirect('/order')->with('sukses','Data Berhasil diBuat');
    }

    public function edit($id)
    {
        $order=\App\models\order::find($id);
        return view('be_order/edit', ['order'=>$order]);
    }

    public function update(Request $request,$id)
    {
        $order=\App\models\order::find($id);
        $order->update($request->all());
        return redirect('/order')->with('sukses','Data Berhasil diUpdate');
    }

    public function delete($id)
    {
        $order=\App\models\order::find($id);
        $order->delete($order);
        return redirect('/order')->with('sukses','Data Berhasil diHapus');
    }

}
