<!DOCTYPE html>
<html>
<head>
	<title>Modulo</title>
</head>
<body>
	<h1>Registrar modulo</h1>
	<form action="../Controller/modulo.controller.php" method="POST">
		<label>Codigo</label>
		<input type="number" name="txt_moducod" required/>
		<br>
		<label>Nombre</label>
		<input type="text" name="txt_modunom" required/>
		<br>
		<button name="accion" value="Guardar">Guardar</button>

	</form>
	<a href="consulta.modulo.php">Consultar</a>

</body>
</html>