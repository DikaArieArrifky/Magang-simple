@extends('layouts.guest')

@section('content')

<h2 style="margin-bottom:15px;">Lowongan Magang</h2>

<table id="lowonganTable" width="100%" cellpadding="10" cellspacing="0"
       style="border-collapse:collapse;">
    <thead>
        <tr style="background:#d1d1d1;">
            <th>Judul</th>
            <th>Perusahaan</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lowongans as $l)
        <tr>
            <td><b>{{ $l->judul }}</b></td>
            <td>{{ $l->perusahaan }}</td>
            <td>{{ $l->lokasi }}</td>
            <td>{{ $l->deskripsi }}</td>
            <td>
                <a href="/daftar/{{ $l->id }}"
                   style="
                        display:inline-block;
                        padding:6px 12px;
                        background:#2563eb;
                        color:white;
                        text-decoration:none;
                        border-radius:4px;
                        font-size:14px;
                   ">
                    Daftar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('scripts')
<script>
$(function () {
    $('#lowonganTable').DataTable({
        pageLength: 5,
        lengthChange: false,
        language: {
            search: "Cari:",
            paginate: {
                next: "Next",
                previous: "Prev"
            }
        }
    });
});
</script>
@endpush
