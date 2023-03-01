<?php
	echo '<h1>Ciclos (Bucles) en PHP</h1>';

	echo '<h3>Ciclo While</h3>';

	// arreglos indexados
	$frutas = [
		'Manzana',
		'Pera',
		'Piña',
		'Mango',
		'Fresa',
		'Naranja'
	];

	$index = 0;

	// ciclo While
	while($index < count($frutas))
	{
		echo ($index + 1)
			. '. '
			. $frutas[$index]
			. '<br>'
		;

		$index++;
		// $index = $index + 1;
	}


	echo '<h3>Ciclo For</h3>';

	// ciclo For

	# Partes de un ciclo For
	/*
		1ra parte: se declara la variable (se inicializa también).
		2da parte: se evalua la condición para que el ciclo se siga ejecutando.
		3ra parte: indica el post-incremento a la variable declarada en la 1ra parte.
	*/
	
	$i = 0;

	for ($i; $i < count($frutas); $i++)
	{
		echo ($i + 1)
			. '. '
			. $frutas[$i]
			. '<br>'
		;
	}

	echo '<h3>Ciclo Foreach</h3>';

	// ciclo Foreach
	foreach ($frutas as $fruta)
	{
		echo $fruta . '<br>';
	}

	/*echo '<br><br><br>';

	foreach($frutas as $key => $value)
	{
		echo $key . '. ' . $value . '<br>';
	}*/


	$estudiante = (object) array(
		'nombre' => 'Enrique',
		'apellido' => 'Andrade',
		'edad' => 21,
		'carrera' => 'ISC',
		'curso' => 'Programación I'
	);

	$estudiante1 = (object) array(
		'nombre' => 'Luis',
		'apellido' => 'Reynaldo',
		'edad' => 21,
		'carrera' => 'ISC',
		'curso' => 'Programación I'
	);

	$estudiante2 = (object) array(
		'nombre' => 'Yordany',
		'apellido' => 'Fernandez',
		'edad' => 21,
		'carrera' => 'ISC',
		'curso' => 'Programación I'
	);

	$estudiantes = [
		'estudiante1' => $estudiante,
		'estudiante2' => $estudiante1,
		'estudiante3' => $estudiante2
	];


	/*echo '<pre>';
	var_dump($estudiantes);
	echo '</pre>';*/

	echo '<h3>Ciclo Foreach (Arreglo de objetos)</h3>';

	foreach ($estudiantes as $key => $estudiante)
	{
		echo '<strong> Info. del '
			. ucfirst($key)
			. '</strong><hr>'
		;

		/*echo "{$estudiante->nombre}" . '<br>';
		echo "{$estudiante->apellido}" . '<br>';
		echo "{$estudiante->carrera}" . '<br><br>';*/

		foreach ($estudiante as $key => $value)
		{
			echo '<strong>'
				. ucfirst($key)
				. '</strong>: '
				. $value
				. '<br>'
			;
		}

		echo '<br><br>';
	}