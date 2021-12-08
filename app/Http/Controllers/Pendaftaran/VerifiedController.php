<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifiedController extends Controller
{
    public function index()
    {
        $verifieds = Register::where('status', 'terverifikasi')->paginate(6);

        return view('daftar.student.verified.index', compact('verifieds'));
    }
}
