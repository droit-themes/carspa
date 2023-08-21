<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carspa
 */

$footer_url = carspa_options('carspa_footer_background');
$is_defult_footer = carspa_options('is_defult_footer');
$footer_background_url = '';

if($footer_url && !empty($footer_url['url'])) {
    $footer_background_url = $footer_url['url'];
}

if(!class_exists('Redux')){
  $footer_background_url = '';
}

$footer_text = carspa_options('carspa_copyright_txt', 'Copyright &copy; 2023 <a href="#">DroitThemes</a> | All rights reserved');
$footer_id = '';

if ( isset( $post->ID) && function_exists('header_footer_template_id')) {
    $footer_id = header_footer_template_id('footer', $post->ID);
}

if ( $footer_id != '' && class_exists( '\Elementor\Plugin' ) ) {
    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $footer_id );
}else{ ?>

    <footer id="colophon" class="site-footer">
        <?php 
            if (is_active_sidebar('footer_widgets')):
        ?>
            <div class="container custom_container">
                <div class="row justify-content-between">
                    <?php dynamic_sidebar( 'footer_widgets' ); ?> 
                </div>
            </div>
        <?php endif; ?>
        <div class="site-info container">
            <?php echo wp_kses_post($footer_text); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php }
 wp_footer(); ?>
</body>
</html>
