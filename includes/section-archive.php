<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-4 d-flex">
		<div class="card align-self-center mb-4">
			<!-- Image of Card -->
			<?php if(has_post_thumbnail()): ?>
				<div class="card-header">
					<img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid">
				</div>
			<?php endif; ?>

			<div class="card-body">	
				<!-- Heading of the blog entry -->
				<h3><?php the_title(); ?></h3>
				<!-- Excerpt from the blog entry -->
				<?php the_excerpt();?>
				<!-- link to the blog entry -->
				<a href="<?php the_permalink(); ?>" class="btn btn-success">More</a>
			</div>	
		</div>
	</div>
<?php
	endwhile;
else:
	endif;
?>