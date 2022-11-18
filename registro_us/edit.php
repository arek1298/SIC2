<?php

	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombre = $_POST['nombre'];
			$usuario = $_POST['usuario'];
			$cargo = $_POST['cargo'];
			$rfc = $_POST['rfc'];
			$contrasena = $_POST['contrasena'];
		    $permisos = $_POST['permisos'];


			$sql = "UPDATE members SET nombre = '$nombre', usuario = '$usuario',  cargo = '$cargo', rfc = '$rfc', contrasena = '$contrasena', permisos = '$permisos' WHERE id = '$id'";
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión 
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Primero debe llenar el form';
	}

	header('location: index.php');

?>