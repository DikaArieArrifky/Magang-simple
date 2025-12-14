@extends('layouts.admin')

@section('content')
<h2>Data Pendaftar</h2>

<table width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead style="background:#f3f4f6;">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Lowongan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pendaftars as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->lowongan->judul }}</td>
            <td>
                @if($p->status === 'pending')
                    <span style="color:orange">Pending</span>
                @elseif($p->status === 'diterima')
                    <span style="color:green">Diterima</span>
                @else
                    <span style="color:red">Ditolak</span>
                @endif
            </td>
            <td>
                @if($p->status === 'pending')
                    <a href="{{ url('/admin/pendaftar/'.$p->id.'/approve') }}" style="color:green">
                        Terima
                    </a>
                    |
                    <a href="{{ url('/admin/pendaftar/'.$p->id.'/reject') }}" style="color:red">
                        Tolak
                    </a>
                @else
                    -
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">Belum ada pendaftar</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
