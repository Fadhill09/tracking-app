<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view1() {
        return view('beranda');
    }

    
    public function view3() {
        return view('page.tentang');
    }
    
    public function view4() {
        return view('page.cek_barang');
    }
    
    public function view5() {
        return view('page.kirim_barang');
    }
    
    // public function view2() {
    //     return view('page.berita');
    // }
}
