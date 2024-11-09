<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('admin.dasboard');
    }
    function user(){
        return view('user.dashboard');
    }
}
