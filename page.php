<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="container pt-3">
	<h2><?php the_title(); ?></h2>
	<hr>
	<?php get_template_part('includes/section','content');?>

</div>

<?php get_footer(); ?>