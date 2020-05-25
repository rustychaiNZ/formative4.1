<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header class="mt-0">


		<!-- Header background -->
		<?php if(has_header_image()): ?>
			<div class="container-fluid">
				<div class="row">
					<div class="header-image" style="background-image:url(<?php echo get_header_image(); ?>);">
						<div class="row">
							<div class="col bg-light rounded-pill shadow">
								<h1 class="display-2 text-center"><?php bloginfo(); ?></h1>
								<p class="text-dark text-center tagline"><?php bloginfo( 'description' ); ?></p>	
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>
		<?php if(!has_header_image()):?>
			<div class="jumbotron gradient-head mb-0">
				<h1 class="display-2 text-center"><?php bloginfo(); ?></h1>
				<p class="text-dark text-center tagline"><?php bloginfo( 'description' ); ?></p>
			</div>
		<?php endif; ?>

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