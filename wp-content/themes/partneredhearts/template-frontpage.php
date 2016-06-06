<?php /* Template Name: FrontPage Template */ get_header(); ?>

		<div class="row no-gutter">
			<div class="col-md-12 frontpage-jumbotron-wrapper" style="background-color:light-pink">
				<div class="frontpage-jumbotron">
					<img src="<?PHP echo get_field('jumbotron_image')['url']; ?>" alt="Partnered Hearts" />
				</div>
			</div>
		</div>   
		<?PHP  
		// check if the flexible content field has rows of data
    if( have_rows('dynamic_content') ): while ( have_rows('dynamic_content') ) : the_row();

        if( get_row_layout() == 'two_text_columns' ): ?>
		<div class="row no-gutter same-height-row">
			<div class="col-sm-6 background-color-teal">
				<div class="font-color-white content-padding">
					<h2>
                        <?PHP the_sub_field('left_column_title');?>
					</h2>
					<?PHP the_sub_field('left_column_content');?>					
				</div>
			</div>
			<div class="col-sm-6 background-color-gray">				
				<div class="font-color-white content-padding">
					<h2>
                        <?PHP the_sub_field('right_column_title');?>
					</h2>
					<?PHP the_sub_field('right_column_content');?>
				</div>
			</div>
		</div>		
        <?php  elseif(get_row_layout() == 'full_width_image_and_quote'): $image = get_sub_field('image')?>
		<div class="row no-gutter same-height-row dynamic-content-full-width-image-and-quote">
			<div class="col-sm-12">
				<div class="full-width-image-and-quote font-color-white ">		
					<div class="full-width-image-quote-and-author-wrapper">
						<p class="full-width-image-quote font-family-fancy font-size-xxlarge"><?PHP the_sub_field('quote');?></p>
						<p class="full-width-image-quote-author font-size-medium"><?PHP the_sub_field('quote_author');?></p>
					</div>	
					<img class="full-width-image" src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />	
				</div>
			</div>			
		</div>		
		<?PHP endif; 
		endwhile;
		endif;?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
