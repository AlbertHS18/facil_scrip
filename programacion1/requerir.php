<?php
	
	/**
	 * Función require(): nos permite incluir archivos php más de una vez.
	 * 
	 * Función require_once(): nos permite incluir archivos php verificando de que el archivo en cuestión no haya sido incluido anteriormente.
	**/
	// require('includes/variables.php');
	// include_once('includes/variables.php');

	require('includes/variables1.php');

	echo '<pre>';
	var_dump($estudiantes);

	/*if(file_exists('includes/variables.php'))
	{
		require('includes/variables.php');

		echo '<pre>';
		var_dump($estudiantes);
	}

	else
		echo 'El archivo buscado no se encontró.';*/