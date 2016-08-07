<?php
  require_once("../Model/conexion.php");
  require_once("../Model/validar.log.class.php");
  include 'hola.php';


    if (isset($_POST["sesion_vigilante"])) {

        $usuario= htmlentities(addslashes($_POST["nombre"]));
        $contrasena= htmlentities(addslashes($_POST["contrasena"]));
        $name = str_replace("usu", "123456789", $usuario);
        $pass = str_replace("pas", "123456789", $contrasena);

          try {
       login::valida($name,$pass);


          }
          catch (Exception $e) {
            echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
          }
        }
