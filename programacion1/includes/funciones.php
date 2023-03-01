<?php

	function recorrerFrutas (array $frutas = null, int $cantidad = null)
	{
		if(! is_null($frutas))
		{
			if(! is_null($cantidad) && $cantidad <= 0)
			{
				echo 'Debes ingresar un número de frutas mayor que cero.<br>';
				return 0;
			}

			foreach ($frutas as $index => $fruta)
			{
				echo $fruta . '<br>';

				if(! is_null($cantidad))
					if(($cantidad - 1) == $index)
						break;
			}
		}

		else
			echo 'No existen frutas por recorrer.';
	}