<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contactos</title>
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
						<tr>
							<td>1</td>
							<td>Luis Miguel</td>
							<td>809-252-8790</td>
							<td>Hola gente, klk</td>
							<td class="d-flex">
								<a href="/edit.php" class="btn btn-primary rounded-pill">Editar</a>

								<form action="/" method="POST" id="">
									<button class="btn btn-danger rounded-pill" onclick="">Borrar</button>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>

	<!-- footer -->
	<footer>
		<p class="mb-0 bg-dark text-white p-4 text-center">
			Copyright 2022 by Programación I. All Rights Reserved.
		</p>
	</footer>
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>