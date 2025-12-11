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
            <a href="#">
                <!-- Mostrar título según idioma en cookie -->
                                    Filmak                            </a>
        </h1>
        <nav>
            <ul>
                                    <li>Bienvenido, Administrador</li>
                    <li><a href="#">Cerrar sesión</a></li>
                            </ul>
        </nav>
    </div>
</header>
<main class="container">
<div>
    <div>
        <h2>Películas disponibles</h2>
                    <a href="#" class="btn btn-success">Añadir Película</a>
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
                <td> <a href="#" class="btn btn-warning" title="Editar película">Editar</a></td>
                <td><a href="#" class="btn btn-danger" title="Eliminar película">Eliminar</a></td>
            </tr>    
            @endforeach
            
        </tbody>                  
    </table>
</div></main>
<footer>
	<div class="container">
		<p>© Películas - 2025</p>
		<form method="post" action="#">
			<label>Idioma:</label>
			<select name="idioma" class="select-inline">
				<option value="es">Castellano</option>
                <option value="eu" selected="selected">Euskera</option>
            
			</select>
			<button type="submit" class="btn">Cambiar</button>
		</form>
	</div>
</footer>

</body></html>