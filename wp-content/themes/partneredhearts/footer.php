			</div><!-- /container -->
		</div><!--end wrap-->
		<!-- footer -->
		<footer class="footer" style="min-height:<?PHP the_field('footer_height','option'); ?>px; background-color:lightgray;">	
            <div class="container-fluid" style="min-height:<?PHP the_field('footer_height','option'); ?>px; background-color:#6D6E70;">   
                <div class="row">
                    <div class="col-sm-7 footer-top-padding">
                        <div class="sponser-logo footer-left-padding">OUR SPONSERS:</div>
						<?PHP while ( have_rows('sponsers', 'option') ) : the_row(); $image = get_sub_field('sponser_image'); $link = get_sub_field('sponser_link'); $name = get_sub_field('sponser_name'); ?>
						<div class="sponser-logo">
							<?PHP if (get_sub_field('sponser_link')!=''): ?>
							<a href="<?PHP echo $link; ?>" title="<?PHP echo $name; ?>" target="_blank"><img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $name; ?>"></a>				
							<?PHP else:?>								
							<img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $name; ?>" title="<?PHP echo $name; ?>">							
							<?PHP endif;?>
						</div>
						<?PHP endwhile; ?>
                    </div>
                    <div class="col-sm-5 footer-top-padding">
                        <div style="display:inline-block;" >
							<?PHP echo do_shortcode(get_field('footer_subscribe_contact_form','option')); ?>
                        </div>
                        <div style="float:right;" class="footer-align-right footer-right-padding">						
							<?PHP if (get_field('facebook_link','option')!=''): ?>
                            <a href="<?PHP the_field('facebook_link','option') ?>" class="footer-social-icon" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" /></a>						
							<?PHP endif; if (get_field('twitter_link','option')!=''): ?>
                            <a href="<?PHP the_field('twitter_link','option') ?>" class="footer-social-icon" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" /></a>						
							<?PHP  endif; if (get_field('linkedin_link','option')!=''): ?>
                            <a href="<?PHP the_field('linkedin_link','option') ?>" class="footer-social-icon" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" /></a>						
							<?PHP endif; ?>
                        </div>
                    </div>
                </div><!--End Row-->
            </div>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics 
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>-->

	</body>
</html>
