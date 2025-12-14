<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <style>
        body {
            margin: 0;
            font-family: 'Times New Roman';
            background: #f3f4f6;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 15px 30px;
        }

        header h1 {
            margin: 0;
            font-size: 20px;
        }

        nav {
            background: #ffffff;
            padding: 12px 30px;
            border-bottom: 1px solid #e5e7eb;
        }

        nav a {
            text-decoration: none;
            margin-right: 15px;
            color: #374151;
            font-weight: bold;
        }

        nav a:hover {
            color: #4f46e5;
        }

        .container {
            padding: 30px;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #4f46e5;
            color: white;
        }

        hr {
            display: none;
        }
    </style>
</head>
<body>

<header>
    <h1>ADMIN PANEL</h1>
</header>

<nav>
    <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
    <a href="{{ url('/admin/lowongan') }}">Lowongan</a>
    <a href="{{ url('/admin/pendaftar') }}">Pendaftar</a>
    <a href="{{ url('/admin/logout') }}" style="color:#dc2626;">Logout</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
