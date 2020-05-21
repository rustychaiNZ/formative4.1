<?php get_header('frontpage'); ?>

<div class="container py-3">
	<h2 class="py-2"><?php the_title(); ?></h2>
	<?php get_template_part('includes/section','content');?>

</div>

<?php get_footer(); ?>