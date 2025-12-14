<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lowongan;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // form login admin
    public function loginForm()
    {
        return view('admin/login');
    }

    // proses login admin (sederhana)
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|ends_with:@admin.com',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Login gagal');
        }

        session(['admin_id' => $admin->id]);

        return redirect('/admin/dashboard');
    }

    // dashboard admin
    public function dashboard()
    {
        $total = Pendaftar::count();
        $pending = Pendaftar::where('status', 'pending')->count();
        $diterima = Pendaftar::where('status', 'diterima')->count();
        $ditolak = Pendaftar::where('status', 'ditolak')->count();

        return view('admin.dashboard', compact(
            'total',
            'pending',
            'diterima',
            'ditolak'
        ));
    }


    // approve pendaftar
    public function approve($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'diterima';
        $pendaftar->save();

        return back();
    }
    public function reject($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'ditolak';
        $pendaftar->save();

        return back();
    }


    // halaman data pendaftar
    public function pendaftar()
    {
        $pendaftars = Pendaftar::with('lowongan')->get();
        return view('admin/pendaftar', compact('pendaftars'));
    }

    // logout admin
    public function logout()
    {
        session()->forget('admin_id');
        return redirect('/');
    }

    public function lowongan()
    {
        $lowongans = Lowongan::all();
        return view('admin/lowongan', compact('lowongans'));
    }

    public function storeLowongan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'perusahaan' => 'required',
            'lokasi' => 'required',
        ]);

        Lowongan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'perusahaan' => $request->perusahaan,
            'lokasi' => $request->lokasi,
        ]);

        return back();
    }
    // ======================
    // FORM EDIT LOWONGAN
    // ======================
    public function editLowongan($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('admin.lowongan-edit', compact('lowongan'));
    }

    // ======================
    // PROSES UPDATE LOWONGAN
    // ======================
    public function updateLowongan(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'perusahaan' => 'required',
            'lokasi' => 'required',
        ]);

        $lowongan = Lowongan::findOrFail($id);
        $lowongan->update($request->only(
            'judul',
            'deskripsi',
            'perusahaan',
            'lokasi'
        ));

        return redirect('/admin/lowongan')
            ->with('success', 'Lowongan berhasil diperbarui');
    }

    public function deleteLowongan($id)
    {
        Lowongan::findOrFail($id)->delete();
        return back();
    }
}
