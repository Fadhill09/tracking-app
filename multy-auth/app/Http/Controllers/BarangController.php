<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang()
    {
        $trackings = Tracking::all();
        return view('admin.page.barang', compact('trackings'));
    }

    function tracking(){
        return view('admin.page.tracking');
    }
    function cek()
    {
        return view('admin.page.cek-barang');
    }
    function cekdetail()
    {
        $trackings = Tracking::get();
        return view('admin.page.detail-cek-barang', compact('trackings'));
    }
    public function detail($id){
        $barang = Barang::findOrFail($id);
        $trackings = Tracking::all();

        // dd($barang, $trackings); // Menampilkan data untuk debug
        return view('admin.page.detail-barang', compact('barang', 'trackings'));
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

public function destroy($tracking)
{
    // Cari tracking berdasarkan ID dan hapus
    $tracking = Tracking::findOrFail($tracking);
    $tracking->delete();

        // Setelah dihapus, redirect ke halaman barang admin
        return redirect()->route('barang');
    }
}
