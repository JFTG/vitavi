	<!-- Formulario: Guardar Marca de producto -->
	<form action="../../Controller/marca.controller.php" method="POST">
		<h1>Guardar Marca</h1>
		<label>Codigo de marca</label>
		<input type="text" name="txt_codmarca"/>
		<label>Nombre de marca</label>
		<input type="text" name="txt_nommarca"/>
		<label>Logo de marca</label>
		<input type="file" name="img_logomarca">
		<button name="accion" value="create">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"]; ?>
	</form>
