<?php
	header('Access-Control-Allow-Origin: *');
	require 'conexion/Database.php';
	//$tipo_consulta = $_POST['guardar'];

	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$eps = $_POST['eps'];
	$identificacion = $_POST['identificacion'];
	$arl = $_POST['arl'];
	$tapabocas = $_POST['tapabocas'];
	$careta = $_POST['careta'];
	$traje = $_POST['traje'];
	$monogafas = $_POST['monogafas'];

	Registro::InsertarNuevoDatos($nombre,$apellido,$email,$eps,$identificacion,$arl,$tapabocas,$careta,$traje,$monogafas);
	class Registro{
		function _construct(){
		}

		public static function InsertarNuevoDatos($nombre,$apellido,$email,$eps,$identificacion,$arl,$tapabocas,$careta,$traje,$monogafas)
		{
			$consultar = "INSERT INTO trabajador(nombre,apellido,email,eps,identificacion,arl,tapabocas,careta,traje,monogafas)VALUES('$nombre','$apellido','$email','$eps','$identificacion','$arl','$tapabocas','$careta','$traje','$monogafas')";
			try
			{
			$resultado = Database::getInstance()->getDb()->prepare($consultar);
			return $resultado->execute(array($nombre));
			}catch(PDOExeption $e)
			{
				return false;
			}
		}



	}

?>