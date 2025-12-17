<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas - MVC</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<header>
    <div class="container">
        <h1>
            <a href="{{ route('index') }}">
                {{ request()->cookie('idioma') == 'es' ? 'Peliculas' : 'Filmak' }}    
            </a>
        </h1>
        <nav>
            <ul>
                @auth
                    <li>Bienvenido {{ Auth::user()->name }}</li>
                    <li><a href="{{route('logout')}}" class="btn btn-warning">Cerrar sesion</a></li>
                @else
                    <li><a href="{{route('loginForm')}}" class="btn">Loguearse</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
<main class="container">
<div>
    <div>
        <h2>Películas disponibles</h2>
        @auth
            <a href="{{ route('createForm') }}" class="btn btn-success">Crear pelicula</a>
        @endauth
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Director</th>
                <th>Estreno</th>
                <th>Duración (min)</th>
                <th>Clasificación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ( $listaPeliculas as $pelicula )
            <tr>
                <td><?= $pelicula->titulo ?></td>
                <td><?= $pelicula->director ?></td>
                <td><?= $pelicula->fecha_estreno ?></td>
                <td><?= $pelicula->duracion_min ?></td>
                <td><?= $pelicula->clasificacion ?></td>
                <td><a href="{{ route('detalles',[$pelicula->id]) }}" class="btn">Ver detalles</a></td>
                <td> <a href="{{ route('modifyForm',[$pelicula->id]) }}" class="btn btn-warning" title="Editar película">Editar</a></td>
                <td><a href="{{ route('delete',['id'=>$pelicula->id]) }}" class="btn btn-danger" title="Eliminar película">Eliminar</a></td>
            </tr>    
            @endforeach
            
        </tbody>                  
    </table>
</div></main>
<footer>
	<div class="container">
		<p>© Películas - 2025</p>
		<form method="post" action="{{ route('cambiarCookie') }}">
            @csrf
			<label>Idioma:</label>
			<select name="idioma" class="select-inline">
				<option value="es"{{ request()->cookie('idioma') == 'es' ? 'selected' : '' }}>Castellano</option>
                <option value="eu" {{ request()->cookie('idioma') == 'eu' ? 'selected' : '' }}>Euskera</option>
			</select>
			<button type="submit" class="btn">Cambiar</button>
		</form>
	</div>
</footer>

</body></html>