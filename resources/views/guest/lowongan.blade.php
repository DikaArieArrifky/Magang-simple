@extends('layouts.guest')

@section('content')

<h2 style="margin-bottom:20px;">Lowongan Magang</h2>

@if(session('success'))
    <div style="
        background:#dcfce7;
        color:#166534;
        padding:10px 15px;
        border-radius:6px;
        margin-bottom:20px;
        border:1px solid #000;
    ">
        {{ session('success') }}
    </div>
@endif

<table width="100%" cellpadding="10" cellspacing="0"
       style="border-collapse:collapse; background:#ffffff; border:1px solid #000;">
    <thead>
        <tr style="background:#1e3a8a; color:white;">
            <th style="border:1px solid #000;">Judul</th>
            <th style="border:1px solid #000;">Perusahaan</th>
            <th style="border:1px solid #000;">Lokasi</th>
            <th style="border:1px solid #000;">Deskripsi</th>
            <th style="border:1px solid #000;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($lowongans as $l)
        <tr>
            <td style="border:1px solid #000;"><b>{{ $l->judul }}</b></td>
            <td style="border:1px solid #000;">{{ $l->perusahaan }}</td>
            <td style="border:1px solid #000;">{{ $l->lokasi }}</td>
            <td style="border:1px solid #000;">{{ $l->deskripsi }}</td>
            <td style="border:1px solid #000;">
                <a href="/daftar/{{ $l->id }}"
                   style="
                        background:#1e3a8a;
                        color:white;
                        padding:6px 12px;
                        border-radius:6px;
                        text-decoration:none;
                   ">
                    Daftar
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center"
                style="border:1px solid #000; color:#6b7280;">
                Belum ada lowongan tersedia.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
