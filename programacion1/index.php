<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programación I</title>
	<style type="text/css">
		h1 { color: #1090c1; text-align: center; }
		p { text-align: center; }
		ul li a { text-decoration: none; }
		img	{ width: 150px; margin: 0 auto; display: block; }
	</style>
</head>
<body>
	<h1>Programación I</h1>
	
	<img src="https://th.bing.com/th/id/OIP.REA_HuzmfIkqDGpnkdpa1AHaD_?pid=ImgDet&rs=1" alt="Logo PHP">
	
	<p>Esto será un índice para llevar un registro de apuntes de todos los temas relacionados a PHP en el curso de <strong>Programación I</strong>.</p>
	
	<hr>

	<h3>Generalidades de PHP</h3>
	<ul>
		<li>
			<a href="/variables.php" target="__blank">Variables</a>
		</li>

		<li>
			<a href="/constantes.php" target="__blank">Constantes</a>
		</li>

		<li>
			<a href="/casting.php" target="__blank">Casting</a>
		</li>

		<li>
			<a href="/arreglos.php" target="__blank">Arreglos y Objetos</a>
		</li>

		<li>
			<a href="/ciclos.php" target="__blank">Ciclos</a>
		</li>

		<li>
			<a href="/formulario.php" target="__blank">Formularios</a>
		</li>

		<li>
			<a href="/sesion.php" target="__blank">Variables de Sesión</a>
		</li>

		<li>
			<a href="/todo_list.php" target="__blank">TODO List</a>
		</li>

		<li>
			<a href="/incluir.php" target="__blank">Include</a>
		</li>

		<li>
			<a href="/requerir.php" target="__blank">Require</a>
		</li>

		<li>
			<a href="/funciones.php" target="__blank">Funciones</a>
		</li>
	</ul>

	<h3>Programación Orientada a Objetos (POO)</h3>
	<ul>
		<li>
			<a href="/poo/Auto.php" target="__blank">Clases y Objetos</a>
		</li>
		<li>
			<a href="/poo/Estudiante.php" target="__blank">Encapsulamiento</a>
		</li>
		<li>
			<a href="/poo/Herencia.php" target="__blank">Herencia</a>
		</li>
		<li>
			<a href="/crud/index.php" target="__blank">CRUD</a>
		</li>
	</ul>

	<!-- <footer>
		<p style="text-align: center;">
			<?php

				session_start();

				unset($_SESSION['copyright']);

				echo $_SESSION['copyright'];

				echo $_SESSION['dia'];

			?>
		</p>
	</footer> -->
</body>
</html>