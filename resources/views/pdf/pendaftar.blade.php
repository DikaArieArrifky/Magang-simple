<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pendaftar Magang</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
        }
        th {
            background: #eee;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Pendaftar Magang</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Lowongan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pendaftars as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->lowongan->judul ?? '-' }}</td>
            <td>{{ ucfirst($p->status) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
