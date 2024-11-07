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
        return view('page.cek-barang');
    }
    function cekdetail()
    {
        $barang = Barang::get();
        return view('page.detail-cek-barang', compact('barang'));
    }
    public function detail($id)
    {
        // Ambil data tracking berdasarkan ID
        $tracking = Tracking::find($id);

        // Jika data tidak ditemukan, redirect kembali ke halaman barang
        if (!$tracking) {
            return redirect()->route('barang')->with('error', 'Data tidak ditemukan');
        }

        // Ambil data barang terkait (bisa dikaitkan dengan tracking)
        $barang = Barang::all(); // Ambil semua data barang atau sesuai kebutuhan

        // Kirimkan data tracking dan barang ke view
        return view('page.detail-barang', compact('tracking', 'barang'));
    }




    public function submit(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'date' => 'required|date',
            'keterangan' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data barang
        $barang = new Barang();
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('barang'); // Redirect ke halaman barang
    }

    public function delete($id)
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
