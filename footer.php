	<footer class="jumbotron footer gradient-footer mb-0">
		<div class="row d-flex align-items-center">
			<div class="col">
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
			<div class="col">
				<p class="text-light text-right"><?php echo get_theme_mod('footer_copyrightContainer'); ?></p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>