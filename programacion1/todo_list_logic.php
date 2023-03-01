<?php
	
	// is_null($variable)
	// is_empty($variable)
	// isset($variable)
	
	session_start();

	// lógica para definir la variable de sesión
	if(! isset($_SESSION['tasks']))
		$_SESSION['tasks'] = array();

	// lógica para crear una tarea
	if($_POST['action'] == 'create')
		array_push($_SESSION['tasks'], $_POST['task']);

	// lógica para completar una tarea
	if($_POST['action'] == 'complete')
		unset($_SESSION['tasks'][$_POST['id']]);

	// redireccionamiento hacia la pág. de crear y visualizar tareas
	header('Location: /todo_list.php');