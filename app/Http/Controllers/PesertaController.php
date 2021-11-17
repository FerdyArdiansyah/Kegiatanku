<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        return view('verifikasi.peserta.index');
    }
}
