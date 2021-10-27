<?php
session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol']=0;
}
?>
<?php

include_once 'conexion.php';

$nombres=$_POST['nombres'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$rol=2;

$consulta=$pdo->prepare("INSERT INTO usuarios(nombres,email,telefono,usuario,contrasena, rol_idrol) VALUES(?,?,?,?,?,?)");

	$consulta->bindParam(1,$nombres);
	$consulta->bindParam(2,$email);
	$consulta->bindParam(3,$telefono);
	$consulta->bindParam(4,$usuario);
	$consulta->bindParam(5,$contrasena);
	$consulta->bindParam(6,$rol);
	

	if($consulta->execute()){
		echo '<script type="text/javascript">
		alert("TUS DATOS HAN SIDO ALMACENADOS CORRECTAMENTE");
		window.location.href="index.php";
		</script>';
	}else{
		echo'<script type="text/javascript">
		alert("ERROR AL REGISTRAR LOS DATOS");
		window.location.href="index.php";
		</script>';
	}
	?>

