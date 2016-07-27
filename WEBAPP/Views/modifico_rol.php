<?php
  require_once("../Model/conexion.php");
  require_once("../Model/rol.class.php");

  $codigo = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>guardar en base de datos</title>
</head>
<body>
  <h1>Modificar Usuario</h1>
  <form action="../Controller/guardarrol.php" method="post">
      <label>Codigo:<?php echo $codigo["rol_cod"]; ?></label>
      <input type="hidden" name="txt_codrol" readonly value="<?php echo $codigo["rol_cod"]; ?>">
      <br>
      <label>Nombre</label>
      <input type="text" name="txt_nomrol" value=" <?php echo $codigo["rol_nombre"]; ?>" required/>
      <label>Descripcion</label>
      <input type="text" name="txt_descrol" value=" <?php echo $codigo["rol_desc"]; ?>" required/>
  <button name="action" value="Update">Modificar</button>
  </form>
</body>
</html>