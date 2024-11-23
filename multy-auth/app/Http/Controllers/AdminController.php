<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $request ->validate([
            'password_operator' => 'required|min:8',
        ]);
        $operator = new Operator();

        $operator->nama_operator = $request->nama_operator;
        $operator->operator = $request->operator;
        $operator->email_operator = $request->email_operator;
        $operator->nohp_operator = $request->nohp_operator;
        $operator->alamat_operator = $request->alamat_operator;
        $operator->password_operator = $request->password_operator;
        $operator->save();

        return redirect()->route('register.operator');
    }
    public function registerOperator() {
        return view('drifer.page.Operator.register-operator');
    }

    public function storeOperator(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'exists:operators,nama_operator'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'exists:operators,email_operator'],
            'password' => ['required', 'confirmed','min:8', 'exists:operators,password_operator'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->route('tampil.operator');
    }
}
