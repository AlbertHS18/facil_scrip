<?php
	
	// trait DB
	trait DB
	{
		public $db_name = 'prog1';

		public function save ()
		{
			/*
				cualquier lógica de este método
			*/

			echo 'El registro se ha guardado correctamente.';
		}

		public function imprimirNombre ()
		{
			$this->genero = 'Masculino';

			echo $this->genero . '<br>';

			// echo $this->getNombreCompleto();
		}
	}

	// Clase Padre
	class Persona
	{
		use DB;

		protected $nombre;
		protected $apellido;
		protected $edad;
		private $genero = 'M';

		// Getters
		public function getNombre ()
		{
			return $this->nombre;
		}

		public function getApellido ()
		{
			return $this->apellido;
		}

		public function getEdad ()
		{
			return $this->edad;
		}

		// Setters
		public function setNombre ($nombre)
		{
			$this->nombre = $nombre;
		}

		public function setApellido ($apellido)
		{
			$this->apellido = $apellido;
		}

		public function setEdad ($edad)
		{
			$this->edad = $edad;
		}

		// Modificador
		public function getNombreCompleto ()
		{
			return "{$this->nombre} {$this->apellido}. </br>";
		}
	}

	// Clase Hija Estudiante
	class Estudiante extends Persona
	{
		private $carrera;
		private $curso_favorito;

		// Getters
		public function getCarrera ()
		{
			return $this->carrera;
		}

		public function getcursoFavorito ()
		{
			return $this->curso_favorito;
		}

		// Setters
		public function setCarrera ($carrera)
		{
			$this->carrera = $carrera;
		}

		public function setCursoFavorito ($curso_favorito)
		{
			$this->curso_favorito = $curso_favorito;
		}

		// Modificador
		public function getInfoAcademica ()
		{
			return "Soy estudiante y estoy cursando el grado de {$this->carrera} y mi curso favorito es {$this->curso_favorito}. </br>";
		}
	}

	// Clase Hija Empleado
	class Empleado extends Persona
	{
		private $puesto;
		private $sueldo;

		// Getters
		public function getPuesto ()
		{
			return $this->puesto;
		}

		public function getSueldo ()
		{
			return $this->sueldo;
		}

		// Setters
		public function setPuesto ($puesto)
		{
			$this->puesto = $puesto;
		}

		public function setSueldo ($sueldo)
		{
			$this->sueldo = $sueldo;
		}

		// Modificador
		public function getPresentacion ()
		{
			return "Soy empleado y me desempeño como {$this->puesto} y tengo un salario de RD$ {$this->sueldo}. </br>";
		}
	}

	echo '<h1>Instancia de la clase Estudiante</h1>';

	// Instancia de la clase Estudiante
	$estudiante = new Estudiante;
	$estudiante->setNombre('Yordany');
	$estudiante->setApellido('Fernandez');
	$estudiante->setEdad(21);
	$estudiante->setCarrera('ISC');
	$estudiante->setCursoFavorito('Programación');

	echo $estudiante->getNombreCompleto();
	echo $estudiante->getInfoAcademica();
	$estudiante->save();


	echo '<h1>Instancia de la clase Empleado</h1>';

	// Instancia de la clase Empleado
	$empleado = new Empleado;
	$empleado->setNombre('Luis');
	$empleado->setApellido('Reynaldo');
	$empleado->setEdad(20);
	$empleado->setPuesto('Desarrollador Web Full Stack');
	$empleado->setSueldo(180000);

	echo $empleado->imprimirNombre();
	echo $empleado->getNombreCompleto();
	echo $empleado->getPresentacion();

	echo $empleado->db_name;

	/*echo '<pre>';
	var_dump($estudiante);*/