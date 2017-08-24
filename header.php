<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<?php require( get_stylesheet_directory() . '/files/header-favicon.php' ); ?>
  <?php // include (TEMPLATEPATH . '/files/favicon.php'); ?>
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
