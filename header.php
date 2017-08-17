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
	<div class="container">
		<div class="ca-cabecera">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-8 col-lg-4">
					<?php get_template_part('template/header','logo'); ?>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-4">
					<?php get_template_part('template/header','contacto'); ?>
				</div>
				<div class="col-sm-12 col-md-8 col-lg-4">
					<?php get_template_part('template/header','redes'); ?>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="contenido_menu">
		<nav id="navegacion" class="navegando">
			<?php  showMenu();  ?>
		</nav>
	</div>
</div>
