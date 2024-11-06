<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang(){
        return view('page.barang');

    }
    function detail(){
        $barang = Barang::get();
        dd($barang);
        return view('page.detail-barang', compact('barang'));

    }
    function submit(Request $request){
        $barang = new Barang();
        $barang->date =$request->date;
        $barang->keterangan =$request->keterangan;
        $barang->deskripsi =$request->deskripsi;
        $barang->save();
        return redirect()->route('detail');
    }
    function asdasd(){

    }
}
