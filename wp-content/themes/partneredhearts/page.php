<?php get_header(); ?>

	<div class="row no-gutter">
		<div class="col-md-12 background-color-teal">
			<div class="dynamic-content-header">
				<img src="<?php echo get_template_directory_uri(); ?>/img/page-subheader.png" alt="Partnered Hearts"/>
				<h1 style="display:inline-block;">CONNECTING ARIZONA CAREGIVING PROFESSIONALS</h1>
			</div>
		</div>
	</div>

	<div class="row no-gutter" style="min-height:75vh">
		<div class="col-sm-12">
			<div class="white-background-text content-padding">	
				<h2><?php the_title(); ?></h2>
				<div>		
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php else: ?>
							<h2><?php _e( 'Sorry, nothing to display.', 'partneredhearts' ); ?></h2>
					<?php endif; ?>
				</div>
			</div>
		</div>			
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
