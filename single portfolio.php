<?php
/**
 * The template for displaying all single portfolio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-portfolio
 *
 * @package topname
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content2', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
