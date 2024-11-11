<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang(){
        $trackings = Tracking::all();
        return view('admin.page.barang', compact('trackings') );

    }
    function cek(){
        return view('admin.page.cek-barang');
    }
    function cekdetail(){
        $trackings = Tracking::get();
        return view('admin.page.detail-cek-barang', compact('trackings'));
    }
    public function detail($id){
<<<<<<< HEAD
    $barang = Barang::findOrFail($id);

    $trackings = Tracking::all();

    return view('admin.page.detail-barang', compact('barang', 'trackings'));
=======
        $barang = Barang::findOrFail($id);
        $trackings = Tracking::all();

        dd($barang, $trackings); // Menampilkan data untuk debug
        return view('admin.page.detail-barang', compact('barang', 'trackings'));
>>>>>>> 630a740d5903f40b648759f7d517adb099dc9b34
    }



public function submit($id, Request $request)
{
    $barang = Barang::findOrFail($id);
    $barang->date = $request->date;
    $barang->keterangan = $request->keterangan;
    $barang->deskripsi = $request->deskripsi;
    $barang->save();

    return redirect()->route('detail', ['id' => $barang->id]);
}

    function delete($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('detail');
    }
}
