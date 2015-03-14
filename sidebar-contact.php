<?php
/**
 * The sidebar containing the contact sidebar widget area.
 *
 * @package bootville
 */

if ( ! is_active_sidebar( 'contact' ) ) {
	return;
}
?>
<?php 
// Sidebar Layout variable from Theme Options
$sidebarlayout = bvwp_option('sidebar_layout', '.left-sidebar'); ?>

<?php

if (bvwp_option('sidebar_layout') == '2') {
?>
   <div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
 <?php
} else {
?>
    <div id="secondary" class="widget-area col-md-3 col-lg-3 col-md-pull-9" role="complementary">
	
<?php
}
?>

	<div class="well">
		<?php dynamic_sidebar( 'contact' ); ?>
	</div>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->