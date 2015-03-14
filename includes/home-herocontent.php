<?php
/**
 * File used for homepage hero content module
 *
 * @package WordPress
 */
?>


<div class="jumbotron">
	<div class="row">
		<div class="col-lg-6">
			<?php if(bvwp_option('featured_heading') != '') { ?>
			<h1> <?php echo bvwp_option('featured_heading'); ?> </h1>
			<?php } ?>

			<?php if(bvwp_option('featured_content') != '') { ?>
			<p><?php echo bvwp_option('featured_content'); ?> </p>
			<?php } ?>

			<?php 
			$btn_text = bvwp_option('featured_btn_text', '');
			$btn_size = 'btn-'.bvwp_option('featured_btn_size', '');
			$btn_color = 'btn-'.bvwp_option('featured_btn_color', '');
			$btn_url = bvwp_option('featured_btn_url', '');

			if (bvwp_option('featured_btn_block') == '1' ){
				$btn_block = "btn-block";
			}

			?>

			<?php if (bvwp_option('featured_btn') == '1' ){	?>	      
		    <p><a href="<?php echo $btn_url; ?>" target="_self" class="btn <?php echo $btn_color .' '. $btn_size .' '. $btn_block; ?>" role="button"><?php echo $btn_text; ?></a></p>
		    <?php } ?>

		</div>
		<div class="col-lg-6">
			<?php if(bvwp_option('right_featured') != '') { 
				echo bvwp_option('right_featured');
			} ?>
		</div>
	</div>  
</div>