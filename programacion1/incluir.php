<?php
	
	/**
	 * Función include(): nos permite incluir archivos php más de una vez.
	 * 
	 * Función include_once(): nos permite incluir archivos php verificando de que el archivo en cuestión no haya sido incluido anteriormente.
	**/
	// include('includes/variables.php');
	// include_once('includes/variables.php');


	if(file_exists('includes/variables.php'))
	{
		include('includes/variables.php');

		echo '<pre>';
		var_dump($estudiantes);
	}

	else
		echo 'El archivo buscado no se encontró.';