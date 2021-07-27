<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarcontroller extends Controller
{
    public function index()
    {
        return view('daftar.index');
    }
}
