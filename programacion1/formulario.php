<?php

	$data_form = (object) $_REQUEST;

	$frutas = [
		'Piña',
		'Manzana',
		'Mango'
	];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularios</title>
</head>
<body>
	<h1>Formulario</h1>

	<!-- action="formulario.php?id=10" -->
	<form action="formulario.php" method="POST">
		<label for="nombre">Nombre</label> <br>
		<input type="text" name="nombre" id="nombre">

		<br><br>

		<label for="apellido">Apellido</label> <br>
		<input type="text" name="apellido" id="apellido">

		<br><br>

		<button type="submit">Enviar</button>
	</form>

	<?php

		if(isset($data_form->nombre))
			echo "<h1>¡Hola, $data_form->nombre!</h1>";
		else
			echo '<h3>Llena los campos del formulario para enviarte un saludo.</h3>';
	?>

	<br>

	<h2>Lista de frutas</h2>
	<ol>
		<?php foreach ($frutas as $fruta): ?>
			<li><?php echo $fruta; ?></li>
		<?php endforeach ?>
	</ol>

	<h2>Lista de frutas (v.2)</h2>
	<ul>
		<?php

			foreach ($frutas as $fruta)
			{
				echo "
					<li>$fruta</li>
				";
			}

		?>
	</ul>
</body>
</html>