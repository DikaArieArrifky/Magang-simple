@extends('layouts.admin')

@section('content')
<h2>Edit Lowongan</h2>

<form method="POST" action="{{ url('/admin/lowongan/'.$lowongan->id.'/update') }}">
    @csrf

    <input type="text" name="judul"
        value="{{ $lowongan->judul }}"
        style="width:100%; padding:10px; margin-bottom:10px;" required>

    <textarea name="deskripsi"
        style="width:100%; padding:10px; margin-bottom:10px;" required>{{ $lowongan->deskripsi }}</textarea>

    <input type="text" name="perusahaan"
        value="{{ $lowongan->perusahaan }}"
        style="width:100%; padding:10px; margin-bottom:10px;" required>

    <input type="text" name="lokasi"
        value="{{ $lowongan->lokasi }}"
        style="width:100%; padding:10px; margin-bottom:15px;" required>

    <button type="submit"
        style="background:#4f46e5; color:white; padding:10px 20px; border:none; border-radius:6px;">
        Update
    </button>

    <a href="{{ url('/admin/lowongan') }}"
       style="margin-left:10px;">
       Batal
    </a>
</form>
@endsection
