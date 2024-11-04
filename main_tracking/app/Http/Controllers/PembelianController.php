<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian; // Menggunakan model Pembelian

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.index')->with('pembelian', $pembelian);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Pembelian::create($input);
        return redirect('pembelian')->with('flash_message', 'Pembelian ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.show')->with('pembelian', $pembelian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.edit')->with('pembelian', $pembelian);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembelian = Pembelian::find($id);
        $input = $request->all();
        $pembelian->update($input);
        return redirect('pembelian')->with('flash_message', 'Pembelian diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembelian::destroy($id);
        return redirect('pembelian')->with('flash_message', 'Pembelian dihapus!');
    }
}
