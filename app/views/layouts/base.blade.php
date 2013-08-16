<!DOCTYPE html>
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Centro de Vision</title>
	<meta name="description" content="">
	<!-- end: Meta -->
	<!-- start: Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: Fonts -->
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->	
	<!-- start: CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main-responsive.css">
    <link rel="stylesheet" href="css/alertify.core.css" />
	<link rel="stylesheet" href="css/alertify.default.css" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon 
	<link rel="shortcut icon" href="img/favicon.ico">-->
	<!-- end: Favicon -->	
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand offset2" href="index.html"><span>@yield('titulo') </span></a>		
			</div>
		</div>
	</div>
	<!-- start: Header -->	
		<div class="container-fluid-full">
			<div class="row-fluid">	
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<nav class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu" id="mytab">	
							<li><a href="#Inicio" class="active"><i class="icon-white icon-home"></i><span class="hidden-phone"> Inicio</span></a></li>
	                        <li><a href="#Datos_Generales"><i class="icon-white icon-user"></i><span class="hidden-phone"> Datos Generales</span></a></li> 
	                        <li><a href="#Padecimientos"><i class="icon-white icon-briefcase"></i><span class="hidden-phone"> Padecimientos</span></a></li>
	                        <li><a href="#Agudeza_Visual"><i class="icon-white icon-minus-sign"></i><span class="hidden-phone"> Agudeza Visual</span></a></li>
	                        <li><a href="#BiomicroscopiaIris"><i class="icon-white icon-eye-close"></i><span class="hidden-phone"> Biomicroscopia</span></a></li>                
	                        <li><a href="#FondoRetina"><i class="icon-white icon-road"></i><span class="hidden-phone"> Fondo</span></a></li>
	                        <li><a href="#Gonioscopia"><i class="icon-white icon-filter"></i><span class="hidden-phone"> Gonioscopia</span></a></li>
	                        <li><a href="#Movilidad"><i class="icon-white icon-th-large"></i><span class="hidden-phone"> Movilidad</span></a></li>
	                        <li><a href="#Refraccion"><i class="icon-white icon-picture"></i><span class="hidden-phone"> Exoftalmometria</span></a></li>
	                        <li><a href="#Diagnostico"><i class="icon-white icon-comment"></i><span class="hidden-phone"> Diagnosticos</span></a></li>
	                        <li><a href="#Tratamiento"><i class="icon-white icon-folder-open"></i><span class="hidden-phone"> Tratamiento</span></a></li>
	                        <li><a href="#Receta"><i class="icon-white icon-ok"></i><span class="hidden-phone"> Receta</span></a></li>
	                        <li><a href="#Lentes"><i class="icon-white icon-zoom-in"></i><span class="hidden-phone"> Lentes</span></a></li>
	                        <li><a href="#Certificado"><i class="icon-white icon-file"></i><span class="hidden-phone"> Certificado</span></a></li>
	                        <li><a href="#Resumen_Clinico"><i class="icon-white icon-list"></i><span class="hidden-phone"> Resumen Clinico</span></a></li>
	                        <li><a href="#Hospitalizacion"><i class="icon-white icon-plus"></i><span class="hidden-phone"> Hospitalizacion</span></a></li>
						</ul>
					</nav>
				</div>
				<!-- end: Main Menu -->
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Warning!</h4>
						<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
					</div>
				</noscript>

					@yield('Contenido')

			</div>
		</div>		
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; Dr. Gerardo Contreras Herrera 2013</span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: Imagine Code Labs</span>
		</p>

	</footer>
</body>
	<!-- start: JavaScript-->
	<script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	<script src="js/alertify.min.js"></script>


		@yield('Javascript')
	<!-- end: JavaScript-->
</html>
