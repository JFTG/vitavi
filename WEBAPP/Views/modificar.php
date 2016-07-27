
<?php
//registro.rol.php
?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="../Controller/guardarol.php" method="post">
	<label>Codigo</label>
	<input type="text" name="codigo"/>
	<label>Codigo del rol</label>
	<input type="text" name="codigo_rol"/>
	<label>Documento</label>
	<input type="text" name="documento"/>
	<label>Nombre</label>
	<input type="text" name="nombre"/>
	<label>Apellido</label>
	<input type="text" name="apellido"/>
	<label>Email</label>
	<input type="text" name="email"/>
	<label>Telefono</label>
	<input type="text" name="telefono"/>
	<label>Nombre de Usuario</label>
	<input type="text" name="nombredeusuario"/>
	<label>Contraseña</label>
	<input type="password" name="contraseña"/>
	<button value="Modificar" name="action">Modificar</button>
</form>

</body>
</html>

