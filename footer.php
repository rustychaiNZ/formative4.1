	<footer class="jumbotron footer gradient-footer mb-0">
		<div class="row d-flex align-items-center">
			<!-- Contains navagation to blog entries -->
			<div class="col-sm">
				<h4 class="footer-heading-color"><?php echo get_theme_mod('footer_navHeading'); ?></h4>
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
			<div class="col-sm right-sm-center">
				<h4 class="footer-heading-color"><?php echo get_theme_mod('footer_socialMedia'); ?></h4>
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'social-menu',
							'container' => 'div',
							'container_class' => 'social-list',
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
	<script src="https://use.fontawesome.com/4767738c46.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>