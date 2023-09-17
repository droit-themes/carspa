<?php
// Header Section
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Header', 'carspa' ),
    'id'               => 'carspa_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Header Settings', 'carspa' ),
    'id'               => 'carspa_header_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'       => 'is_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Sticky', 'carspa'),
            'options' => array(
                'yes' => esc_html__('Yes', 'carspa'), 
                'no' => esc_html__('No', 'carspa'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'       => 'carspa_header_layout',
            'type'     => 'image_select',
            'title'    => __('Header Layout', 'carspa'), 
            'subtitle' => __('Select your header layout', 'carspa'),
            'options'  => array(
                'container'      => array(
                    'alt'   => 'Container', 
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                'container-fluid'      => array(
                    'alt'   => 'Container-Fluid', 
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
            ),
            'default' => 'container'
        ),

        array(
            'id'       => 'is_header_bg_color',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Background', 'carspa'),
            'options' => array(
                'yes' => esc_html__('Yes', 'carspa'), 
                'no' => esc_html__('No', 'carspa'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__( 'Background Color Normal', 'carspa' ),
            'id'        => 'menu_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .navbar' ),
            'required'  => array( 'is_header_bg_color', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color Sticky', 'carspa' ),
            'id'        => 'menu_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header.sticky_nav.navbar_fixed .navbar' ),
        ),

        array(
            'title'     => esc_html__( 'Header Padding Normal', 'carspa' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'carspa' ),
            'id'        => 'header_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-header .navbar' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Header Padding Sticky', 'carspa' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'carspa' ),
            'id'        => 'header_padding_sticky',
            'type'      => 'spacing',
            'output'    => array( '.navbar_fixed .navbar .menu > .nav-item' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

    )
) );

// Logo
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Logo Setting', 'carspa' ),
    'id'               => 'carspa_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'carspa' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'carspa' ),
            'id'        => 'carspa_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => CARSPA_IMAGES.'/default_logo/logo.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'carspa' ),
            'id'        => 'carspa_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => CARSPA_IMAGES.'/default_logo/logo_sticky.png'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'carspa' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'carspa' ),
            'id'        => 'carspa_retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'carspa' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'carspa' ),
            'id'        => 'carspa_retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'carspa' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'carspa' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => 'img.site-logo'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'carspa' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'carspa' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( 'img.site-logo' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );


/**
 * Menu Settings
 */
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Header Button', 'carspa' ),
    'id'               => 'header_styling_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
            array(
                'id'       => 'is_menu_btn',
                'type'     => 'button_set',
                'title'    => esc_html__('Show Button', 'carspa'),
                'options' => array(
                    'yes' => esc_html__('Yes', 'carspa'), 
                    'no' => esc_html__('No', 'carspa'), 
                 ), 
                'default' => 'no'
            ),

            array(
                'title'     => esc_html__( 'Button label', 'carspa' ),
                'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'carspa' ),
                'id'        => 'menu_btn_label',
                'type'      => 'text',
                'default'   => esc_html__( 'Get Started', 'carspa' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            array(
                'title'     => esc_html__( 'Button URL', 'carspa' ),
                'id'        => 'menu_btn_url',
                'type'      => 'text',
                'default'   => '#',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'title'     => esc_html__( 'Button Target', 'carspa' ),
                'id'        => 'is_target_blank',
                'type'      => 'switch',
                'on'        => esc_html__( 'On', 'carspa' ),
                'off'       => esc_html__( 'Off', 'carspa' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'id'          => 'header_action_btn_typo',
                'type'        => 'typography',
                'title'       => __('Typography', 'carspa'),
                'google'      => true,
                'font-backup' => true,
                'color'       => false,
                'output'      => array('.btn_get'),
                'units'       => 'px',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            /**
             * Button colors
             * Style will apply on the Non sticky mode and sticky mode of the header
             */
            array(
                'title'     => esc_html__( 'Button Colors', 'carspa' ),
                'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'carspa' ),
                'id'        => 'button_colors',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
    
            array(
                'title'     => esc_html__( 'Font color', 'carspa' ),
                'id'        => 'menu_btn_font_color',
                'type'      => 'color',
                'output'    => array( '.nav_bar .btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Border Color', 'carspa' ),
                'id'        => 'menu_btn_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Background Color', 'carspa' ),
                'id'        => 'menu_btn_bg_color',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover Font Color', 'carspa' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'carspa' ),
                'id'        => 'menu_btn_hover_font_color',
                'type'      => 'color',
                'output'    => array( '.navbar .nav_bar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover Border Color', 'carspa' ),
                'id'        => 'menu_btn_hover_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'carspa' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'carspa' ),
                'id'        => 'menu_btn_hover_bg_color',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar .btn_get:hover',
                    'border-color' => '.navbar_fixed .navbar .btn_get:hover'
                ),
            ),
            array(
                'id'     => 'button_colors-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            /*
             * Button colors on sticky mode
             */
            array(
                'title'     => esc_html__( 'Sticky Button Style', 'carspa' ),
                'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'carspa' ),
                'id'        => 'button_colors_sticky',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
            array(
                'title'     => esc_html__( 'Border color', 'carspa' ),
                'id'        => 'menu_btn_border_color_sticky',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Font color', 'carspa' ),
                'id'        => 'menu_btn_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Background color', 'carspa' ),
                'id'        => 'menu_btn_bg_color_sticky',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.navbar_fixed .navbar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover font color', 'carspa' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'carspa' ),
                'id'        => 'menu_btn_hover_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.navbar_fixed .navbar .btn_get.btn-meta:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'carspa' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'carspa' ),
                'id'        => 'menu_btn_hover_bg_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
            array(
                'title'     => esc_html__( 'Hover border color', 'carspa' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'carspa' ),
                'id'        => 'menu_btn_hover_border_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'border-color' => '.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
    
            array(
                'id'     => 'button_colors-sticky-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            array(
                'title'     => esc_html__( 'Button padding', 'carspa' ),
                'subtitle'  => esc_html__( 'Padding around the menu action button.', 'carspa' ),
                'id'        => 'menu_btn_padding',
                'type'      => 'spacing',
                'output'    => array( '.btn_get' ),
                'mode'      => 'padding',
                'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),

    )
));
