<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: ../../turismo.php');
	}

	include '../../conexion.php';
	$idservicio = $_POST['idservicio'];
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$valor= $_POST['valor'];

	$sentencia = $pdo->prepare("UPDATE servicios SET nombre = ?, descripcion = ?, valor = ? WHERE idservicio = ?;");
	$resultado = $sentencia->execute([$nombre,$descripcion,$valor,$idservicio]);

	if ($resultado === TRUE) {
		header('Location: ../../turismo.php');
	}else{
		echo "Error";
	}
?>