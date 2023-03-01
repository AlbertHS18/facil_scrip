<?php

	class Estudiante
	{
		private $matricula;
		private $nombre;
		private $carrera;

		/* Nétodos Getters y Setters */

		// setters
		public function setMatricula ($matricula)
		{
			$this->matricula = $matricula;
		}

		public function setNombre ($nombre)
		{
			$this->nombre = $nombre;
		}

		public function setCarrera ($carrera)
		{
			$this->carrera = $carrera;
		}

		// getters
		public function getMatricula ()
		{
			return $this->matricula;
		}

		public function getNombre ()
		{
			return $this->nombre;
		}

		public function getCarrera ()
		{
			return $this->carrera;
		}

		private function presentacion ()
		{
			return "¡Hola, soy {$this->nombre} mi matricula es {$this->matricula} y estudio la carrera de {$this->carrera}!";
		}

		public function miPresentacion ()
		{
			return $this->presentacion();
		}
	}

	$est = new Estudiante();
	$est->setNombre('Luis');
	$est->setMatricula(20190152);
	$est->setCarrera('ISC');

	$est1 = new Estudiante();
	$est1->setNombre('Enrique');
	$est1->setMatricula(20190120);
	$est1->setCarrera('IIN');

	$est2 = new Estudiante();
	$est2->setNombre('Yordany');
	$est2->setMatricula(20192020);
	$est2->setCarrera('ICI');

	$estudiantes = [
		$est,
		$est1,
		$est2
	];

	/*echo '<pre>';
	var_dump($estudiante);*/

	foreach ($estudiantes as $estudiante)
	{
		if($estudiante->getNombre() == 'Luis')
			$estudiante->setNombre('Luis Reynaldo');
		if($estudiante->getNombre() == 'Enrique')
			$estudiante->setNombre('Enrique Andrade');
		if($estudiante->getNombre() == 'Yordany')
			$estudiante->setNombre('Yordany Fernandez');

		echo $estudiante->miPresentacion() . '<br>';
	}