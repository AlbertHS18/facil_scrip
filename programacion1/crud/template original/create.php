<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Contacto</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>
<body>
	<!-- Header -->
	<header class="container-fluid p-5 bg-dark text-white shadow">
		<h1 class="text-center">Aplicación de Contactos PHP</h1>
	</header>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow">
		<div class="container-fluid">
			<div class="collapse navbar-collapse justify-content-center" id="mynavbar">
				<ul class="navbar-nav">
					<li class="nav-item text-white">
						<a class="nav-link" href="/">Contactos</a>
					</li>
					<li class="nav-item text-white">
						<a class="nav-link" href="/create.php">Nuevo Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5">
				<h4 class="mb-3">Registrar Nuevo Contacto</h4>

				<form class="form" action="/" method="POST">
					<div class="form-group">
						<label class="nombre">Nombre: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="nombre" id="nombre" required autocomplete="off">
					</div>

					<div class="form-group">
						<label class="apellido">Apellido: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="apellido" id="apellido" required autocomplete="off">
					</div>

					<div class="form-group">
						<label class="correo">Correo: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="correo" id="correo" required autocomplete="off">
					</div>

					<div class="form-group mt-3">
						<button class="btn btn-success btn-block rounded-pill" style="display: block; width: 100%;">
							Guardar
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>

	<!-- footer -->
	<footer class="mt-4">
		<p class="mb-0 bg-dark text-white p-4 text-center">
			Copyright 2022 by Programación I. All Rights Reserved.
		</p>
	</footer>
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>