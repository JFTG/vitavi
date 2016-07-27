<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Guardar Marca</h1>
	<form action="../../Controller/marca.controller.php" method="POST">
		<label>Codigo de la marca</label>
		<input type="text" name="txt_codmarca"/></br>
		<label>Nombre de la marca</label>
		<input type="text" name="txt_nommarca"/></br>
		<label>Logo de la marca</label>
		<input type="file" name="img_logomarca"></br>
		<button name="accion" value="create">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>

</body>
</html>