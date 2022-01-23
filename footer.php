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
$footer_text = carspa_options('carspa_copyright_txt', 'Copyright &copy; 2022 <a href="#">DroitThemes</a> | All rights reserved');
$footer_id = '';

if ( isset( $post->ID) && function_exists('header_footer_template_id')) {
    $footer_id = header_footer_template_id('footer', $post->ID);
}

if ( $footer_id != '' && class_exists( '\Elementor\Plugin' ) ) {
    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $footer_id );
}else{ ?>
    <footer id="colophon" class="site-footer">
        <div class="site-info container">
            <?php echo carspa_kses($footer_text); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php }
 wp_footer(); ?>
</body>
</html>
