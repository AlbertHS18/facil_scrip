<?php

	/**
	 * Clase Auto
	 */
	class Auto
	{
		public $marca;
		public $color;
		public $tipo;

		/*public function __construct ($marca, $color, $tipo)
		{
			$this->marca = $marca;
			$this->color = $color;
			$this->tipo = $tipo;
		}*/
	}

	/*$auto = new Auto('Ford', 'Gris', 'Carro');
	$moto = new Auto('Super Gato', 'Rojo', 'Moto');*/

	/*echo '<pre>';
	var_dump($auto);
	var_dump($moto);*/

	// accediendo a propiedades del objeto
	/*echo $moto->marca . '<br>';
	echo $moto->color;*/


	$auto = new Auto;
	$auto->marca = 'Nissan';
	$auto->color = 'Azul';
	$auto->tipo = 'Yipeta';

	echo '<pre>';
	var_dump($auto);