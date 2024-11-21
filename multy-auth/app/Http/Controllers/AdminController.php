<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tampilOperator() {
        $operators = Operator::get();
        return view('drifer.page.Operator.tampil-operator', compact('operators'));

    }
    public function tambahOperator() {
        return view('drifer.page.Operator.tambah-operator');

    }
    public function submitOperator(Request $request) {
        $operator = new Operator();

        $operator->nama_operator = $request->nama_operator;
        $operator->operator = $request->operator;
        $operator->email_operator = $request->email_operator;
        $operator->nohp_operator = $request->nohp_operator;
        $operator->alamat_operator = $request->alamat_operator;
        $operator->save();

        return redirect()->route('register.operator');
    }
    public function registerOperator() {
        return view('drifer.page.Operator.register-operator');
    }
}
