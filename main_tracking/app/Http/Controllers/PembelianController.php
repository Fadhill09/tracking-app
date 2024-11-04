<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    // Menampilkan form untuk membuat pembelian
    public function create()
    {
        return view('page.kirim.create');
    }

    // Menyimpan data pembelian ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
           
            'nama_pengguna' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            
        ]);

        Pembelian::create($validatedData);

        return redirect()->route('tampil')->with('success', 'Pembelian berhasil disimpan.');
    }

    // Menampilkan semua pembelian
    public function show()
    {
        $pembelian = Pembelian::all();
        return view('page.kirim.index', compact('pembelian'));
    }

    // Menampilkan form untuk mengedit pembelian
    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('page.kirim.edit', compact('pembelian'));
    }

    // Memperbarui data pembelian di database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
           
            'nama_pengguna' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
         
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update($validatedData);

        return redirect()->route('tampil')->with('success', 'Pembelian berhasil diperbarui.');
    }

    // Menghapus pembelian
    public function destroy($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();

        return redirect()->route('tampil')->with('success', 'Pembelian berhasil dihapus.');
    }

}
