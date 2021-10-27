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
	<body style="background-color: #fff">		
		<!-- <div class="gtco-loader" style="display: none;" ></div>	 -->
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
											echo '<li><a href="usuariosregistrados.php">Usuario Registrados</a></li>';
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
								
				<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="gtco-container">
						<div class="row">
							<div class="col-md-12 col-md-offset-0 text-center">								
								<div class="row row-mt-15em">
									<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">										
										<h1 class="cursive-font" style="margin-right: -500px;">La Llanada</h1>											
									</div>									
								</div>																		
							</div>
						</div>
					</div>					
				</header>
								
				<div class="gtco-section">
					<div class="gtco-container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
								<h2 class="cursive-font primary-color">Nuestro aporte al medio ambiente</h2>
								<p>Nuestro trapiche cuenta con una combustión autosuficiente, pues el bagazo, que es el residuo de materia que queda luego de que a la caña de azúcar se le extrae el jugo azucarado, es lo que se utiliza para alimentar los hornos del trapiche.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/JAS-6883.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/JAS-6883.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Apronte de caña</h2>
										<p>Lugar en donde se almacena la materia prima de la elaboración de panela. Para garantizar la calidad de la misma, se almacena por 3 días como máximo, bajo techo.</p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/img_3.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Extracción de jugos</h2>
										<p>Por medio de un molino de caña, se realiza la extracción de jugo, llamado "guarapo crudo" y bagazo húmedo. El promedio de extracción de jugos es de 51% al 57%.</p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/JAS-6889.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/JAS-6889.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Limpieza y clarificación de guarapos</h2>
										<p>Para eliminar las impuresas del guarapo, se le adiciona un mucilago vegetal conocido como balso, el cual empieza a separar las partículas a una temperatura específica, y se debe retirar manualmente por un operario.</p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/JAS-6974.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/JAS-6974.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Concentración de azúcares</h2>
										<p>Es la etapa siguiente a la clasificación, donde básicamente se elima cerca del 90% del agua presente elevando así el contenido inicial de los sólidos solubles.</p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/JAS-6931.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/JAS-6931.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Punteo y batido</h2>
										<p>El punteo se trata de darle el punto a las mieles para que adquieran características que permitan retirarla del horno y posterior adquieran tipificación de panela, mediante el batido constante de la miel, con el fin de que pierda su capacidad de adherencia y cambie su textura. </p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="images/JAS-6957.jpg" class="fh5co-card-item image-popup">
									<figure>
										<div class="overlay"><i class="ti-plus"></i></div>
										<img src="images/JAS-6957.jpg" alt="Image" class="img-responsive">
									</figure>
									<div class="fh5co-text">
										<h2>Moldeo y empacado</h2>
										<p>Una vez alcance la textura deseada, se deposita la miel en gaveras, las cuales son el molde final de la panela, y a medida que se empiece a enfriar, se retira el molde, se retira de la mesa y se deja enfriar por completo, para empacarla en bolsa termoencogible y posteriormente en bolsa de papel.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div> 
				
				<div id="gtco-features">
					<div class="gtco-container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
								<h2 class="cursive-font">¿Quiénes somos?</h2>
								<p>
									Somos una empresa antioqueña dedicada a la producción y comercialización de productos agrícolas, y agroindustriales; implementando tecnologías modernas de cultivo y eficiencia en los procesos para obtener mejores rendimientos y una mejor calidad de los productos.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="feature-center animate-box" data-animate-effect="fadeIn">
									<span class="icon">
										<i class="ti-stats-up"></i>
									</span>
									<h3>MISIÓN</h3>
								<p> Es nuestro objetivo ofrecer condiciones para mejorar la calidad de vida de la población de la vereda La Llanada, municipio de Abejorral y satisfacer las necesidades alimenticias de la población regional. Estamos comprometidos con el cuidado y la protección del medio ambiente y los recursos naturales. </p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="feature-center animate-box" data-animate-effect="fadeIn">
									<span class="icon">
										<i class="ti-eye"></i>
									</span>
									<h3>VISIÓN</h3>
									<p>En un término no mayor a 7 años, nos proyectamos como una empresa innovadora que produce y comercializa derivados agroindustriales, con procesos tecnificados y recurso humano calificado y comprometido, para ofrecer al consumidor productos de alta calidad. </p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="feature-center animate-box" data-animate-effect="fadeIn">
									<span class="icon">
										<i class="ti-heart"></i>
									</span>
									<h3>VALORES</h3>
									<p>Somos una empresa que busca contribuir a las condiciones económicas y la calidad de vida de todas las familias que hacen parte de nuestra empresa, nos reconocemos por ser transparentes, puntúales a la hora de entregar pedidos, el trabajo en equipo es nuestra principal característica llevándonos a la excelencia.</p>
								</div>
							</div>
							

						</div>
					</div>
				</div>

				<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="gtco-container text-center">
						<div class="display-t">
							<div class="display-tc">
								<h1>"Haz un cliente, no una venta"</h1>
								<p>Anónimo </p>
							</div>	
						</div>
					</div>
				</div>
				<div class="gtco-section">
					<div class="gtco-container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6 animate-box">
									<h3>Ponerse en contacto</h3>
									<form action="#">
										<div class="row form-group">
											<div class="col-md-12">
												<label class="sr-only" for="name">Name</label>
												<input type="text" id="name" class="form-control" placeholder="Primer nombre">
											</div>										
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<label class="sr-only" for="email">Email</label>
												<input type="text" id="email" class="form-control" placeholder="E-mail">
											</div>
										</div>

										<div class="row form-group">
											<div class="col-md-12">
												<label class="sr-only" for="message">Mensaje</label>
												<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escríbenos algo"></textarea>
											</div>

										</div>
										<div class="form-group">
								 			<input type="submit" value="Enviar mensaje" class="btn btn-primary">
										</div>
								    </form>		
							    </div>
								<div class="col-md-5 col-md-push-1 animate-box">								
									<div class="gtco-contact-info">
										<h3>Información contacto</h3>
										<ul>
											<li class="address">Naranjal Abajo <br> La Llanada</li>
											<li class="phone"><a href="tel://1234567920">+57 321 8029324</a></li>
											<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
											<!-- <li class="url"><a href="http://FreeHTML5.co">FreeHTML5.co</a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<footer id="gtco-footer" role="contentinfo" style="background-color: #000" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="gtco-container">
						<div class="row row-pb-md">						
							<div class="col-md-12 text-center">
								<div class="gtco-widget">
									<h3>Get In Touch</h3>
									<ul class="gtco-quick-contact">
										<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
										<li><a href="#"><i class="icon-mail2"></i> Estebanjllo91@gmail.com</a></li>
										<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
									</ul>
								</div>
								<div class="gtco-widget">
									<h3>Get Social</h3>
									<ul class="gtco-social-icons">
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-linkedin"></i></a></li>
										<li><a href="#"><i class="icon-dribbble"></i></a></li>
									</ul>
								</div>
							</div>																			
						</div>
					</div>
				</footer> 
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
