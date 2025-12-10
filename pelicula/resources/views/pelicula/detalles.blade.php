<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas - MVC</title>
    <link rel="stylesheet" href="assets/style.css">
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
    <h2>Un Día de Furia</h2> 
    
    <div>
        <p><strong>Director:</strong> Joel Schumacher</p>
        <p><strong>Género:</strong> Thriller</p>
        <p><strong>Fecha de Estreno:</strong> 1993-02-26</p>
        <p><strong>Duración (min):</strong> 113</p>
        <p><strong>Clasificación:</strong> 
            <span>+18</span> 
        </p>
        
                    <p><strong>Sinopsis:</strong></p>
            <p>Un hombre al borde de un ataque de nervios abandona su coche en un atasco y se embarca en una violenta odisea urbana.</p>
            </div>
    
    <div>
        <a href="#" class="btn btn-secondary">Volver al listado</a>
        
                    <a href="#" class="btn btn-warning">Editar película</a>
            </div>
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