<section id="losregistros">
	<div class="registros">
		<form action="../../Controller/producto.controller.php" method="POST">
			<h5>Registro de productos</h5><hr>

			<label>Codigo del producto<br></label>
			<input type="text" name="txt_codpro"/></br>
			<label>Codigo del tipo de producto<br></label>
			<input type="text" name="txt_tipopro"/></br>
			<label>Codigo de marca<br></label>
			<input type="text" name="txt_marcapro"/></br>
			<label>Descripcion del producto<br></label>
			<input type="text" name="txt_descpro"/></br><br>
			<button class="waves-effect waves-light btn "  name="accion" value="create">Guardar</button><br>
			<?php echo @$_REQUEST["$mensaje"]; ?><br>

			<button class="waves-effect waves-light btn red" ><a href="guardar_tipoproducto.php"></a>Guardar Tipo Producto</button>
		    <button class="waves-effect waves-light btn orange" ><a href="guardar_marca.php"></a>Guardar Marca</button>
		</form>
	</div>
</section>
