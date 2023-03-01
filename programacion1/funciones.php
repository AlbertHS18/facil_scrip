<?php
	
	if(file_exists('includes/variables.php'))
		require_once('includes/variables.php');

	if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');

	// función void
	/*function saludar ()
	{
		echo '¡Hola, gente! Espero que estén bien.';
	}

	echo saludar();*/


	// función con valor de retorno
	/*function saludo (string $nombre):string
	{
		return "¡Hola, {$nombre}! Espero que estén bien.<br>";
	}

	echo saludo('Madara');
	echo saludo('Itachi');*/

	// función con parámetros opcionales
	/*function suma (int $a = null, int $b = null)
	{
		if(! is_null($a) && ! is_null($b))
			return ($a + $b);

		return 'Debes ingresar los parámetros para realizar la sumatoria.<br>';
	}

	echo suma();
	echo suma(10, 58);*/

	echo '<h1>Frutas</h1>';

	recorrerFrutas($fruts);