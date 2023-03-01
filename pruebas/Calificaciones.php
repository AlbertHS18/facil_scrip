<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CALIFICACIÓN NUMERICA</title>
	<style type="text/css">
		#cuerpo{background: darkcyan;}
		#lab1{font-size: 20px;}
		#but1{font-size: 15px;}
		#inp1{font-size: 18px;}

	</style>
</head>
<body id="cuerpo">

	<form>
		<label id="lab1">INGRESE CALIFICACIÓN</label>
		<input type="text" name="inp" id="inp1">
		<br><br>
		<button id="but1" name="but" style="margin-bottom:30px;">CALCULAR</button>
	</form>
</body>

	<?php 
		if(isset($_GET['inp']))
			if ($_GET['inp'] >= 90 and $_GET['inp'] <= 100) {
				echo "<h1 id='letra'>" . "Felicitaciones usted ha obtenido una A" . "</h1>";
			}

			else if ($_GET['inp'] >= 80 and $_GET['inp'] <= 89) {
				echo "<h1 id='letra'>" . "Felicitaciones usted ha obtenido una B" . "</h1>";
			}

			else if ($_GET['inp'] >= 70 and $_GET['inp'] <= 79) {
				echo "<h1 id='letra'>" . "Usted aprobó, su calificación es regular,  ha obtenido una C" . "</h1>";
			}

			else if ($_GET['inp'] >= 60 and $_GET['inp'] <= 69) {
				echo "<h1 id='letra'>" . "Usted aprobó, pero por muy poco, ha obtenido una D" . "</h1>";
			}

			else if ($_GET['inp'] >= 0 and $_GET['inp'] <= 59) {
				echo "<h1 id='letra'>" . "Lo sentimos, usted reprobó, ha obtenido una F" . "</h1>";
			}



 	?>

</html>