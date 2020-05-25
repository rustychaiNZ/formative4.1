<!-- Gets special header for blog -->
<?php get_header('primary'); ?>

<!-- Basic page layout for all future created pages -->
<div class="container py-3">
	<h2 class="py-2"><?php single_cat_title(); ?></h2>
	<div class="row">
		<?php get_template_part('includes/section','archive'); ?>
	</div>
	<div class="row pl-3">
		<?php previous_posts_link();  ?>
   		<?php next_posts_link();  ?>
	</div>
</div>

<?php get_footer('primary'); ?>