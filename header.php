<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header class="mt-0 gradient-head d-flex align-items-center">
		<div class="m-auto">
			<h1 class="display-4 text-center"><?php bloginfo(); ?></h1>
			<p class="text-dark text-center tagline"><?php bloginfo( 'description' ); ?></p>
		</div>
	</header>
	<?php 
		wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
				'container_class' => 'top-bar',
				'container' => 'nav'
			)
		);
	?>