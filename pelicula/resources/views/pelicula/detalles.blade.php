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
    <h2><?= $pelicula->titulo?></h2> 
    
    <div>
        <label> Director: <?= $pelicula->director ?></label>
        <label>Genero: <?= $pelicula->genero ?></label>
        <label>Sinopsis: <?= $pelicula->sinopsis ?></label>
        <label>Fecha: <?= $pelicula->fecha_estreno ?></label>
        <label>Duracion<?= $pelicula->duracion_min ?></label>
        <label>Clasificacion <?= $pelicula->clasificacion ?></label>
    </div>
    
    <div>
        <a href="#" class="btn btn-secondary">Volver al listado</a>
        
                    <a href="#" class="btn btn-warning">Editar película</a>
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