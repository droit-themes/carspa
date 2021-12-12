<?php

Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Blog', 'carspa' ),
	'id'        => 'blog_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// Blog Title Bar
Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Layout', 'carspa' ),
	'id'        => 'blog_titlebar_settings',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
    array(
        'id'       => 'carspa_blog_setting',
        'type'     => 'image_select',
        'title'    => __('Blog Layout', 'carspa'), 
        'subtitle' => __('Select your blog Layout', 'carspa'),
        'options'  => array(
            'full'      => array(
                'alt'   => '1 Column', 
                'img'   => ReduxFramework::$_url.'assets/img/1col.png'
            ),
            'left'      => array(
                'alt'   => '2 Column Left', 
                'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
            ),
            'right'      => array(
                'alt'   => '2 Column Right', 
                'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
            ),
        ),
        'default' => 'right'
    ),
    array( 
        'id' => 'carspa_read_more_text_button',
        'title'    => __('Read More Button Text', 'carspa'), 
        'type' => 'text',
        'default' => 'Read More'
    ),

    array(
    'id'       => 'carspa_display_blog_share',
    'type'     => 'button_set',
    'title'    => esc_html__('Display Social Share?', 'carspa'),
    'options' => array(
        'yes' => 'Yes', 
        'no' => 'No', 
     ), 
    'default' => 'no'
    ),

	)
));

