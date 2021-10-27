<?php

session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol']=0;
}
include_once 'conexion.php';

$fecha=$_POST['fecha'];
$interes=$_POST['interes'];
$nombre= $_SESSION['nombres'];
$telefono=$_SESSION['telefono'];
$id_usuario=$_SESSION['rol_idrol'];


$consulta = $pdo->prepare("INSERT INTO reservas(fecha,nombre,telefono,interes,usuarios_id_usuario)VALUES(?,?,?,?,?)");
$resultado = $consulta->execute([$fecha,$nombre,$telefono,$interes,$id_usuario]);

    

	if($resultado === TRUE) {
		echo '<script type="text/javascript">
		alert("TU PEDIDO SE HIZO CON ÉXITO");
		window.location.href="index.php";
		</script>';
        $pdo = NULL;
	}
    else{
		echo '<script type="text/javascript">
		alert("ERROR AL HACER PEDIDO");
		window.location.href="index.php";
		</script>';
        $pdo = NULL;
	}
	?>
