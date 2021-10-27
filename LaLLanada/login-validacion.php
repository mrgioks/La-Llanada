<?php 
	
	include 'conexion.php';
	$usuario = $_POST['txtUsuario'];
	$contrasena = $_POST['txtPassword'];
    $_SESSION['usuario']=$usuario;

	$sentencia = $pdo->prepare("SELECT * FROM usuarios where 
								usuario = ? and contrasena = ?;");
	$sentencia->execute([$usuario, $contrasena]);
	
	//print_r($datos);

	if ($sentencia->rowCount() == 1) {
		session_start();
		$datos = $sentencia->fetch();
		$_SESSION['id_usuario']=$datos['id_usuario'];
		$_SESSION['nombres']=$datos['nombres'];
		$_SESSION['rol_idrol']=$datos['rol_idrol'];
		$_SESSION['telefono']=$datos['telefono'];
		$_SESSION['correo']=$datos['email'];
		
	    // if ($_SESSION['rol_idrol']==1) {
		// 	 header('Location: index.php');
		// } else {
			header('Location: index.php');

	}else{
	
		header('Location: login.php');

	
	  
	 }
 ?>