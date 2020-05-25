	<footer class="jumbotron footer gradient-footer mb-0">
		<div class="row d-flex align-items-center">
			<!-- Contains navagation to blog entries -->
			<div class="col-md">
				<h4 class="text-white"><?php echo get_theme_mod('footer_navHeading'); ?></h4>
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container_class' => 'bottom-list'
						)
					);
				?>
			</div>
			<!-- Contains social media icons with links -->
			<div class="col-md">
				<h4 class="text-white"><?php echo get_theme_mod('footer_navHeading'); ?></h4>
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container_class' => 'bottom-list'
						)
					);
				?>
			</div>
		</div>
		<div class="row">
			<!-- Contains copyright info -->
			<div class="col-md">
				<p class="text-light text-center"><?php echo get_theme_mod('footer_copyrightContainer'); ?></p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>