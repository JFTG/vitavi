<?php
//Modifico_permiso.php
require_once("../Model/conexion.php");
require_once("../Model/permiso.class.php");


$codigo =Gestion_permiso::Consultarporcodigo($_GET["codigo_permi"]);


?>

<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Modificar usuario</h1>
	<form action="../Controller/permiso.controller.php" method="POST">
		<label>Codigo de rol: <?php echo $codigo["rol_cod"]; ?></label>
	<input type="hidden" name="rol_cod" value=" <?php echo $codigo["rol_cod"]; ?>"/>
	<br>
	<br>
	<label>Codigo de modulo: <?php echo $codigo["modu_cod"]; ?></label>
	<input type="hidden" name="modu_cod" value=" <?php echo $codigo["modu_cod"]; ?>"/>
	<br>
	<br>
	<label>Estado del permiso</label>
	<input type="text" name="estado_permi" value=" <?php echo $codigo["estado_permi"]; ?>"required/>
	<br>
	<br>
	<label>Modulo del permiso</label>
	<input type="text" name="modulo_permi" value=" <?php echo $codigo["modulo_permi"]; ?>"required/>
	<br>
	<br>
	<button value="Modificar" name="accion">Modificar</button>
	
	

</form>

</div>
</body>
</html>
