<?php 
/**
 * Enqueue scripts and styles.
 */
 
function carspa_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    if ( 'off' !== 'on' ) {
        $fonts[] = "Rubik:200,300,400,500,600,700,800,900";
    }

    $is_ssl = is_ssl() ? 'https' : 'http';

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), "$is_ssl://fonts.googleapis.com/css" );
    }

    return $fonts_url;
}

/**
     * Enqueueing Stylesheets
     */
	$opt = get_option('carspa');
    $font_load = 1;
    if ( class_exists('Redux') ) {
        $font_load = !empty( $opt['is_default_font'] ) ? 1 : '';
    }
    if ( $font_load == 1 ) {
        wp_enqueue_style( 'carspafonts' );
    }


function carspa_scripts() {
    wp_enqueue_style('carspafonts', carspa_fonts_url(), array(), null);

    
	wp_enqueue_style( 'carspa-style', get_stylesheet_uri(), array(), CARSPA_VERSION );
	wp_style_add_data( 'carspa-style', 'rtl', 'replace' );
	wp_enqueue_style( 'mediaelementplayer', CARSPA_CSS.'/mediaelementplayer.css', array( 'carspa-style' ), CARSPA_VERSION );
	wp_enqueue_style( 'carspa_fontawesome', CARSPA_CSS.'/all.min.css', array( 'carspa-style' ), CARSPA_VERSION );
    wp_enqueue_style( 'themify_icon', CARSPA_CSS.'/themify-icons.css', array( 'carspa-style' ), CARSPA_VERSION );
	wp_enqueue_style( 'carspa_icon_moon', CARSPA_CSS.'/icon-moon.css', array( 'carspa-style' ), CARSPA_VERSION );

	wp_enqueue_style( 'carspastylemain', get_theme_file_uri('/assets/css/style.css'), array(), CARSPA_VERSION );
	wp_enqueue_style( 'stylecarspa', get_theme_file_uri('/assets/css/style-carspa.css'), array(), CARSPA_VERSION );
    wp_enqueue_style( 'carspa_woocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), CARSPA_VERSION );

   //  Enqueue script   
	wp_enqueue_script( 'mediaelement-and-player', CARSPA_JS. '/mediaelement-and-player.min.js', array('jquery'), CARSPA_VERSION, true );
	wp_enqueue_script( 'parallaxie', CARSPA_JS. '/parallaxie.js', array('jquery'), CARSPA_VERSION, true );
	wp_enqueue_script( 'carspamain', CARSPA_JS . '/main.js', array('jquery'), CARSPA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


    wp_deregister_style('extendify-utilities');


    $dynamic_css = '';
   
    
    $opt = get_option('carspa');

    if ( !empty($opt['mobile_menu_dropdown_bg']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar .navbar-collapse{
                    background: {$opt['mobile_menu_dropdown_bg']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_font_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .nav-link, .menu > .nav-item.mega_menu{
                    color: {$opt['mobile_menu_font_color']} !important;
                }
            }";
    }

    if ( !empty($opt['mobile_menu_hover_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item.active .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
                .menu > .nav-item.hover .nav-link{
                    color: {$opt['mobile_menu_hover_color']} !important;
                }
            }";
    }


    if ( !empty($opt['mobile_menu_dropdown_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .menu > .nav-item .mobile_dropdown_icon{
                    color: {$opt['mobile_menu_dropdown_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color']} !important;
                }
            }";
    }

    if ( !empty($opt['hamburger_menu_icon_color_sticky']) ) {
        $dynamic_css .= "
            @media (max-width: 991px) {
                .navbar_fixed .navbar-toggler span{
                    background: {$opt['hamburger_menu_icon_color_sticky']} !important;
                }
            }";
    }


    wp_add_inline_style( 'carspa-style', $dynamic_css );

}
add_action( 'wp_enqueue_scripts', 'carspa_scripts' );