<?php

  class login{
    private static $verificar;
    private static $mostrar;
    private static $dato;

    public static function valida($name,$pass){
      try {

        $pdo=Conexion::Abrirbd();

        self::$verificar="SELECT usu_nick,usu_pass FROM usuario WHERE usu_nick=:nick";

        self::$mostrar=$pdo->prepare(self::$verificar);
        self::$mostrar->bindValue(":nick",$name);
        self::$mostrar->execute();

        self::$dato=self::$mostrar->fetch(PDO::FETCH_ASSOC);


        if (password_verify($pass,self::$dato["usu_pass"])) {
            session_start();
            $_SESSION["nombre"]=$_POST["nombre"];
            header("location: ../Views/inicio.php");
          }
          else {
            echo "Error";
          }

          /*echo '<script type="text/javascript">
                  sweetAlert("Oops...", "Something went wrong!", "error"); window.location="../Views/index.php";
                </script>';*/
          #echo "<script>alert('Usted esta siendo redireccionado a la pagina principal') window.location='index.php'</script>";

            #echo '<script language="javascript">sweetAlert("Oops...", "Something went wrong!", "error");</script>';


        Conexion::Cerrarbd();
      }

      catch (Exception $e) {
          echo "Error: " . $e->getMessage() . " en la linea: " . $e->getLine() . " , su codigo es: " . $e->getCode();
      }
    }
  }
?>
