<?php
class Gestion_rol{
		//Expliqueme que fue lo que hizoy que debo hacer yo con eso y si debo agregar algo
		private static $sql;
		private static $query;
		private static $result;

		public static function Guardar($codigo_rol, $nombre_rol, $desc_rol){
			$pdo= Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			self::$sql="INSERT INTO rol(rol_cod, rol_nombre, rol_desc) values (rol_cod= :cod, rol_nombre= :nombre, rol_desc=:descu)";

			self::$query= $pdo->prepare(self::$sql);

			self::$query->bindValue(":cod", $codigo_rol);
			self::$query->bindValue(":nombre", $nombre_rol);
			self::$query->bindValue(":descu", $desc_rol);

			self::$query->execute();

			Conexion::Cerrarbd();

		}
		public static function Consultar(){
			$pdo= Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			self::$sql="SELECT * FROM rol";

			self::$query=$pdo->prepare(self::$sql);
			self::$query->execute();
			self::$result=self::$query->fetchALL(PDO::FETCH_BOTH);

			Conexion::Cerrarbd();
			return self::$result;
		}
		public static function Consultarporcodigo($codigo){
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			self::$sql = "SELECT * FROM rol WHERE rol_cod = ?";
			self::$query= $pdo->prepare(self::$sql);
			self::$query->execute(array($codigo));

			self::$result = self::$query->fetch(PDO::FETCH_BOTH);
			return self::$result;
			Conexion::Cerrarbd();
		}
		public static function Modificar($rol_cod, $rol_nombre, $desc_rol)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			self::$sql = "UPDATE rol SET rol_nombre = ?, rol_desc = ? WHERE rol_cod = ?";
			self::$query= $pdo->prepare(self::$sql);
			self::$query->execute(array($rol_nombre, $desc_rol, $rol_cod));
			Conexion::Cerrarbd();
		}
		public static function Eliminar($codigo_rol)
		{
			$pdo = Conexion::Abrirbd();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sql= "DELETE  FROM rol Where rol_cod = ?";
			self::$query= $pdo->prepare(self::$sql);
			self::$query->execute(array($codigo_rol));

			Conexion::Cerrarbd();
		}
	}
?>
