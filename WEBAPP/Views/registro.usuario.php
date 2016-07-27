<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$rol =Gestion_usuario::cargar_rol();
?>
<section>
	<div class="registros">
	<h5>Registro de Usuario</h5>
	<form action="../Controller/registrousu.php" method="post">
		<div>
			<select name="seleccion" class="browser-default purple white-text" >
				<option  disabled selected>Elija un Rol</option>
				 <?php
					 foreach ($rol as $roles) {
							echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
					}
				?>
		  </select>
   </div>
		<div class="row">
			 <div class="input-field col s6">
				 <i class="material-icons prefix">account_circle</i>
				 <input name="nombre"  type="text" class="validate" required>
				 <label>Nombre</label>
			 </div>
			 <div class="input-field col s6">
					<i class="material-icons prefix">assignment_ind</i>
					<input name="apellido" id="icon_apellido" type="text" class="validate" required>
					<label for="icon_apellido">Apellido</label>
				</div>
				<div class="input-field col s6">
 				 <i class="material-icons prefix">label_outline</i>
 				 <input name="documento" id="icon_documento" type="number" class="validate" required>
 				 <label for="icon_documento">Docuentos de Identidad</label>
 			 </div>
			 <div class="input-field col s6">
				 <i class="material-icons prefix">perm_identity</i>
				 <input name="nombredeusuario" id="icon_telephone" type="text" class="validate" required>
				 <label for="icon_telephone">Usuario</label>
			 </div>
			 <div class="input-field col s6">
				<i class="material-icons prefix">email</i>
				<input name="email" id="icon_email" type="email" class="validate" required>
				<label for="icon_email">Email</label>
			</div>
			 <div class="input-field col s6">
				 <i class="material-icons prefix">phone</i>
				 <input name="telefono" id="icon_telephone" type="number" class="validate" required>
				 <label for="icon_telephone">Telefono</label>
			 </div>
			 <div class="input-field col s6">
				 <i class="material-icons prefix">vpn_key</i>
				 <input name="contrasena" id="icon_telephone" type="password" class="validate" required>
				 <label for="icon_telephone">Contraseña</label>
			 </div>
		 </div>
		 <button class="waves-effect waves-light btn blue" value="Guardar" name="action">Guardar</button>
 		<button class="waves-effect waves-light btn green" href="consulta.usuario.php">Consultar</button>
	 </form>


</section>
<br><br><br><br><br>
