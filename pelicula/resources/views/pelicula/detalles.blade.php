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
                @auth
                    Bienvenido {{ Auth::user()->name}}
                    <a href="{{ route('logout') }}" class="btn-warning"></a>
                @else
                    <a href="{{ route('loginForm') }}" class="btn">Loguearse</a>
                @endauth

            </ul>
        </nav>
    </div>
</header>
<main class="container">
<div>
    <h2><?= $pelicula->titulo?></h2> 
    
    <div>
        <label> Director: <?= $pelicula->director ?></label>
        <br>
        <label>Genero: <?= $pelicula->genero ?></label>
        <br>
        <label>Sinopsis: <?= $pelicula->sinopsis ?></label>
        <br>
        <label>Fecha: <?= $pelicula->fecha_estreno ?></label>
        <br>
        <label>Duracion<?= $pelicula->duracion_min ?></label>
        <br>
        <label>Clasificacion <?= $pelicula->clasificacion ?></label>
    </div>
    
    <div>
        <a href="{{ route('index') }}" class="btn btn-secondary">Volver al listado</a>
        
                    <a href="{{route('modifyForm',[$pelicula->id])}}" class="btn btn-warning">Editar película</a>
            </div>
</div>
</main>
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