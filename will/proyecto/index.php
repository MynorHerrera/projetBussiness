<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyecto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/estilo.css">
	<style>
video {
    max-width: 100%;
    height: auto;
}

p{
	text-align: center;
}
</style>
</head>
<body>
	<header class="cabecera">
		<h1>Municipalidad de Cuilapa</h1>
	</header>
	<div id="menu">
		<input type="checkbox" id="check">
		<label class="icon-menu" id="icon-menu" for="check"></label>
	</div>
	<nav class="navbar">
		<ul>
			<li><a href="../index.html"><span class="icon-home"></span>Inicio</a></li>
		</ul>
	</nav>
	<section class="information">
		<form action="index.php" method="POST">
			<input class="fecha" type="date" value="<?php echo date("Y-m-d");?>" name="date">
			<input class="enviar" type="submit" name="Buscar" value="Buscar">
		</form>
	</section>
	<div id="galeria" class="row">
	<ul>
	<?php
	include("mostrar.php");
	?>
	<ul>
	</div>
	<footer class="pie">
		<small>Todos los derechos reservados</small>
		<small>Copyright © 2018 | by Nombre de la empresa</small> 
	</footer>
	<script src="js/menu.js"></script>
	<script src="js/galeria.js"></script>
</body>
</html>