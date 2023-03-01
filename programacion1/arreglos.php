<?php

	echo '<h1>Arreglos en PHP</h1>';

	// arreglos indexados
	$frutas = [
		'Manzana',
		'Pera',
		'Piña',
		'Mango',
		'Fresa',
		'Naranja'
	];

	echo '<h3>Arreglo indexado: Mostrando algunas frutas</h3>';

	echo '1. ' . $frutas[0] . '<br>';
	echo '2. ' . $frutas[1] . '<br>';
	echo '3. ' . $frutas[2] . '<br>';
	echo '4. ' . $frutas[3] . '<br>';
	echo '5. ' . $frutas[4] . '<br>';
	echo '6. ' . $frutas[5] . '<br>';


	// arreglos asociativos
	$estudiante = array(
		'nombre' => 'Enrique',
		'apellido' => 'Andrade',
		'edad' => 21,
		'carrera' => 'ISC',
		'curso' => 'Programación I'
	);

	echo '<h3>Arreglo asociativo: Mostrando datos de estudiante</h3>';

	echo 'Mi nombre es '
		. $estudiante['nombre']
		. '<br>'
	;

	echo 'Mi apellido es '
		. $estudiante['apellido']
		. '<br>'
	;

	echo 'Y estoy cursando el grado de '
		. $estudiante['carrera']
		. '<br>'
	;

	// echo "{$estudiante['nombre']}";

	// echo '<pre>';
	// var_dump($frutas);


	echo '<h1>Objetos en PHP</h1>';

	// $est = $estudiante
	$est = new stdClass();

	$est->nombre = 'Luis Miguel';
	$est->apellido = 'Rodriguez';

	echo '<pre>';
	var_dump($est);

	// Casting de array a object
	$estudiante = (object) $estudiante;

	var_dump($estudiante);

	// echo $estudiante['nombre'];

	echo $estudiante->nombre . '<br>';
	echo $estudiante->apellido . '<br>';

	# NOTA:
	/*
		- Sobre los arreglos.
		Para acceder a un arreglo asociativo/indexado, debemos utilizar corchetes y luego el key correspondiente.

		$frutas[0]; // Manzana
		$estudiante['nombre']; // Enrique

		- Sobre los objetos.
		Para acceder a una propiedad de un objeto, debemos utilizar la siguiente sintaxis:

		$est->nombre; // Luis Miguel
	*/