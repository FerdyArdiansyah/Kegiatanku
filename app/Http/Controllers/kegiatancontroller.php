<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kegiatancontroller extends Controller
{
    public function index()
    {
        return view ('cek_kegiatan.index');
    }
}
