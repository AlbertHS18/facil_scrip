<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TODO List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center text-primary mt-3">My TODO List</h1>
			</div>

			<div class="col-md-12">
				<form action="todo_list_logic.php" method="POST">
					<input type="hidden" name="action" value="create">
					<div class="form-group">
						<label for="task">Tarea:</label>
						<input type="text" class="form-control form-control-sm" name="task" id="task"></input>
					</div>

					<button type="submit"
						class="btn btn-primary mt-3"
						style="display: block; margin: 0 auto;">Guardar
					</button>
				</form>
			</div>

			<div class="col-md-12 mt-4">
				<table class="table table-hover">
					<thead class="table-primary">
						<tr>
							<th>#</th>
							<th>Tarea</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<?php

							if(isset($_SESSION['tasks']) && !empty($_SESSION['tasks']))
							{
								$total_tareas = count($_SESSION['tasks']);

								foreach ($_SESSION['tasks'] as $key => $task)
								{
									echo "
										<tr>
											<td>{$key}</td>
											<td>{$task}</td>
											<td>
												<form action='todo_list_logic.php' method='POST'>
													<input type='hidden' name='action' value='complete'>
													<input type='hidden' name='id' value='{$key}'>
													<button type='submit' class='btn-success btn-sm'>Completar</button>
												</form>
											</td>
										</tr>
									";
								}
							}

							else
								echo '
									<tr>
										<td colspan="3" class="text-center">No existen tareas pendientes.</td>
									</tr>
								';
						?>
					</tbody>
				</table>

				<?php

					if(isset($total_tareas))
						echo "<p>Tienes un total de $total_tareas tarea(s) pendiente(s) por completar.</p>";

				?>

				<!-- <?php

					session_start();

					if(isset($_SESSION['tasks']))
					{
						echo '<pre>';
						var_dump($_SESSION['tasks']);
					}

				?> -->
			</div>
		</div>

		<a href="https://www.w3schools.com/bootstrap5/bootstrap_tables.php" target="__blank">
			Mirar los estilos de tabla aquí! XD
		</a>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>