<?php
/**
 * The template for displaying search results pages.
 *
 * @package bootville
 */

get_header(); ?>

<div class="container">
	<div class="row">
<?php 
// Sidebar Layout variable from Theme Options
	$sidebarlayout = bvwp_option('sidebar_layout', '.left-sidebar'); ?>
	<?php
	if (bvwp_option('sidebar_layout') == '2') {
		?>
		<div id="primary" class="col-lg-9 col-md-9">
			<?php
		} else {
			?>
			<div id="primary" class="col-lg-9 col-md-9 col-md-push-3">				
				<?php
			}
			?>
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootville' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php bootville_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
