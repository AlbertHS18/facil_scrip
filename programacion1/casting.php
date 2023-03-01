<?php

	$numero_1 = '20';
	$numero_2 = '52.10';

	# Casting implícito
	echo '<h2>Casting implícito</h2>';
	echo $numero_1 + $numero_2;

	echo '<br>';
	var_dump($numero_1);

	# Casting explícito
	echo '<h2>Casting explícito</h2>';
	$numero_2 = (float) $numero_2;

	echo $numero_2;
	echo '<br>';
	var_dump($numero_2);