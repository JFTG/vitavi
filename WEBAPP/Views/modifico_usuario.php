<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$codigo =Gestion_usuario::Consultarusuariocodigo($_GET["codigo_usuario"]);

?>

<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Modificar usuario</h1>
	<form action="../Controller/registrousu.php" method="POST">
		<label>Codigo: <?php echo $codigo["usu_cod"]; ?></label>
	<input type="hidden" name="codigo" value=" <?php echo $codigo["usu_cod"]; ?>"/>
	<br>
	<br>
	<label>Documento</label>
	<input type="text" name="documento" value=" <?php echo $codigo["usu_docu"]; ?>" required/>
	<br>
	<br>
	<label>Nombre</label>
	<input type="text" name="nombre" value=" <?php echo $codigo["usu_nom"]; ?>"required/>
	<br>
	<br>
	<label>Apellido</label>
	<input type="text" name="apellido" value=" <?php echo $codigo["usu_ape"]; ?>"required/>
	<br>
	<br>
	<label>Email</label>
	<input type="email" name="email" value=" <?php echo $codigo["usu_email"]; ?>"required/>
	<br>
	<br>
	<label>Telefono</label>
	<input type="text" name="telefono" value=" <?php echo $codigo["usu_tel"]; ?>"/>
	<br>
	<br>
	<label>Nombre de Usuario</label>
	<input type="text" name="nombredeusuario" value=" <?php echo $codigo["usu_nick"]; ?>"required/>
	<br>
	<br>
	<label>Contraseña</label>
	<input type="password" name="contrasena" value=" <?php echo $codigo["usu_pass"]; ?>"required/>
	<br>
	<br>
	<button value="Modificar" name="action">Modificar</button>
	
	

</form>

</div>
</body>
</html>