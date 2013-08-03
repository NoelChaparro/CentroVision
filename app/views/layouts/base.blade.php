<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Centro de Vision</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/alertify.core.css" />
	<link rel="stylesheet" href="css/alertify.default.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
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
				<a class="brand" href="index.html"><span>@yield('titulo') </span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>Notificaciones</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">Nuevo Usuario Registrado</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">Nuevo mensaje</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">Usuario Borrado</span>
										<span class="time">2 horas</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>Ver todas las notificaciones</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>Tienes 12 tareas en proceso</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">Consulta Noel Chaparro</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Consulta Jose Luis Ordoñez</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">Ver todas las tareas</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>Tienes 9 mensajes</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Recepcion
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Dr. el pasiente de las 12 ya esta aqui
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Recepcion
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Dr. el pasiente de las 11.30 aviso que no vendra
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Recepcion
										     </span>
											<span class="time">
										    	3 horas
										    </span>
										</span>
                                        <span class="message">
                                            Dr. aqui esta Noel Chaparro, pasiente de las 11am
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Recepcion
										     </span>
											<span class="time">
										    	ayer
										    </span>
										</span>
                                        <span class="message">
                                            ya me voy Dr. Hasta mañana
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Recepcion
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Dr. ya esta el pasiente aqui
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">Ver todos los mensajes</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>Administrador
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Configuracion</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Perfil</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Salir</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu" id="mytab">	
						<li class="active"><a href="#Inicio" data-toggle="tab"><i class="icon-home"></i><span class="hidden-tablet"> Inicio</span></a></li>
						<li><a href="#Datos_Generales" data-toggle="tab"><i class="icon-group"></i><span class="hidden-tablet"> Datos Generales</span></a></li>	
						<li><a href="#Padecimientos" data-toggle="tab"><i class="icon-briefcase"></i><span class="hidden-tablet"> Padecimientos</span></a></li>
						<li><a href="#Agudeza_Visual" data-toggle="tab"><i class="icon-minus-sign"></i><span class="hidden-tablet"> Agudeza Visual</span></a></li>
						<li><a href="#Biomicroscopia" data-toggle="tab"><i class="icon-beaker"></i><span class="hidden-tablet"> Biomicroscopia</span></a></li>
						<li><a href="#Iris" data-toggle="tab"><i class="icon-eye-open"></i><span class="hidden-tablet"> Iris</span></a></li>
						<li><a href="#Fondo" data-toggle="tab"><i class="icon-road"></i><span class="hidden-tablet"> Fondo</span></a></li>
						<li><a href="#Gonioscopia" data-toggle="tab"><i class="icon-filter"></i><span class="hidden-tablet"> Gonioscopia</span></a></li>
						<li><a href="#Movilidad" data-toggle="tab"><i class="icon-th-large"></i><span class="hidden-tablet"> Movilidad</span></a></li>
						<li><a href="#Exoftalmometria" data-toggle="tab"><i class="icon-picture"></i><span class="hidden-tablet"> Exoftalmometria</span></a></li>
						<li><a href="#Diagnostico" data-toggle="tab"><i class="icon-key"></i><span class="hidden-tablet"> Diagnosticos</span></a></li>
						<li><a href="#Tratamiento" data-toggle="tab"><i class="icon-folder-open"></i><span class="hidden-tablet"> Tratamiento</span></a></li>
						<li><a href="#Receta" data-toggle="tab"><i class="icon-ok"></i><span class="hidden-tablet"> Receta</span></a></li>
						<li><a href="#Lentes" data-toggle="tab"><i class="icon-zoom-in"></i><span class="hidden-tablet"> Lentes</span></a></li>
						<li><a href="#Certificados" data-toggle="tab"><i class="icon-file"></i><span class="hidden-tablet"> Certificado</span></a></li>
						<li><a href="#Resumen_Clinico" data-toggle="tab"><i class="icon-list"></i><span class="hidden-tablet"> Resumen Clinico</span></a></li>
						<li><a href="#Hospitalizacion" data-toggle="tab"><i class="icon-plus"></i><span class="hidden-tablet"> Hospitalizacion</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
				<div id="TabContent" class="tab-content">
					<div class="tab-pane active" id="Inicio">
					<!-- Inicio -->
					<form class="form-vertical text-center">
						<fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead"><h1><b>Buscar Paciente</b></h1> </label>
							  <div class="controls">
								<input type="text" class="span4 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								
							  </div>
							</div>
						</fieldset>
					</form>
					</div>


					@yield('DatosPaciente')



					
					
					<div class="tab-pane" id="Iris">
						<p>7lorem </p>
					</div>
					<div class="tab-pane" id="Fondo">
						<p>8</p>
					</div>
					<div class="tab-pane" id="Gonioscopia">
						<p>9</p>
					</div>
					<div class="tab-pane" id="Movilidad">
						<p>12</p>
					</div>
					<div class="tab-pane" id="Exoftalmometria">
						<p>124</p>
					</div>
					<div class="tab-pane" id="Diagnostico">
						<p>1324</p>
					</div>
					<div class="tab-pane" id="Tratamiento">
						<p>245</p>
					</div>
					<div class="tab-pane" id="Receta">
						<p>245dgujjy</p>
					</div>
					<div class="tab-pane" id="Lentes">
						<p>467</p>
					</div>
					<div class="tab-pane" id="Certificados">
						<p>adsffas</p>
					</div>
					<div class="tab-pane" id="Resumen_Clinico">
						<p>dasfh</p>
					</div>
					<div class="tab-pane" id="Hospitalizacion">
						<p>gfhfgh</p>
					</div>
				</div>
			</div>
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; Dr. Gerardo Contreras Herrera 2013</span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: Imagine Code Labs</span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>

		<script src="js/alertify.min.js"></script>

		@yield('Javascript')
	<!-- end: JavaScript-->
	
</body>
</html>
