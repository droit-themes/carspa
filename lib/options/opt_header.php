<?php
// Header Section
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Header', 'carspa' ),
    'id'               => 'carspa_header_sec',
    'customizer_width' => '400px',
    'icon'             => 'el el-arrow-up',
));


// Logo
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Logo', 'carspa' ),
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
                'url'   => CARSPA_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'carspa' ),
            'id'        => 'carspa_sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => CARSPA_IMAGES.'/default_logo/logo_sticky.svg'
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
            'output'    => '.logo_info .navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'carspa' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'carspa' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );

Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Menu Setting', 'carspa' ),
    'id'               => 'carspa_menu_setting',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
         array(
            'id'       => 'carspa_searchicon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', 'carspa'),
            'options' => array(
                'yes' => esc_html__('Yes', 'carspa'), 
                'no' => esc_html__('No', 'carspa'), 
             ), 
            'default' => 'yes'
        )

    )
));