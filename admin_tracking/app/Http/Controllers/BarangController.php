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
    public function detail($id)
{
    // Ambil data tracking berdasarkan ID
    $tracking = Tracking::find($id);

    // Jika data tracking tidak ditemukan, redirect kembali ke halaman barang
    if (!$tracking) {
        return redirect()->route('barang')->with('error', 'Data tidak ditemukan');
    }

    // Ambil data barang
    $barang = Barang::all(); // atau bisa menggunakan metode lain sesuai dengan kebutuhan

    // Kirimkan data tracking dan barang ke view
    return view('page.detail-barang', compact('tracking', 'barang'));
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
