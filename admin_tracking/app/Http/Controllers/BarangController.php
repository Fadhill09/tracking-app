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


<<<<<<< HEAD
        if (!$tracking) {
            return redirect()->route('barang')->with('error', 'Data tidak ditemukan');
        }

=======
        // Ambil data tracking berdasarkan ID
        $tracking = Tracking::find($id);

        // Jika data tidak ditemukan, redirect kembali ke halaman barang
>>>>>>> 9dcb4de3972c0933327a50c8b2a8837f05337c6f
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
