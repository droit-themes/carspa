<?php 


require CARSPA_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require CARSPA_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require CARSPA_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * carspa helper 
 */
require CARSPA_THEMEROOT_DIR . '/inc/helper.php';

/**
 * carspa comment area
*/
require CARSPA_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * carspa nav walker
*/
require CARSPA_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require CARSPA_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * carspa Enqueue 
 */

require CARSPA_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * carspa Admin Enqueue 
 */

require CARSPA_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * carspa breadcrumbs
 */

require CARSPA_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * carspa Tgm
 */
require CARSPA_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * One Click Demo Import
 */
require CARSPA_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require CARSPA_THEMEROOT_DIR . '/inc/jetpack.php';
}
