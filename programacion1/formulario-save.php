<?php

	echo '<pre>';

	// $_GET: es una variable global de servidor que nos permite visualizar todo lo que viene desde una petición tipo GET.

	// $_POST: es una variable global de servidor que nos permite visualizar todo lo que viene desde una petición tipo POST.

	// $_REQUEST: " " nos permite visualizar todos los datos sin importar que la petición haya sido GET o POST.

	// var_dump($_REQUEST);

	$data_form = (object) $_REQUEST;

	echo $data_form->id . '<br>';

	echo "{$data_form->nombre} {$data_form->apellido}";