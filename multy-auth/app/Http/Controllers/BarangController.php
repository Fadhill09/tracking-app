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


        return view('admin.page.tracking', compact('tracking'));
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
        $barang->tracking_id = $trackingid;
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

    session()->flash('message', 'Pesanan ditolak dan data telah dihapus.');

        return redirect()->route('barang');
    }
}
