<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Lowongan Magang</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f4f6;
        }

        header {
            background: #1e3a8a; /* biru tua */
            color: white;
            padding: 16px 30px;
        }

        header h1 {
            margin: 0;
            font-size: 22px;
        }

        nav {
            background: #ffffff;
            padding: 12px 30px;
            border-bottom: 1px solid #000;
        }

        nav a {
            text-decoration: none;
            margin-right: 15px;
            color: #1f2933;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 30px;
        }

        hr {
            display: none;
        }
    </style>
</head>
<body>

<header>
    <h1>Portal Lowongan Magang</h1>
</header>

<nav>
    <a href="{{ url('/lowongan') }}">Lowongan</a>
    <a href="{{ url('/') }}" style="color:#dc2626;">Logout</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
