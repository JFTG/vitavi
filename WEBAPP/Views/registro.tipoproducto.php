	<!-- Formulario: Guardar tipo de producto -->

	<h1>Guardar tipo de prducto</h1>
	<form action="../Controller/tipoproducto.controller.php" method="POST">
		<label>Codigo del tipo de producto</label>
			<input type="text" name="txt_tipoprocod"/></br>
		<label>Nombre del tipo de producto</label>
			<input type="text" name="txt_tipopronom"/></br>
		<label>Descripcion del tipo de producto</label>
			<input type="text" name="txt_desctipopro"></br>
		<button name="accion" value="create">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>
	<a href="consulta.tipoproducto.php">Consultar todo</a>
	

