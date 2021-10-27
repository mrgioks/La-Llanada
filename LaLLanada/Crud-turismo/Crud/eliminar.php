<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$idservicio = $_GET['id'];
	include '../../conexion.php';
	$sentencia = $pdo->prepare("DELETE FROM servicios WHERE idservicio = ?;");
	$resultado = $sentencia->execute([$idservicio]);

	if ($resultado === TRUE) {
		header('Location: ../../turismo.php');
	}else{
		echo "Error";
	}

?>