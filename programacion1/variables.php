<?php
	
	# declarando variables en PHP
	$curso = 'Programación';
	$nivel = 1;
	$inscrito = true;
	$itbis = 0.18;



	# concatenar variables
	echo '<h3>Concatenación de variables</h3>';
	echo 'Buenas noches, estoy inscrito en el curso de '
		. $curso
		. ' '
		. $nivel
		. '. <br>'
	;



	# interpolación de variables
	echo '<h3>Interpolación de variables</h3>';

	echo "Buenas noches, estoy inscrito en el curso de {$curso} {$nivel}.<br>";
	
	# NOTA: la interpolación de variables no funciona cuando utilizamos comillas simples
	echo 'Buenas noches, estoy inscrito en el curso de {$curso} {$nivel}.';



	# Comentarios

	// Comentario de una sola línea

	/*
		Comentario de
		más de una
		línea
	*/

	// Comentario de una sola línea



	# Función var_dump($variable)
	echo '<h3>Uso de la función var_dump()</h3>';
	echo '<pre>';
	var_dump($curso);
	echo '</pre>';