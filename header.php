<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">
  <!-- script type="text/javascript" src="<?php // bloginfo('template_url'); ?>/js/google.js"></script -->
  <?php require( get_stylesheet_directory() . '/files/header-favicon.php' ); ?>
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
					<div class="col-sm-12 col-md-8 col-lg-4 text-center">
						<?php get_template_part('template/header','contacto'); ?>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-4">
						<?php get_template_part('template/header','redes'); ?>
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
