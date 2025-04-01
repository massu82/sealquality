<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" description=""/>
  <link href="//www.google-analytics.com" rel="dns-prefetch">

  <!-- compatilibdad con webapp iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php wp_title(''); ?>">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/apple.png">

  <!-- compatilibdad con webapp Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#333333">
  <meta name="application-name" content="<?php wp_title(''); ?>">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon/android.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/logo.ico" />

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?>
  <?php bloginfo('name'); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet"> 
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo get_stylesheet_directory_uri(); ?>/css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">


  <script>
    conditionizr.config({
      assets: '<?php echo get_template_directory_uri(); ?>',
      tests: {}
    });
  </script>
</head><!--/head-->
<body <?php body_class(); ?>>

  <!--.preloader-->
  <!-- <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div> -->
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""><br> SOMOS UNA EMPRESA<span> 100% MEXICANA</span>
            </h1>
            <p class="animated fadeInRightBig">ENFOCADA A LA CONTINUIDAD DE PROCESOS</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact"> CONTÁCTANOS</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""><br> SOMOS UNA EMPRESA <span> LIDER INTERNACIONAL </span>
            </h1>
            <p class="animated fadeInRightBig">EN CUANTO A DESARROLLO Y SUMINISTRO DE TECNOLOGÍAS.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact"> CONTÁCTANOS</a>
          </div>
        </div>
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""><br> DESARROLLAMOS PRODUCTOS <span>O SERVICIOS CAPACES DE GENERAR VENTAJAS </span>
            </h1>
            <p class="animated fadeInRightBig">ADMINISTRATIVAS A NUESTROS CLIENTES.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact"> CONTÁCTANOS</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <h1><img class="logotipo" src="<?php echo get_template_directory_uri(); ?>/images/logo_nuevo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#services">Nosotros</a></li> 
            <li class="scroll"><a href="#productos">Productos</a></li>
            <li class="scroll"><a href="#portfolio">Industria</a></li>
            <li class="scroll"><a href="#servicios">Servicios</a></li>
            <li class="scroll"><a href="#twitter">Programas</a></li>
            <li class="scroll"><a href="#contact">Contacto</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->


