<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin | Portal Magang</title>
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

        .login-box {
            background: #ffffff;
            width: 100%;
            max-width: 360px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        p.subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert {
            background: #fee2e2;
            color: #991b1b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #4f46e5;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4f46e5;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .back {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }

        .back a {
            color: #4f46e5;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Admin</h2>
    <p class="subtitle">Portal Magang</p>

    @if(session('error'))
        <div class="alert">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/admin/login">
        @csrf

        <input type="email" name="email" placeholder="Email admin" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <div class="back">
        <a href="/">← Kembali ke halaman utama</a>
    </div>
</div>

</body>
</html>
