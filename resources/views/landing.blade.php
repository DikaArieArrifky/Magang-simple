<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Magang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            background: #ffffff;
            width: 100%;
            max-width: 800px;
            border-radius: 14px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            display: flex;
            overflow: hidden;
        }

        .panel {
            flex: 1;
            padding: 40px 30px;
            text-align: center;
        }

        .panel h2 {
            margin-bottom: 10px;
        }

        .panel p {
            color: #6b7280;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .admin {
            background: #eef2ff;
            border-right: 1px solid #e5e7eb;
        }

        .guest {
            background: #ecfeff;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .btn-admin {
            background: #4f46e5;
        }

        .btn-guest {
            background: #45b9cd;
        }

        .header {
            position: absolute;
            top: 30px;
            text-align: center;
            width: 100%;
            color: white;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            margin-top: 5px;
            font-size: 14px;
            opacity: 0.9;
        }

        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #e5e7eb;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                margin: 20px;
            }

            .admin {
                border-right: none;
                border-bottom: 1px solid #e5e7eb;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Selamat Datang di Portal Magang</h1>
</div>

<div class="wrapper">
    <!-- ADMIN -->
    <div class="panel admin">
        <h2>Admin</h2>
        <p>Masuk untuk mengelola data magang</p>
        <a href="/admin/login" class="btn btn-admin">Login Admin</a>
    </div>

    <!-- PENDAFTAR -->
    <div class="panel guest">
        <h2>Pendaftar Magang</h2>
        <p>Lihat lowongan dan daftar magang</p>
        <a href="/lowongan" class="btn btn-guest">Daftar Magang</a>
    </div>
</div>

<footer>
    © {{ date('Y') }} Portal Magang
</footer>

</body>
</html>
