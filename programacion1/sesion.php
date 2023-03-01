<?php
	
	// esta función nos permite utilizar variables de sesión
	session_start();

	$_SESSION['copyright'] = 'Todos los derechos reservados 2022. Programación I.';

	$_SESSION['dia'] = 'Miércoles';

	echo $_SESSION['copyright'];