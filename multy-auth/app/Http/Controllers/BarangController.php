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
        $barang = Barang::all();
        $trackings = Tracking::get();
        return view('admin.page.tracking', compact('barang','trackings') );
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
        $tracking = Tracking::findOrFail($id);
        $tracking = Tracking::get();
        $barang = Barang::all();

        return view('admin.page.detail-barang', compact('tracking', 'barang'));
    }

    public function submit(Request $request,)
    {
        $barang = Barang::findOrFail();
        $barang->date = $request->date;
        $barang->keterangan = $request->keterangan;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('detail', ['id' => $barang->id]);
    }

    public function delete($id)
    {
        $barang = Barang::get($id);
            $barang->delete();  // Menghapus data barang dari database
            return redirect()->route('detail');
    }


public function destroy($tracking)
{
    $tracking = Tracking::findOrFail($tracking);
    $tracking->delete();

        return redirect()->route('barang');
    }
}
