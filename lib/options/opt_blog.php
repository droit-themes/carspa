<?php

Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Blog Settings', 'carspa' ),
	'id'        => 'blog_page',
	'icon'      => 'el el-lines',
));

// Blog Title Bar
Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Blog page Layout', 'carspa' ),
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
        'title'     => esc_html__( 'Post title length', 'carspa' ),
        'subtitle'  => esc_html__( 'Blog post title length in character', 'carspa' ),
        'id'        => 'post_title_length',
        'type'      => 'slider',
        'default'   => 10,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text',
    ),

    array(
        'title'     => esc_html__( 'Post word excerpt', 'carspa' ),
        'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'carspa' ),
        'id'        => 'blog_excerpt',
        'type'      => 'slider',
        'default'   => 40,
        "min"       => 1,
        "step"      => 1,
        "max"       => 500,
        'display_value' => 'text'
    ),

    array(
        'title'     => esc_html__( 'Post author', 'carspa' ),
        'id'        => 'is_post_author',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'carspa' ),
        'off'       => esc_html__( 'Hide', 'carspa' ),
        'default'   => 'Show',
    ),

    array(
        'title'     => esc_html__( 'Post date', 'carspa' ),
        'id'        => 'is_post_date',
        'type'      => 'switch',
        'on'        => esc_html__( 'Show', 'carspa' ),
        'off'       => esc_html__( 'Hide', 'carspa' ),
        'default'   => 'Show',
    ),
	)
));


/*** Headers Typography ***/
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Blog Single', 'saasland' ),
    'id'               => 'blog_single_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_display_blog_single_tags',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Post Tags', 'carspa'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'no'
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

        array( 
            'id' => 'carspa_social_title_text',
            'title'    => __('Shared Title', 'carspa'), 
            'type' => 'text',
            'default' => 'Shared'
        ),

        array(
            'id'       => 'is_social_share_links',
            'type'     => 'checkbox',
            'title'    => __('Checked Share Links', 'carspa'),
            'options'  => array(
                'facebook' => __('Facebook', 'carspa'),
                'twitter'  => __('Twitter', 'carspa'),
                'pinterest'=> __('Pinterest', 'carspa'),
                'linkedin' => __('Linkedin', 'carspa')
            ),
            'default' => array(
                'facebook'  => '1', 
                'twitter'   => '1', 
                'pinterest' => '0',
                'linkedin' => '1'
            ),
        ),

        array(
            'id'       => 'carspa_display_blog_comments',
            'type'     => 'button_set',
            'title'    => esc_html__('Display Comments Section', 'carspa'),
            'options' => array(
                'yes' => 'Yes', 
                'no' => 'No', 
             ), 
            'default' => 'yes'
        ),

    )
));







