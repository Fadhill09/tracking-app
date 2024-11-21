<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    function barang()
    {
        $barangs = Barang::all();
        return view('admin.page.barang', compact('barangs'));
    }

    public function tracking($id)
    {
       
        $barang = Barang::with('trackings')->findOrFail($id);
        
        return view('admin.page.tracking', compact('barang'));
    }
    
    
    public function detail($id)
    {
        $barang = Barang::with('trackings')->findOrFail($id);
        return view('admin.page.detail-barang', compact('barang'));
    }
    
    public function submit(Request $request, $barangid)
    {

        $validated = $request->validate([
            'date' => 'required|date',
            'keterangan' => 'required|string',
            'deskripsi' => 'nullable|string',
            'foto' => 'required_if:keterangan,Sampai|image|mimes:jpg,jpeg,png|max:2048',
            'konfirmasi' => 'required_if:keterangan,Sampai|accepted',
        ]);
    
        $tracking = new Tracking();
        $tracking->barang_id = $barangid;
        $tracking->date = $validated['date']; 
        $tracking->keterangan = $validated['keterangan']; 
        $tracking->deskripsi = $validated['deskripsi'] ?? '';
    
        if ($validated['keterangan'] === 'Sampai' && $request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('uploads/foto-pesanan', 'public');
            $tracking->foto = $fotoPath;
        }
        $tracking->save();
    
        return redirect()->route('detail', ['id' => $barangid])->with('success', 'Keterangan berhasil ditambahkan!');
    }
    

    // public function submit(Request $request, $barangid)
    // {

    //     $request->validate([
    //         'date' => 'required|date',
    //         'keterangan' => 'required|string',
    //         'deskripsi' => 'nullable|string',
    //         'foto' => 'required_if:keterangan,Sampai|image|mimes:jpg,jpeg,png|max:2048',
    //         'konfirmasi' => 'required_if:keterangan,Sampai|accepted',
    //     ]);
    
    //     $tracking = new Tracking();
    //     $tracking->barang_id = $barangid;  
    //     $tracking->date = $request->date;
    //     $tracking->keterangan = $request->keterangan;
    //     $tracking->deskripsi = $request->deskripsi;

    //     if ($request->keterangan === 'Sampai' && $request->hasFile('foto')) {
            
    //         $fotoPath = $request->file('foto')->store('uploads/foto-pesanan', 'public');
    //      $tracking->foto = $fotoPath;
            
    //     $tracking->save();

    //     return redirect()->route('detail', ['id' => $barangid])->with('success', 'Keterangan berhasil ditambahkan!');
    // }
    
    public function delete($id)
    {
        $tracking = Tracking::findOrFail($id);
        $barangId = $tracking->barang_id;
        $tracking->delete();
    
        return redirect()->route('detail', ['id' => $barangId]);
    }
     


public function destroy($barang)
{
    $barang = Barang::findOrFail($barang);
    $barang->delete();

    session()->flash('message', 'Pesanan ditolak dan data telah dihapus.');

        return redirect()->route('barang');
    }
}
