<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{

    public function view(Tracking $tracking)
    {
        return view('page.cek.isi_barang', compact('tracking'));
    }
    

    public function index()
    {
        $trackings = Tracking::all();
        return view('page.data_barang', compact('trackings'));
    }

    public function create()
    {
        return view('page.kirim.create');
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

        Tracking::create($validated);

        return redirect()->route('tampil')->with('success', 'Data tracking berhasil ditambahkan');
    }

    public function edit(Tracking $tracking)
    {
        return view('page.cek.edit', compact('tracking'));
    }

    public function update(Request $request, Tracking $tracking)
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

        $tracking->update($validated);

        return redirect()->route('tampil');
    }

    public function destroy(Tracking $tracking)
    {
        $tracking->delete();
        return redirect()->route('tampil');
    }
}