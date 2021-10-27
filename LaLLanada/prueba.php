<?php
session_start();
if (!isset($_SESSION['rol_idrol'])) {
	$_SESSION['rol_idrol']=0;
}
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
					<img src="images/logo.jpeg" alt="logo" style="width:80px;margin-top: -18px;border-radius: 30px;">
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
								echo '<li><a href="usuariosregistrados.php">Usuario Registrados</a></li>';
								echo '<li><a href=" ">Pedidos</a></li>';
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
		
		<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center">																										
					</div>
				</div>
			</div>
		</header>
		
		<div class="gtco-section">
				<div class="gtco-container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
									<h2 class="cursive-font primary-color">En la llanada contamos con tres tipos de presentaciones.</h2>
									<p></p>
								</div>
							</div>
				</div>
		</div>	
							
							
							
        <div class="row row-cols-1 row-cols-md-4 g-5">
        <div class="card-deck">
  <div class="card">


  <img src="images/panela1.jpeg" alt="Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  


  <div class="card">
  <img src="images/panela2.jpeg" alt="Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  
  <div class="card">
  <img src="images/panela3.jpeg" alt="Image">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
			
																					
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

