<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'lowongan_id' => 'required|exists:lowongans,id',
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

        Pendaftar::create([
            'lowongan_id' => $request->lowongan_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'status' => 'pending',
        ]);

        // ⬅️ INI KUNCINYA
        return redirect('/lowongan')
            ->with('success', 'Pendaftaran berhasil! Silakan tunggu info selanjutnya.');
    }
}
