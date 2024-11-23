<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\Barang;
use Illuminate\Http\Request;



class BarangController extends Controller
{
    public function dasboard() {
        return view('user.dashboard');
    }


    public function about() {
        return view('user.tentang');
    }

    public function view($id)
    {
       $barang = Barang::findOrFail($id);

        $tracking = Tracking::where('barang_id', $id)->get();

        return view('user.page.cek.isi_barang', compact('barang', 'tracking'));
    }



    public function index()
    {
       $barangs = Barang::all();
        return view('user.data_barang', compact('barangs'));
    }

    public function create()
    {
        return view('user.page.kirim.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pengirim' => 'required|string',
            'no_hp_pengirim' => 'required|string',
            'alamat_pengirim' => 'required|string',
            'nama_penerima' => 'required|string',
            'no_hp_penerima' => 'required|string',
            'alamat_penerima' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'jenis_pengiriman' => 'required|in:reguler,cepat',
            'pesan_pengirim' => 'nullable|string',
        ]);

        $validated['biaya_pengiriman'] = $request->jenis_pengiriman === 'reguler' ? 10000 : 20000;

        Barang::create($validated);

        return redirect()->route('tampil');
    }

    public function edit(Barang $barang)
    {
        return view('user.page.cek.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'nama_pengirim' => 'required|string',
            'no_hp_pengirim' => 'required|string',
            'alamat_pengirim' => 'required|string',
            'nama_penerima' => 'required|string',
            'no_hp_penerima' => 'required|string',
            'alamat_penerima' => 'required|string',
            'nama_barang' => 'required|string',
            'jumlah_barang' => 'required|integer',
            'jenis_pengiriman' => 'required|in:reguler,cepat',
            'pesan_pengirim' => 'nullable|string',
        ]);

        $validated['biaya_pengiriman'] = $request->jenis_pengiriman === 'reguler' ? 10000 : 20000;

       $barang->update($validated);

        return redirect()->route('tampil');
    }

    public function destroy(Barang $barang)
    {
       $barang->delete();
        return redirect()->route('tampil');
    }
}


