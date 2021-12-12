<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package carspa
 */

get_header();


$blog_sidebar = carspa_options('carspa_blog_setting');


?>

	<main id="primary" class="site-main">
		<?php
		
		get_template_part('template-parts/banner/banner-post', 'single');

		carspa_wrapper_start( $blog_sidebar );

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/blog/content/content', 'single');
			 
			// Display About auther 
			carspa_about_author();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		wp_reset_postdata(  );
		
		carspa_wrapper_end($blog_sidebar);
		?>
	</main><!-- #main -->

<?php

get_footer();
