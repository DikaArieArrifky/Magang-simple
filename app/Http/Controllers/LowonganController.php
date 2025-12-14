<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    // tampilkan semua lowongan
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('guest/lowongan', compact('lowongans'));
    }

    // form daftar berdasarkan lowongan
    public function daftar($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('guest/daftar', compact('lowongan'));
    }
}
