<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarUlangController extends Controller
{
    public function index()
    {
        return view('verifikasi.pendaftaran.index');
    }

}
