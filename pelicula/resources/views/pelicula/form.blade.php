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
    
    <form action="{{ $pelicula->id ? route('modify',$pelicula->id) : route('create') }}" method="POST">
        @csrf
        
        @if ($pelicula->id)
            @method('PUT')
            <h1>Editar pelicula</h1>
        @else
            <h1>Crear pelicula</h1>
        @endif

        <label>
            Titulo:
            <input type="text" id="titulo" name="titulo" required value="{{$pelicula->titulo ?? ''}}">
        </label>

        <label>
            Director:
            <input type="text" id="director" name="director" required value="{{$pelicula->director ?? ''}}">
        </label>
        <label>
            Genero:
            <input type="text" id="genero" name="genero" required value="{{$pelicula->genero ?? ''}}">
        </label>
        
        <label>
            Sinopsis:
            <input type="text" id="sinopsis" name="sinopsis" required value="{{$pelicula->sinopsis ?? ''}}">
        </label>
        <label>
            Fecha:
            <input type="date" id="fecha_estreno" name="fecha_estreno" required value="{{$pelicula->fecha_estreno ?? ''}}">
        </label>
        
        <label>
            Duracion:
            <input type="number" id="duracion_min" name="duracion_min" required value="{{$pelicula->duracion_min ?? ''}}">
        </label>
        <label>
            Clasificacion:
            <input type="text" id="clasificacion" name="clasificacion" required value="{{$pelicula->clasificacion ?? ''}}">
        </label>

        @if($pelicula->id)
            <button type="submit" class="btn"> Editar</button>
        @else
            <button type="submit" class="btn"> Crear</button>
        @endif
        <a href="{{ route('index') }}" class="btn">Volver al inicio</a>
    </form>
</main>

</footer>

</body></html>