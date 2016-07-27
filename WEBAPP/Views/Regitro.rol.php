
<?php
//registro.rol.php
?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../Controller/guardarrol.php" method="post">
	<label>Codigo del rol</label>
	<input type="number" name="txt_codrol"required/><br>
	<label>Nombre del rol</label>
	<input type="text" name="txt_nomrol" required/>
	<label>Descripcion</label>
	<input type="text" name="txt_descrol" required/>
	<button value="Guardar" name="action">Guardar</button>
</form>
<a href="consulta.rol.php">Consultar</a>

</body>
</html>


