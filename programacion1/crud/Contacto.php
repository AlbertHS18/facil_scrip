<?php
	
	session_start();

	/**
	 * Clase Contacto
	 */
	class Contacto
	{
		public $nombre;
		public $apellido;
		public $correo;

		function __construct ($nombre, $apellido, $correo)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correo = $correo;

			if(! isset($_SESSION['contactos']))
				$_SESSION['contactos'] = [];
		}

		// [C]: create
		// método de clase para guardar un nuevo contacto
		public function guardarContacto (Contacto $contacto)
		{
			array_push($_SESSION['contactos'], $contacto);
		}

		// [R]: read
		// método de clase para extraer todos los contactos
		public static function verContactos ()
		{
			if(isset($_SESSION['contactos']) && !empty($_SESSION['contactos']))
				return $_SESSION['contactos'];

			return null;
		}

		// método de clase para buscar un contacto
		public static function buscarContacto ($id)
		{
			return $_SESSION['contactos'][$id];
		}

		// [U]: update
		// método de clase para buscar un contacto
		public static function actualizarContacto (Contacto $contacto, $id)
		{
			$_SESSION['contactos'][$id] = $contacto;
		}

		// [D]: delete
		// método de clase para eliminar un contacto
		public static function eliminarContacto ($id)
		{
			unset($_SESSION['contactos'][$id]);
		}
	}