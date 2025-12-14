@extends('layouts.admin')

@section('content')
    <h2 style="margin-bottom:20px;">Kelola Lowongan</h2>

    {{-- FORM TAMBAH LOWONGAN --}}
    <div style="
        background:#f9fafb;
        padding:20px;
        border-radius:10px;
        margin-bottom:30px;
    ">
        <h3 style="margin-bottom:15px;">Tambah Lowongan</h3>

        <form method="POST" action="{{ url('/admin/lowongan') }}">
            @csrf

            <input type="text" name="judul" placeholder="Judul Lowongan"
                style="width:100%; padding:10px; margin-bottom:10px;" required>

            <textarea name="deskripsi" placeholder="Deskripsi" style="width:100%; padding:10px; margin-bottom:10px;"
                required></textarea>

            <input type="text" name="perusahaan" placeholder="Perusahaan"
                style="width:100%; padding:10px; margin-bottom:10px;" required>

            <input type="text" name="lokasi" placeholder="Lokasi" style="width:100%; padding:10px; margin-bottom:15px;"
                required>

            <button type="submit" style="
                    background:#4f46e5;
                    color:white;
                    padding:10px 20px;
                    border:none;
                    border-radius:6px;
                    cursor:pointer;
                ">
                Simpan
            </button>
        </form>
    </div>

    {{-- LIST LOWONGAN --}}
    <h3>Daftar Lowongan</h3>

    <table width="100%" cellpadding="10" cellspacing="0" border="1">
        <thead style="background:#e5e7eb;">
            <tr>
                <th>Judul</th>
                <th>Perusahaan</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($lowongans as $l)
                <tr>
                    <td>
                        <b>{{ $l->judul }}</b><br>
                        <small>{{ $l->deskripsi }}</small>
                    </td>
                    <td>{{ $l->perusahaan }}</td>
                    <td>{{ $l->lokasi }}</td>
                    <td>
                        <a href="{{ url('/admin/lowongan/' . $l->id . '/edit') }}" style="color:#2563eb; margin-right:10px;">
                            Edit
                        </a>

                        <a href="{{ url('/admin/lowongan/' . $l->id . '/delete') }}" style="color:red"
                            onclick="return confirm('Yakin hapus lowongan ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Belum ada lowongan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection