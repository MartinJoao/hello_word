<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar</title>
</head>
<style type="text/css">
	form {
		border: 2px solid skyblue;
		border-collapse: collapse;
	}
</style>
<body>
	<center>
		<h1>Nuevo producto</h1>
		<form action="guardar.php" method="POST">
			<br><input type="text" name="nombre" placeholder="nombre de producto"></br>
			<br><input type="text" name="cantidad" placeholder="cantidad..."></br>
			<br><input type="text" name="precio" placeholder="precio..."></br>
			<br><input type="submit" value="Agregar"></br>
			<br>
		</form>
	</center>
</body>
</html>
