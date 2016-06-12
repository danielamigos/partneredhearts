<?php /* Template Name: Dynamic Content Template */ get_header(); ?>
 
	<div class="row no-gutter">
		<div class="col-md-12 background-color-teal">
			<div class="dynamic-content-header">
				<img src="<?php echo get_template_directory_uri(); ?>/img/page-subheader.png" alt="Partnered Hearts"/>
				<h1 style="display:inline-block;">CONNECTING ARIZONA CAREGIVING PROFESSIONALS</h1>
			</div>
		</div>
	</div>  
	
	<?PHP  
	// check if the flexible content field has rows of data
    if( have_rows('dynamic_content') ): 
		while ( have_rows('dynamic_content') ) : 
			the_row();
			if( get_row_layout() == 'two_text_columns' ): ?>
			<div class="row no-gutter same-height-row">
				<div class="col-sm-6 <?PHP the_sub_field('left_column_background_color'); ?>">
					<div class="<?PHP the_sub_field('left_column_text_color'); ?> content-padding">
						<h2>
							<?PHP the_sub_field('left_column_title');?>
						</h2>
						<?PHP the_sub_field('left_column_content');?>					
					</div>
				</div>
				<div class="col-sm-6 <?PHP the_sub_field('right_column_background_color'); ?>">				
					<div class="<?PHP the_sub_field('right_column_text_color'); ?> content-padding">
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
			<?php  elseif(get_row_layout() == 'text_column_and_image_quote_column'): $image = get_sub_field('image'); $position =  get_sub_field('text_column_position'); ?>
			<div class="row no-gutter same-height-row">
				<?PHP if($position=="Right"): ?>
				<div class="col-sm-6">				
					<div class="font-color-white ">		
						<div class="left-image-quote-and-author-wrapper">
							<p class="left-image-quote font-family-fancy font-size-xxlarge"><?PHP the_sub_field('quote');?></p>
							<p class="left-image-quote-author font-size-medium"><?PHP the_sub_field('quote_author');?></p>
						</div>	
						<img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />	
					</div>
				</div>
				<?PHP endif;?>
				<div class="col-sm-6 ">
					<div class="font-color-gray text-column-content">
						<h2 class="font-color-teal">	
							<?PHP the_sub_field('text_column_title');?>
						</h2>
						<?PHP the_sub_field('text_column_content');?>					
					</div>
				</div>
				<?PHP if($position=="Left"): ?>
				<div class="col-sm-6">				
					<div class="font-color-white ">		
						<div class="right-image-quote-and-author-wrapper">
							<p class="right-image-quote font-family-fancy font-size-xxlarge"><?PHP the_sub_field('quote');?></p>
							<p class="right-image-quote-author font-size-medium"><?PHP the_sub_field('quote_author');?></p>
						</div>	
						<img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />	
					</div>
				</div>
				<?PHP endif;?>
			</div>		
			<?php  elseif(get_row_layout() == 'full_width_heading'): $backgroundColor = get_sub_field('background_color')?>					
			<div class="row no-gutter">
				<div class="col-md-12 <?PHP echo $backgroundColor; ?>">
					<div class="full_width_heading">
						<?PHP the_sub_field('heading_content');?>
					</div>
				</div>
			</div>			
			<?php  elseif(get_row_layout() == 'text_and_image_quote_column_and_form'): $image = get_sub_field('image')?>
			<div class="row no-gutter same-height-row">
				<div class="col-sm-6 <?PHP the_sub_field('text_and_image_background_color'); ?>">
					<div class="<?PHP the_sub_field('text_and_image_quote_text_color'); ?> content-padding">
						<h2>
							<?PHP the_sub_field('title');?>
						</h2>
						<?PHP the_sub_field('content');?>					
					</div>
					<div class="font-color-white ">		
						<div class="left-image-quote-and-author-wrapper">
							<p class="left-image-quote font-family-fancy font-size-xxlarge"><?PHP the_sub_field('quote');?></p>
							<p class="left-image-quote-author font-size-medium"><?PHP the_sub_field('quote_author');?></p>
						</div>	
						<img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />	
					</div>					
				</div>
				<div class="col-sm-6 <?PHP the_sub_field('form_background_color'); ?>">				
					<div class="content-padding">
						<?PHP echo do_shortcode(get_sub_field('form_short_code'));?>
					</div>
				</div>
			</div>		
			<?PHP endif; 
		endwhile;
	endif;?>			
<?php get_sidebar(); ?>

<?php get_footer(); ?>
