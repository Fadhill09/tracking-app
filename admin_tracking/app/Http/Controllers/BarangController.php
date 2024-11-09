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


        if (!$tracking) {
            return redirect()->route('barang')->with('error', 'Data tidak ditemukan');
        }

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
        return redirect()->route('detail');
    }

    function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('detail');
    }
}
