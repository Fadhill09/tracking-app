<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang(){
        return view('page.barang');

    }
    function cek(){
        return view('page.cek-barang');
    }
    function cekdetail(){
        $barang = Barang::get();
        return view('page.detail-cek-barang', compact('barang'));
    }
    function detail(){
        $barang = Barang::get();
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
    function delete($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('detail');
    }
}
