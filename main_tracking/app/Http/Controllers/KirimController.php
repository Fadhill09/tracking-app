<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kirim; // Menggunakan model Kirim

class KirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchId = $request->get('search_id');

        if ($searchId) {
            // Cari berdasarkan ID jika ada input pencarian
            $kirim = Kirim::where('id', $searchId)->get();
        } else {
            // Ambil semua data jika tidak ada input pencarian
            $kirim = Kirim::all();
        }

        return view('page.kirim.index')->with('kirim', $kirim); // Pastikan ini sesuai dengan path view yang benar
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.kirim.create'); // Mengarah ke folder page/kirim
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
        Kirim::create($input);
        return redirect('kirim')->with('flash_message', 'Kirim ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kirim = Kirim::find($id);
        return view('page.kirim.show')->with('kirim', $kirim); // Mengarah ke folder page/kirim
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kirim = Kirim::find($id);
        return view('page.kirim.edit')->with('kirim', $kirim); // Mengarah ke folder page/kirim
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
        $kirim = Kirim::find($id);
        $input = $request->all();
        $kirim->update($input);
        return redirect('kirim')->with('flash_message', 'Kirim diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kirim::destroy($id);
        return redirect('kirim')->with('flash_message', 'Kirim dihapus!');
    }

    
}
