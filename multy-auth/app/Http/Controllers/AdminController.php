<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tampilOperator() {
        return view('drifer.page.Operator.tampil-operator');

    }
    public function tambahOperator() {
        return view('drifer.page.Operator.tambah-operator');

    }
}
