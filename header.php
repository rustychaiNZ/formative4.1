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
	<!-- parent container to the nav bar -->
	<nav class="navbar navbar-expand-md top-bar" role="navigation">
		<div class="">
		<!-- Allows user to toggle the drop down -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Dynamically creates menu -->
			<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'depth' => 2,
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'bs-example-navbar-collapse-1',
						'menu_class' => 'navbar-nav mr-auto',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div>
	</nav>