<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bootville
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<?php 
// Sidebar Layout variable from Theme Options
$sidebarlayout = bvwp_option('sidebar_layout', '.left-sidebar'); ?>

<?php

if (bvwp_option('sidebar_layout') == '2') {
?>
   <div id="secondary" class="widget-area col-md-4 col-lg-4" role="complementary">
 <?php
} else {
?>
    <div id="secondary" class="widget-area col-md-4 col-lg-4 col-md-pull-8" role="complementary">
	
<?php
}
?>

	<div class="welllll">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .well -->
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->
