<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparch
 */

get_header();
$page_sidebar = carspa_options('carspa_page_setting');
?>
	<main id="primary" class="site-main">
	<?php get_template_part('template-parts/banner/banner-woo', 'woo'); ?>
		<div class="container woo">
        	<div class="row justify-content-center">
				<?php   woocommerce_content(); ?>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
