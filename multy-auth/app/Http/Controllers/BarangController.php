<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
    function barang()
    {
        $trackings = Tracking::all();
        return view('admin.page.barang', compact('trackings'));
    }

    function tracking($id)
    {
        $tracking = Tracking::with('barang')->findOrFail($id);


        return view('admin.page.tracking', compact('tracking'));
    }



    public function detail($id)
    {

        $tracking = Tracking::with('barang')->findOrFail($id);

        return view('admin.page.detail-barang', compact('tracking'));
    }
    public function detail($id)
{
    // Mengambil satu item Tracking berdasarkan id
    $tracking = Tracking::findOrFail($id);

    // Mengambil semua riwayat tracking yang berhubungan dengan tracking_id tertentu
    $barang = Barang::where('tracking_id', $id)->get();


    // Mengirim data $tracking dan $barang ke tampilan
    return view('admin.page.detail-barang', compact('tracking', 'barang'));
}


    public function submit(Request $request,$id)
    {
        $barang = Barang::findOrFail($id);
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('detail', ['id' => $trackingid])->with('success', 'Keterangan berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $barang = Barang::findOrFail($id);
        $trackingId = $barang->tracking_id;
        $barang->delete();

        return redirect()->route('detail', ['id' => $trackingId]);
    }


    public function destroy($tracking)
    {
        $tracking = Tracking::findOrFail($tracking);
        $tracking->delete();

        // Reset auto increment untuk tabel tracking
        DB::statement('ALTER TABLE tracking AUTO_INCREMENT = 1;');

        session()->flash('message', 'Pesanan ditolak dan data telah dihapus.');

        return redirect()->route('barang');
    }
}
