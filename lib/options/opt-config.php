<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'carspa';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Carspa Options', 'carspa' ),
        'customizer'           => true,
		'dev_mode'             => false
    );

    Redux::setArgs( $opt_name, $args );

	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_header.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_banner.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_banner_search.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_banner_404.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_blog.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_page.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_style.php';
	require CARSPA_THEMEROOT_DIR . '/lib/options/opt_footer.php';
