<?php
require_once("../Model/conexion.php");
require_once("../Model/tipoproducto.class.php");
 $tipo = Gestion_Tipoproducto::ConsultarPorCodigo($_GET["tipopro_cod"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Modificar tipo de producto</h1>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		<label>Codigo tipo de producto:<?php echo $tipo["tipopro_cod"]; ?></label>
      <input type="hidden" name="txt_tipoprocod" readonly value="<?php echo $tipo["tipopro_cod"]; ?>">
      <br>
		<label>Nombre del tipo de producto</label>
		<input type="text" name="txt_tipopronom" value="<?php echo $tipo["tipopro_nombre"]; ?>" /></br>
		<label>Descripcion del tipo de producto</label>
		<input type="text" name="txt_desctipopro" value="<?php echo $tipo["tipopro_desc"]; ?>"></br>
		<button name="accion" value="update">Modificar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>

</body>
</html>