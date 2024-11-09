<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function barang()
    {
        return view('page.barang');
    }
    function cek()
    {
        $barang = Tracking::get();
        return view('page.cek-barang', compact('barang'));
    }

    function cekdetail()
    {
        $barang = Barang::get();
        return view('page.detail-cek-barang', compact('barang'));
    }
    public function detail($id)
    {

        $tracking = Tracking::find($id);


        // Ambil data tracking berdasarkan ID
        $tracking = Tracking::find($id);

        // Jika data tidak ditemukan, redirect kembali ke halaman barang
        $barang = Barang::all();
        return view('page.detail-barang', compact('tracking', 'barang'));
    }
    function submit(Request $request)
    {
        $barang = new Barang();
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('barang'); // Redirect ke halaman barang
    }

    function delete($id)
    {
        $barang = Barang::find($id);

        // Jika barang tidak ditemukan
        if (!$barang) {
            return redirect()->route('barang')->with('error', 'Barang tidak ditemukan');
        }

        $barang->delete();
        return redirect()->route('barang')->with('success', 'Barang berhasil dihapus');
    }
}
