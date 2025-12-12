<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas - MVC</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<main class="container">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>
            Email:
            <input type="text" id="email" name="email">
            @error("email")
                {{ $message }}
            @enderror
        </label>
        <label>
            Password:
            <input type="text" id="password" name="password">
            @error("password")
                {{ $message }}
            @enderror
        </label>
        <button type="submit" class="btn"> Iniciar Sesion</button>
        <a href="{{ route('index') }}" class="btn">Volver al inicio</a>
    </form>
</main>

</footer>

</body></html>