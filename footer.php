<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootville
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-widgets widget-area row">
				<div class="col-lg-4 col-md-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>

				<div class="col-lg-4 col-md-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>

				<div class="col-lg-4 col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div><!--row-->
	
			<div class="row">
				<div class="footer-menu">
						<div class="col-lg-12 col-md-12">
							<?php if (has_nav_menu('footer-menu', 'bootville')) { ?>
								<nav role="navigation">
								<?php wp_nav_menu(array(
								  'container'       => '',
								  'menu_class'      => 'footer-menu',
								  'theme_location'  => 'footer-menu')
								); 
								?>
							  </nav>
							<?php } ?>
						</div>
					</div><!-- .footer-menu-->
			</div><!-- .row -->	
		
		<div class="row"><!-- powered by and credits -->
			<div class="credits">
				<div class="col-md-6 col-lg-6 col-lg-push-6">
					<?php if (bvwp_option('custom_copyright') != '') { ?>
					<div class="copyright">
						<?php echo bvwp_option('custom_copyright'); ?>
					</div>
					<?php } ?>				
				</div>
				
				<div class="col-md-6 col-lg-6 col-lg-pull-6">
					<?php if (bvwp_option('custom_power') != '') { ?>
					<div class="poweredby">
						<?php echo bvwp_option('custom_power'); ?>
					</div>
					<?php } ?>	
				</div>
			</div><!-- .credits -->
		</div><!-- .row -->
		
	</footer><!-- #colophon -->
</div><!-- #wrap -->

<?php wp_footer(); ?>

</body>
</html>