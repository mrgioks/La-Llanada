<?php  
		include '../../conexion.php';
		$idservicio = $_GET['id'];

		$sentencia = $pdo->prepare("SELECT * FROM servicios WHERE idservicio = ?;");
		$sentencia->execute([$idservicio]);
		$plan = $sentencia->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Plan</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar Plan:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="nombre" value="<?php echo $plan->nombre; ?>"></td>
				</tr>
				<tr>
					<td>Descripción: </td>
					<td><input type="text" name="descripcion" value="<?php echo $plan->descripcion; ?>"></td>
				</tr>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="valor" value="<?php echo $plan->valor; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="idservicio" value="<?php echo $plan->idservicio; ?>">
					<td colspan="2"><input type="submit" value="EDITAR PLAN"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>