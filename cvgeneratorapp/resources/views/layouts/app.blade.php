<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de CVs</title>
    <style>
        body { font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #cfcfcf; }
        header { background-color: #6e0000; color: #fff; text-align: center; padding: 1em 0; }
        main { max-width: 800px; margin: 2em auto; background-color: #b4b4b4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .form-group { margin-bottom: 1em; }
        .form-group label { display: block; margin-bottom: 0.5em; font-weight: bold; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #000;
            border-radius: 4px; background-color: #cfcfcf;
        }
        .btn { background-color: #800000; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 1em; }
        .btn:hover { background-color: #410000; }
    </style>
</head>
<body>
    <header>
        <h1>Generador Quick-CV (Versión Laravel)</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>