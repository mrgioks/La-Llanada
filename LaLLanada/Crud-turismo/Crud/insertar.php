<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include '../../conexion.php';
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$valor= $_POST['valor'];

	$sentencia = $pdo->prepare("INSERT INTO servicios(nombre,descripcion,valor) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$nombre,$descripcion,$valor]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: ../../turismo.php');
	}else{
		echo "Error";
	}
?>