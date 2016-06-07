			</div><!-- /container -->
		</div><!--end wrap-->
		<!-- footer -->
		<footer class="footer" style="min-height:<?PHP the_field('footer_height','option'); ?>px; background-color:lightgray;">	
            <div class="container-fluid background-color-dark-gray" style="min-height:<?PHP the_field('footer_height','option'); ?>px;">   
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            Footer
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
