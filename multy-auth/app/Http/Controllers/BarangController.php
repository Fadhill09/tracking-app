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

    function tracking($id)
    {
        $tracking = Tracking::with('barang')->findOrFail($id);
    
        // Kirim data $tracking dan relasi barang ke view
        return view('admin.page.tracking', compact('tracking'));
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

    public function detail($id)
    {

        $tracking = Tracking::with('barang')->findOrFail($id);

        return view('admin.page.detail-barang', compact('tracking'));
    }
    public function submit(Request $request, $trackingid)
    {
        $request->validate([
            'date' => 'required|date',
            'keterangan' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);
        
     
        $barang = new Barang();
        $barang->tracking_id = $trackingid; // Hubungkan dengan Tracking
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();
        
        return redirect()->route('detail', ['id' => $trackingid])->with('success', 'Keterangan berhasil ditambahkan!');
    }
    
    public function delete($id)
    {
        $barang = Barang::findOrFail($id);
        $trackingId = $barang->tracking_id;  // Ambil tracking_id barang sebelum dihapus
        $barang->delete();  // Menghapus data barang dari database
        
        return redirect()->route('detail', ['id' => $trackingId]);  // Kembali ke halaman detail
    }
    


public function destroy($tracking)
{
    $tracking = Tracking::findOrFail($tracking);
    $tracking->delete();

        return redirect()->route('barang');
    }
}
