<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/google.js"></script>
<!--  File from realfavicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/safari-pinned-tab.svg" color="#0c8f87">
<meta name="theme-color" content="#0c8f87">


	<?php wp_head(); ?>


</head>
<body>
	
<header>
	<div class="ca-cabecera">
		<div class="container">
			<div class="row">
				<div class="ml col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="ca-logo-slogan">
						<a class="logo-link" href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Canal Arquidiocesano"></a>
					</div>			
				</div>
				<div class="mr col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<div class="ca-search-followers">
						<div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
						<div class="cuadro-redes">
							<a class="icon-facebook fb fa fa-facebook" href="https://www.facebook.com/masportusprendas/"></a>
							<a class="icon-twitter tw fa fa-twitter" href="#"></a>
							<a class="icon-youtube2 yt fa fa-youtube" href="#"></a>
						</div>			
					</div>			
				</div>
			</div>
		</div>
	</div>
</header>

<div class="contenido_menu">
	<nav id="navegacion" class="navegando">
		<?php  showMenu();  ?>
	</nav>
</div>
