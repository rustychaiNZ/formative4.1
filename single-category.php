<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="container pt-3">
	<div class="row">
		<div class="col-xl-3 widget">
			<h4>Search Options</h4>
			<?php if(is_active_sidebar('store-sidebar')) :?>
			<?php dynamic_sidebar('store-sidebar'); ?>
			<?php endif; ?>
		</div>
		<div class="col-xl-9">
			<h2><?php the_title(); ?></h2>
			<hr>
			<?php get_template_part('includes/section','content');?>
		</div>
	</div>

</div>
<div class="col-lg-3 mt-5 pt-5 pl-4 widget">

 

      <?php if(is_active_sidebar('page-sidebar')) :?>
        <?php dynamic_sidebar('page-sidebar'); ?>
      <?php endif; ?>
    </div>
<?php get_footer(); ?>