<?php
	require_once('Contacto.php');

	$contactos = Contacto::verContactos();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contactos</title>
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
			<div class="col-md-12 mt-5">
				<h4 class="mb-3">Contactos Registrados</h4>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Correo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contactos as $index => $contacto): ?>
							<tr>
								<td><?php echo $index; ?></td>
								<td><?php echo $contacto->nombre; ?></td>
								<td><?php echo $contacto->apellido; ?></td>
								<td><?php echo $contacto->correo; ?></td>
								<td class="d-flex">
									<a href="/crud/edit.php?id=<?php echo $index; ?>" class="btn btn-primary rounded-pill">Editar</a>

									<form action="/crud/action.php" method="POST" id="form-<?php echo $index; ?>">
										<input type="hidden" name="action" value="eliminar">
										<input type="hidden" name="id" value="<?php echo $index; ?>">
										<button
											type="button"
											class="btn btn-danger rounded-pill"
											onclick='document.getElementById("form-<?php echo $index; ?>").submit();'
											>Borrar
										</button>
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
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