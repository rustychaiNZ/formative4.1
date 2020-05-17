	<footer class="jumbotron footer gradient-footer mb-0">
		<div class="row d-flex align-items-center">
			<div class="col">
				<h4 class="text-white">Latest News/Updates</h4>
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
				<p class="text-light text-right">© 2010 Nurses for Smokefree Aotearoa. All rights reserved.</p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
</html>