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

    function tracking(){
        $barang = Barang::all();
        $trackings = Tracking::get();
        return view('admin.page.tracking', compact('barang','trackings') );
    }
    function cek(){
        return view('admin.page.cek-barang');
    }
    function cekdetail(){
        $trackings = Tracking::get();
        return view('admin.page.detail-cek-barang', compact('trackings'));
    }

    public function detail(){
        $barang = Barang::get();
        $trackings = Tracking::get();

        return view('admin.page.detail-barang', compact('trackings','barang'));
    }

    public function submit( Request $request)
    {
        $barang = new Barang();
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('detail');
    }


public function destroy($tracking)
{
    // Cari tracking berdasarkan ID dan hapus
    $tracking = Tracking::findOrFail($tracking);
    $tracking->delete();

    // Setelah dihapus, redirect ke halaman barang admin
    return redirect()->route('barang');
}

}

