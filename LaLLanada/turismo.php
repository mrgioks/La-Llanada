<?php
session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol'] = 0;
}

include 'conexion.php';
$sentencia = $pdo->query("SELECT * FROM servicios;");
$servicios = $sentencia->fetchAll(PDO::FETCH_OBJ);

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
	<meta property="og:title" content=""/>
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

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<link href="css/mediumish.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body style="background-color: #fff">
		
		
	<!-- <div class="gtco-loader"></div> -->
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<a class="navbar-brand" href="#">
				<img src="images/logo.jpeg" alt="logo" style="width:80px;margin-top: -18px; ; border-radius: 30px;">
			</a>
			
			<div class="row">
			    <div class="col-sm-4 col-xs-12" style="margin-top: 5px;">  
					<div id="gtco-logo"><a href="index.php">La Llanada <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1" style="margin-right: -200px">
                    <ul>
                        
					<?php
						if ($_SESSION['rol_idrol'] == 1) {
							echo '<li><a href="Logout.php">Cerrar sesión</a></li>';
							echo '<li><a href="panela.php">Panela</a></li>';
							echo '<li><a href="turismo.php">Turismo</a></li>';
							echo '<li><a href="usuariosregistrados.php">Usuario Registrados</a></li>';
							echo '<li><a href=" ">Pedidos</a></li>';
						}
						elseif ($_SESSION['rol_idrol'] == 2) {
							echo '<li><a href="Logout.php">Cerrar sesión</a></li>';
							echo '<li><a href="panela.php">Panela</a></li>';
							echo '<li><a href="turismo.php">Turismo</a></li>';
							echo '<li><a href="pedir.php">Pedir</a></li>';
							echo '<li><a href=" ">Historial</a></li>';
						}
						else {
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
	

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
                    
                <h1 class="cursive-font" style="margin-top: 245px;">Servicios de turismo</h1>											


					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"> <a href="http://gettemplates.co" target="_blank"></a></span>
							<h1 class="cursive-font"></h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<section class="featured-posts">
		
	<div class="section-title">
		
    <div class="row row-cols-1 row-cols-md-4 g-5">
  <div class="col">
    <div class="card h-90">
    <img src="images/JAS-7146.jpg" alt="Image">
      <div class="card-body">
        <h1 class="card-title">Ruta del café</h1>

    </div>
      <div class="card-footer">
      <a href="#" class="btn btn-primary">Reservar</a>

          
      </div>
    </div>
  </div>
  <div class="card text-center" style="width: 29.8rem;">
  <div class="card-body">
    <h1 class="card-title">El plan incluye: </h1>
    <h3 class="card-text">Alojamiento una noche y dos días,
                                    Desayuno,
                                    traslado de Abejorral-finca La Llanada-Abejorral,
                                    recorrido por cafeteras,
                                    recolección de café,
                                    muestra proceso de pelado del café, 
                                    degustación de café regional.</h3>
  </div>
</div>
<div class="card text-center" style="width: 29.8rem;">
  <div class="card-body">
    <h1 class="card-title">El plan no incluye: </h1>
    <h3 class="card-text">Alimentación no estipulada, gastos no especificados en el programa.</h3>
  </div>
</div>
<div class="card text-center" style="width: 29rem;">
  <div class="card-body">
    <h1 class="card-title">Precios: </h1>
    <h3 class="card-text"> 
        Alojamiento para dos personas:       $410.000
	<br>Alojamiento para tres personas:     $427.000 </br>
	    Alojamiento para cuatro personas:   $448.000 </h3>
  </div>
</div>


  <div class="col">
  <div class="card" style="width: 31.4rem;">

    <img src="images/JAS-7025.jpg" alt="Image">
      <div class="card-body">
        <h1 class="card-title">Ruta panelera</h1>
      </div>
      <div class="card-footer">
      <a href="#" class="btn btn-primary">Reservar</a>
      </div>
    </div>
  </div>
  <div class="card text-center" style="width: 29.8rem;">
  <div class="card-body">
    <h1 class="card-title">El plan incluye: </h1>
    <h3 class="card-text">
   <br> Traslado Abejorral–la llanada–Abejorral, </br>
    recorrido por la plantación de caña,
	degustación de caña de azúcar,
	visita guiada a el proceso de elaboración de la panela,
	degustación de panela derretida,
	almuerzo.
	</h3>
  </div>
</div>
<div class="card text-center" style="width: 29.8rem;">
  <div class="card-body">
    <h1 class="card-title">El plan no incluye: </h1>
    <h3 class="card-text">Alimentación no estipulada, gastos no especificados.</h3>
  </div>
</div>
<div class="card text-center" style="width: 29rem;">
  <div class="card-body">
    <h1 class="card-title">Tarifa: </h1>
    <h3 class="card-text">El recorrido tendrá un valor de $250.000 pesos colombianos por persona.</h3>
  </div>
</div>






							
								
						</div>
						</div>
			        </div>	
				</div>														
			</div>
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
