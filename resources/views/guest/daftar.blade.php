@extends('layouts.guest')

@section('content')

<div style="max-width:520px; margin:auto;">
    <div style="
        background:#ffffff;
        border:1px solid #000;
        border-radius:10px;
        overflow:hidden;
    ">
        {{-- HEADER FORM --}}
        <div style="
            background:#1e3a8a;
            color:white;
            padding:15px 20px;
        ">
            <h2 style="margin:0;">Form Pendaftaran Magang</h2>
        </div>

        {{-- BODY FORM --}}
        <div style="padding:20px;">
            <form method="POST" action="/daftar">
                @csrf
                <input type="hidden" name="lowongan_id" value="{{ $lowongan->id }}">

                <label style="font-weight:bold;">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap"
                    style="
                        width:100%;
                        padding:10px;
                        margin:6px 0 15px 0;
                        border:1px solid #000;
                    " required>

                <label style="font-weight:bold;">Email</label>
                <input type="email" name="email" placeholder="Email"
                    style="
                        width:100%;
                        padding:10px;
                        margin:6px 0 15px 0;
                        border:1px solid #000;
                    " required>

                <label style="font-weight:bold;">No. Telepon</label>
                <input type="text" name="telepon" placeholder="No. Telepon"
                    style="
                        width:100%;
                        padding:10px;
                        margin:6px 0 20px 0;
                        border:1px solid #000;
                    " required>

                <button type="submit"
                    style="
                        background:#1e3a8a;
                        color:white;
                        padding:10px 20px;
                        border:none;
                        border-radius:6px;
                        font-weight:bold;
                        cursor:pointer;
                    ">
                    Daftar
                </button>

                <a href="{{ url('/lowongan') }}"
                   style="
                        margin-left:12px;
                        text-decoration:none;
                        color:#6b7280;
                   ">
                    Batal
                </a>
            </form>
        </div>
    </div>
</div>

@endsection
