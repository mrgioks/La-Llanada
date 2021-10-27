<?php
session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol']=0;
}

if ($_SESSION['rol_idrol']==2) {

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
		
	<div class="gtco-loader" style="display: none;" ></div>
	
	<div id="page">
	
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
								echo '<li><a href="pedidos-adminn.php">Pedidos</a></li>';
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
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-color: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							
							
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight" style="margin-top: -100px; margin-left: 250px;">
							<div class="form-wrap">
								<div class="tab">									
									<div class="tab-content" class="table-responsive">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Hacer Pre-pedido</h3>
											<form action="guardarpedido.php" method="POST">

                                              <div class="row form-group">
											  <label for="pwd"> Fecha Actual: </label>
											  <input type="date" class="form-control" placeholder="00/00/0000" name="fecha" style="background-color: #000;">
											  </div>											  
											  
								            <div class="row form-group">
											  <label for="pwd"> Panela: </label>
											  <select class="form-control" required="" style="background-color: #000;" name="interes">

												<option value="Panela 1000 gr">1000 gramos</option>

												<option value="Panela 833 gr">833 gramos</option>

												<option value="Panela 910 gr">910 gramos</option>

											  </select>
											  </div>
											  
											  <div class="row form-group">
											  <div class="col-md-12">
												  <input type="submit" class="btn btn-primary btn-block" value="Enviar">
											  </div>
											</div> 

											  <!-- <div class="row form-group">
												<label for="pwd"> Servicio: </label>
												<select class="form-control" required="" style="background-color: #000;" name="interes">

													<option value="Ruta del café">Ruta del café</option>

													<option value="Ruta panelera">Ruta panelera</option>

												</select>
											  </div>


											  <div class="row form-group">
												<div class="col-md-12">
													<input type="submit" class="btn btn-primary btn-block" value="Enviar">
												</div>
                                              </div> -->

											  
											</form>	
										</div>												
									</div>
								</div>
					        </div>
						</div>	

					</div>
							
					
				</div>
			</div>
		</div>
	</header>
</div>
</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

					</body>

</html>
	
<?php

	}else{
		include 'Logout.php';
		header(location:index.php);

	}
?>