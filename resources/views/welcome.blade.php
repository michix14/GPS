<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        html, body {
            background-color: #f0f4f8;
            color: #333;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            width: 400px;
        }
        h1 {
            color: #2d3748;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        a {
            display: inline-block;
            color: #3182ce;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border: 2px solid #3182ce;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #3182ce;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/gps') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
