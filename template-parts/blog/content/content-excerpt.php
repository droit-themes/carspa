<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage carspa
 * @since carspa 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post_item zoom_in_effect'); ?>>

    <?php 
        get_template_part( 'template-parts/header/excerpt-header', get_post_format() );
    ?>

	<div class="entry-content media_blog_content">
        <?php
            if(is_sticky()) {
                printf('<span class="featured_post">%s</span>', esc_html__('Featured', 'carspa'));
            }
        ?>
        <div class="post-title entry-title">
            <div class="post-meta">
            <?php 
            carspa_posted_on();
            carspa_posted_by();
            ?>
            </div>
            <?php   the_title( sprintf( ' <h2 class="entry-title blog_title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </div>


		<?php get_template_part( 'template-parts/blog/excerpt/excerpt', get_post_format() ); ?>
        <div class="post-footer">
        <?php carspa_entry_meta_footer(); ?>  
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-${ID} -->