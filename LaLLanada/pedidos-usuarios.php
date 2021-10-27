<?php
session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol']=0;
}

    include 'conexion.php';

	if ($_SESSION['rol_idrol']==2) {
    $sentencia = $pdo->query("SELECT fecha,nombre,telefono,interes,usuarios_id_usuario FROM reservas");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>La Llanada</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="GetTemplates.co" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content="8ihefuwfuwef"/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Bootstrap DateTimePicker -->
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<!-- Página de carga-->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!-- [if lt IE 9]> -->
		<!-- <script src="js/respond.min.js"></script> -->
		<!-- <![endif] -->

	</head>
	<body style="background-color: #262626">
			
		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<a class="navbar-brand" href="#">
					<img src="images/logo.jpeg" alt="logo" style="width:70px;margin-top: -18px;border-radius: 30px;">
				</a>			
				<div class="row"> 
					<div class="col-sm-4 col-xs-12" style="margin-top: 5px;">
						<div id="gtco-logo"><a href="index.php">La Llanada <em>.</em></a></div>
					</div>				
					<div class="col-xs-8 text-right menu-1" style="margin-right: -200px;">		
						<ul>
							<?php
								if ($_SESSION['rol_idrol']==1) {
									echo '<li><a href="Logout.php">Cerrar sesión</a></li>';
									echo '<li><a href="panela.php">Panela</a></li>';
									echo '<li><a href="turismo.php">Turismo</a></li>';
									echo '<li><a href="registrados.php">Usuario Registrados</a></li>';
									echo '<li><a href="pedidos-admin.php">Pedidos</a></li>';
								}
								elseif ($_SESSION['rol_idrol']==2) {
									echo '<li><a href="Logout.php">Cerrar sesión</a></li>';
									echo '<li><a href="panela.php">Panela</a></li>';
									echo '<li><a href="turismo.php">Turismo</a></li>';
									echo '<li><a href="pedir.php">Pedir</a></li>';
									echo '<li><a href=" ">Historial</a></li>';
								}
								else{
									echo '<li><a href="panela.php">Panela</a></li>';
									echo '<li><a href="turismo.php">Turismo</a></li>';
									echo '<li><a href="registro.php">Registro</a></li>';
									echo '<li><a href="login.php">Iniciar sesión</a></li>'; 
								}
							?>								
						</ul>						
					</div>
				</div>			
			</div>
		</nav>
		
		
		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(image/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center" style="margin-top:100px">
						<center><h1 style="color:#fff">Pedidos</h1></center>									
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="color:#fff">Fecha</th>
										<th style="color:#fff">Usuario</th>
										<th style="color:#fff">Teléfono</th>
										<th style="color:#fff">Interés</th>										
									</tr>
								</thead>
								<!-- DATOS A EXTRAER DE BD.PROVEEDORES -->
								<tbody>
									<tr>
									<?php 
										foreach ($usuarios as $dato) {
									?>
									<tr>
										<td style="color:#fff" type="date"><?php echo $dato->fecha; ?></td>
										<td style="color:#fff"><?php echo $dato->nombre; ?></td>
										<td style="color:#fff"><?php echo $dato->telefono; ?></td>
										<td style="color:#fff"><?php echo $dato->interes; ?></td>
										<td><a href="eliminar.php?id=<?php echo $dato->id_usuario; ?>">Eliminar</a></td>
									</tr>
									<?php
									}									
									?>
								</tbody>
							</table>
						</div> 									
					</div>
				</div>
			</div>		
		</header>
	</body>
</html>
<?php

	}else{
		include 'Logout.php';
		header(location:index.php);

	}
?>
