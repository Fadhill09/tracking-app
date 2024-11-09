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
<<<<<<< HEAD
        $barang = Tracking::get();
        return view('page.cek-barang', compact('barang'));
    }

=======
        return view('page.cek-barang');
    }
>>>>>>> b1db97f913c9eb74a26633727aea7c70cad7f1f9
    function cekdetail()
    {
        $barang = Barang::get();
        return view('page.detail-cek-barang', compact('barang'));
    }
    public function detail($id)
    {
<<<<<<< HEAD

        $tracking = Tracking::find($id);


=======
        // Ambil data tracking berdasarkan ID
        $tracking = Tracking::find($id);

        // Jika data tidak ditemukan, redirect kembali ke halaman barang
>>>>>>> b1db97f913c9eb74a26633727aea7c70cad7f1f9
        if (!$tracking) {
            return redirect()->route('barang')->with('error', 'Data tidak ditemukan');
        }

<<<<<<< HEAD
        $barang = Barang::all();
        return view('page.detail-barang', compact('tracking', 'barang'));
    }
    function submit(Request $request)
    {
=======
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
>>>>>>> b1db97f913c9eb74a26633727aea7c70cad7f1f9
        $barang = new Barang();
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('barang'); // Redirect ke halaman barang
    }

<<<<<<< HEAD
    function delete($id)
=======
    public function delete($id)
>>>>>>> b1db97f913c9eb74a26633727aea7c70cad7f1f9
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
