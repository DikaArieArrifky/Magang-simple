@extends('layouts.admin')

@section('content')
<h2 style="margin-bottom: 20px;">Dashboard Admin</h2>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:20px;">

    <!-- TOTAL -->
    <div style="background:#e0f2fe; padding:20px; border-radius:10px;">
        <h3 style="margin:0;">Total Pendaftar</h3>
        <p style="font-size:32px; font-weight:bold; margin:10px 0;">
            {{ $total }}
        </p>
    </div>

    <!-- PENDING -->
    <div style="background:#fef3c7; padding:20px; border-radius:10px;">
        <h3 style="margin:0;">Pending</h3>
        <p style="font-size:32px; font-weight:bold; margin:10px 0; color:#b45309;">
            {{ $pending }}
        </p>
    </div>

    <!-- DITERIMA -->
    <div style="background:#dcfce7; padding:20px; border-radius:10px;">
        <h3 style="margin:0;">Diterima</h3>
        <p style="font-size:32px; font-weight:bold; margin:10px 0; color:#15803d;">
            {{ $diterima }}
        </p>
    </div>

    <!-- DITOLAK -->
    <div style="background:#fee2e2; padding:20px; border-radius:10px;">
        <h3 style="margin:0;">Ditolak</h3>
        <p style="font-size:32px; font-weight:bold; margin:10px 0; color:#b91c1c;">
            {{ $ditolak }}
        </p>
    </div>

</div>

<hr style="margin:30px 0;">


@endsection
