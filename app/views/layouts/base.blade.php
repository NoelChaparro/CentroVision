<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Centro de Visión - @yield('titulo')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!--<link rel="stylesheet" href="css/main-responsive.css">-->
        <link rel="stylesheet" href="css/alertify.core.css" />
        <link rel="stylesheet" href="css/alertify.default.css" />
        <link rel="stylesheet" href="css/jquery-ui-1.8.21.custom.css"><!--para calendario en inputbox-->
        <link rel="stylesheet" href="font/icomoon/style.css"/><!--iconos para menu de inicio-->                          
        <!-- Add fancyBox main JS and CSS files -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" /><!--Efecto modal para imagenes--> 
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
     
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand pull-left" href="#">Centro de Visión</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right menu_principal">
                            <li class="active"><a href="./">Expediente Paciente</a></li>
                            @if (Auth::user()->autorizacion == 1)
                                <li><a href="OperacionLaser">Lasik</a></li>
                                <li><a href="LentesContacto">Lentes de Contacto</a></li>
                                <li><a href="BajaVision">Baja Visión</a></li>
                            @endif
                            <li>{{ HTML::link('logout', 'Salir (' . Auth::user()->username . ')') }}</li>
                            <!-- se comenta esta parte por se se requiere mas adelante
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
        
                @yield('Contenido')
     
            <hr>

            <!--<footer>
                <p>
                <span style="text-align:left;float:left">&copy; Dr. Gerardo Contreras Herrera 2013</span>
                <span class="hidden-phone" style="text-align:right;float:right">Powered by: CocoaCode</span>
                </p>
            </footer>-->

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery-ui-1.10.0.custom.min.js"></script><!--para calendario en inputbox-->
        <script src="js/alertify.min.js"></script>
        <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.js"></script><!--Efecto modal para imagenes--> 
        <!--<script src="font/icomoon/lte-ie7.js"></script>-->
        @yield('Javascript')

    </body>
</html>