<?php
/**
 * @package bootville
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
<div class="entry-meta">
		<?php if (bvwp_option('disable_meta') =='1') { ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bootville_posted_on(); ?>

				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'bootville' ) );
				if ( $categories_list && bootville_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<i class="fa fa-folder-o"></i> %1$s', 'bootville' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><i class="fa fa-comment-o"></i> <?php comments_popup_link( __( 'Leave a comment', 'bootville' ), __( '1 Comment', 'bootville' ), __( '% Comments', 'bootville' ) ); ?></span>
		<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php } ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- show small thumbnail with excerpts -->
	<?php if ( has_post_thumbnail() && bvwp_option('post_layout') == '0' )  { ?>
	
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail('thumbnail', 'class=alignleft'); ?>
	</a>
	 
	<?php
	} else {
	?>
		<!-- show full width image for full posts -->
	<?php if ( has_post_thumbnail() && bvwp_option('post_layout') == '1' ) { ?>
	
		<div class="featured-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('featured-large', 'class=alignnone'); ?>
			</a>
		</div>
		   
	<?php }	} ?>

		<!-- Post layout switch -->
	<?php if (bvwp_option('post_layout') == '1') { ?>
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bootville' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>
	<?php
	} else {
	?>
<?php custom_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bootville' ) ); ?>
	<?php }	?>
		<!-- end post layout switch -->
	
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bootville' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'bootville' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->