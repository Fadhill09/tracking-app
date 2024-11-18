<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrackingController extends Controller
{
    public function dasboard() {
        return view('user.dashboard');
    }


    public function about() {
        return view('user.tentang');
    }

    public function view($id)
    {
        $tracking = Tracking::findOrFail($id);
    
        $riwayatBarang = Barang::where('tracking_id', $id)->get();
    
        return view('user.page.cek.isi_barang', compact('tracking', 'riwayatBarang'));
    }
    


    public function index()
    {
        $trackings = Tracking::all();
        return view('user.data_barang', compact('trackings'));
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

        Tracking::create($validated);

        return redirect()->route('tampil');
    }

    public function edit(Tracking $tracking)
    {
        return view('user.page.cek.edit', compact('tracking'));
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


// $tracking = Tracking::findOrFail($tracking);