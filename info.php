<?php
// El mensaje
$mensaje = $_POST['first_name'] . " " . $_POST['last_name'];
$mensaje .= "\n" ;
$mensaje .= $_POST['email'];
$mensaje .= "\n";
$mensaje .= $_POST['message'];


// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('info@erversolutions.es', 'Mensaje desde la web', $mensaje);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html ml:lang="es" lang="es" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ERVER Solutions - Creación páginas webs y SEO barcelona</title>
		<meta name="description" content="En ERVER Solutions, nos hemos centrado en la regeneración digital y en la creación de páginas webs de los negocios que lo precisen en barcelona. ¡Te daremos una solución digital!" />
		<meta name="keywords" content="ERVER Solutions, páginas webs, pagina web, web barcelona, busqueda SEO, regeneración digital, posicionamiento SEO, Barcelona, marketing online barcelona, páginas webs barcelona" />
		<meta name="robots" content="index,follow"/>
        <meta name="author" content="ERVER Solutions"/>

		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css?version=16.7" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		<link rel="icon" href="./favicon.ico" type="image/x-icon" /> 
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content="Creación páginas webs en Barcelona" />
		<meta property="og:description" content="En ERVER Solutions, nos hemos centrado en la regeneración digital y en la creación de páginas webs de los negocios que lo precisen en barcelona." />
		<meta property="og:site_name" content="ERVER Solutions" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.erversolutions.es/" />
		<meta property="og:image" content="http://erversolutions.es/img/large/02.jpg"/>

		<meta name="twitter:title" content="Creación páginas webs en Barcelona" />
		<meta name="twitter:image" content="http://erversolutions.es/img/large/02.jpg" />
		<meta name="twitter:url" content="http://www.erversolutions.es/" />
		<meta name="twitter:card" content="summary" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero contacto">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="http://www.erversolutions.es"><img src="img/logo-erver.jpg" alt="HTML5 Logo"></a>
							<h2>ERVER Solutions - Contacto</h2>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown">En <b>ERVER Solutions</b>, contacta con nosotros para realizar tu <b>página web</b> ideal.</h1>
							<a href="#about" class="learn-btn animated fadeInUp">Saber Más <i class="fa fa-arrow-down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
		<section class="video" id="about">
				<div class="container">

			      <hr class="featurette-divider">

			      <div class="row featurette">
			        <div class="col-md-7">
			          <h2 class="featurette-heading">Contacto ERVER Solutions. <span class="text-muted">Tu empresa de creación de páginas webs en Barcelona.</span></h2>
			          <p class="lead">¡Gracias por ponerte en contacto con nosotros! Te reponderemos en breve.</p>
		              <p class="lead">Puedes llamarnos al 628 799 888 o enviarnos un e-mail a info@erversolutions.es. ¡Te ayudaremos!</p>

		            </div>

			        

			        <div class="col-md-5">
			          <img class="featurette-image img-fluid mx-auto" src="img/contacto-web-barcelona-1.jpg" alt="Generic placeholder image">
			        </div>
			      </div>

			      <hr class="featurette-divider">
			</div>
			     
		</section>
		
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="img/01-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/01.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Buscamos quien nos pueda necesitar</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/02-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/02.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Trabajamos para encontrar una solución</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/03-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/03.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Implementamos la solución elegida</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/06-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/06.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Te la entregamos, convencidos de nuestro trabajo</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<h1>Haznos llegar tu proyecto de página web!</h1>
						<h2>628 799 888</h2>
						<h1>info@erversolutions.es</h1>
						<a href="https://twitter.com/erver_solutions">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<a href="http://www.erversolutions.es"><img src="img/logo-erver.jpg" alt="HTML5 Logo"></a>
						<p>© ERVER Solutions 2017 </p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href="./index.html">Home</a></li>
							<li><a href="./pagina-web-barcelona.html">Página web</a></li>
							<li><a href="./posicionamiento-seo-barcelona.html">Posicionamiento SEO</a></li>
							<li><a href="./nuestras-paginas-webs-barcelona.html">Nuestras Webs</a></li>
							<li><a href="./contacto-paginas-web-barcelona.html">Contacto</a></li>
							<li><a href="./blog-paginas-web-barcelona.html">Blog Web</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="./index.html"><i class="fa fa-heart"></i>Home</a></li>
					<li><a href="./pagina-web-barcelona.html"><i class="fa fa-flash"></i>Página web</a></li>
				</ul>
				<ul>
					<li><a href="./posicionamiento-seo-barcelona.html"><i class="fa fa-desktop"></i>Posicionamiento SEO</a></li>
					<li><a href="./nuestras-paginas-webs-barcelona.html"><i class="fa fa-download"></i>Nuestras Webs</a></li>
				</ul>
				<ul>
					<li><a href="./contacto-paginas-web-barcelona.html"><i class="fa fa-envelope"></i>Contacto</a></li>
					<li><a href="./blog-paginas-web-barcelona.html"><i class="fa fa-paper-plane"></i>Blog Web</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>

	</body>
</html>
