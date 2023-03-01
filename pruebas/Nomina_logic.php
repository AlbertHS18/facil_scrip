<?php
	
	// is_null($variable)
	// is_empty($variable)
	// isset($variable)
	
	session_start();

	// lógica para definir la variable de sesión
	if(! isset($_SESSION['Nocedulas']))
		$_SESSION['Nocedulas'] = array();

	// lógica para crear una tarea
	if($_POST['action'] == 'create')
		array_push($_SESSION['Nocedulas'], $_POST['Nocedula']);


	// lógica para definir la variable de sesión
	if(! isset($_SESSION['empleados']))
		$_SESSION['empleados'] = array();

	// lógica para crear una tarea
	if($_POST['action'] == 'create')
		array_push($_SESSION['empleados'], $_POST['empleado']);

		// lógica para definir la variable de sesión
	if(! isset($_SESSION['Canthorass']))
		$_SESSION['Canthorass'] = array();

	// lógica para crear una tarea
	if($_POST['action'] == 'create')
		array_push($_SESSION['Canthorass'], $_POST['Canthoras']);

		// lógica para definir la variable de sesión
	if(! isset($_SESSION['Precios']))
		$_SESSION['Precios'] = array();

	// lógica para crear una tarea
	if($_POST['action'] == 'create')
		array_push($_SESSION['Precios'], $_POST['Precio']);







		// lógica para completar una tarea
	if($_POST['action'] == 'complete')
		unset($_SESSION['Nocedulas'][$_POST['id']]);


	

	// redireccionamiento hacia la pág. de crear y visualizar tareas
	header('Location: /Nomina.php');