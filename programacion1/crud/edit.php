<?php
	require_once('Contacto.php');

	$contacto = Contacto::buscarContacto($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Contacto</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<!-- Header -->
	<?php
		include_once('partials/header.php');
	?>

	<main class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5">
				<h4 class="mb-3">Editar Contacto</h4>

				<form class="form" action="/crud/action.php" method="POST">
					<input type="hidden" name="action" value="actualizar">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<div class="form-group">
						<label class="nombre">Nombre: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="nombre" id="nombre" required value="<?php echo $contacto->nombre; ?>" autocomplete="off">
					</div>

					<div class="form-group">
						<label class="apellido">Apellido: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="apellido" id="apellido" required value="<?php echo $contacto->apellido; ?>" autocomplete="off">
					</div>

					<div class="form-group">
						<label class="correo">Correo: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="correo" id="correo" required value="<?php echo $contacto->correo; ?>" autocomplete="off">
					</div>

					<div class="form-group mt-3">
						<button class="btn btn-success btn-block rounded-pill" style="display: block; width: 100%;">
							Actualizar
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>

	<!-- footer -->
	<?php
		include_once('partials/footer.php');
	?>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>