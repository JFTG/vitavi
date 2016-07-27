<?php

  class login{
    private static $verificar;
    private static $mostrar;
    private static $dato;
    private static $contador=0;

    public static function valida($name,$pass){
      try {

        $pdo=Conexion::Abrirbd();

        self::$verificar="SELECT usu_nick,usu_pass FROM usuario WHERE usu_nick=:nick";

        self::$mostrar=$pdo->prepare(self::$verificar);
        self::$mostrar->bindValue(":nick",$name);
        self::$mostrar->execute();

        while(self::$dato=self::$mostrar->fetch(PDO::FETCH_ASSOC)){
          if (password_verify($pass,self::$dato["usu_pass"])) {
    			  self::$contador++;
    			}
    	  }
        if (self::$contador>0) {
          session_start();
          $_SESSION["nombre"]=$_POST["nombre"];
          header("location: ../Views/inicio.php");
        }
        else {
          echo "Contraseña mal";

          /*echo '<script type="text/javascript">
                  sweetAlert("Oops...", "Something went wrong!", "error"); window.location="../Views/index.php";
                </script>';*/
          #echo "<script>alert('Usted esta siendo redireccionado a la pagina principal') window.location='index.php'</script>";

            #echo '<script language="javascript">sweetAlert("Oops...", "Something went wrong!", "error");</script>';

        }
        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea" . $e->getLine() . "<br>";
          echo "El codigo del error es: " . $e->getCode();
      }
    }
  }





  /*  class login{


    public static function valida($name,$pass){
      $contador=0;
      try {
        $pdo=Conexion::Abrirbd();

      $verificar="SELECT usu_nick,usu_pass FROM usuario WHERE usu_nick=?";

        $mostrar=$pdo->prepare($verificar);

        $mostrar->execute(array($name));

        while($dato=$mostrar->fetch(PDO::FETCH_ASSOC)){
          if (password_verify($pass,$dato["usu_pass"])) {
            $contador++;
          }
        }
        if ($contador>0) {
          session_start();
          $_SESSION["nombre"]=$_POST["nombre"];
          header("location: inicio.php");
        }
        else {
          echo "Error en los datos";
        }
        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea" . $e->getLine() . "<br>";
          echo "El codigo del error es: " . $e->getCode();
      }
    }
    }
  ?> */
?>
