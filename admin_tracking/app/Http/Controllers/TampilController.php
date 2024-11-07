<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;

class TampilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data dari tabel Tracking
        $data = Tracking::all();

        // Kirim data ke view page.data_barang
        return view('page.barang', compact('data'));
    }

    public function detail($id)
{
    // Ambil data tracking berdasarkan ID yang diterima
    $tracking = Tracking::findOrFail($id);

    // Kirim data ke view
    return view('page.detail-barang', compact('tracking'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $tracking = Tracking::findOrFail($id);
    dd($tracking);  // Memastikan data ada

    return view('page.barang-detail', compact('tracking'));
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
