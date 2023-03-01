<?php
	// incluyendo la clase Contacto.php
	require_once('Contacto.php');

	// capturando la acción del usuario
	$action = $_POST['action'];

	switch ($action)
	{
		case 'create':
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$correo = $_POST['correo'];

			$contacto = new Contacto($nombre, $apellido, $correo);
			$contacto->guardarContacto($contacto);

			header('Location: /crud/index.php');
			break;

		case 'actualizar':
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$correo = $_POST['correo'];

			$contacto = Contacto::buscarContacto($id);
			$contacto->nombre = $nombre;
			$contacto->apellido = $apellido;
			$contacto->correo = $correo;
			$contacto->actualizarContacto($contacto, $id);

			header('Location: /crud/index.php');
			break;

		case 'eliminar':
			$id = $_POST['id'];

			$contacto = Contacto::eliminarContacto($id);

			header('Location: /crud/index.php');
			break;
		
		default:
			header('Location: /crud/index.php');
			break;
	}