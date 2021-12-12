<?php

Redux::set_section('carspa', array(
    'title'            => esc_html__( 'Banner Setting', 'carspa' ),
    'id'               => 'headers_typo_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('carspa', array(
    'title'            => esc_html__( 'Page Banner', 'carspa' ),
    'id'               => 'Banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_page_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Banner', 'carspa'),
            'subtitle' => esc_html__('Show Hide Page Banner Globally ', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'carspa'), 
                'hide' => esc_html__('Hide Banner', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_page_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Breadcrumb', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_page_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Page Title', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_page_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> carspa_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'carspa_page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Blog Banner 

Redux::set_section('carspa', array(
    'title'            => esc_html__( 'Blog Banner', 'carspa' ),
    'id'               => 'blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Banner', 'carspa'),
            'subtitle' => esc_html__('Show Hide Blog Banner Globally ', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'carspa'), 
                'hide' => esc_html__('Hide Banner', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Breadcrumb', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Blog Title', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array( 
        'title'    => esc_html__('Blog title', 'carspa'),
        'id' => 'carspa_blog_title',
        'type' => 'text',
         'required' => array('carspa_blog_banner_title', '=' , 'show')
        ),
        array(
            'id'       => 'carspa_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> carspa_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'carspa_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

// Single page blog 


Redux::set_section('carspa', array(
    'title'            => esc_html__( 'Single Blog Banner', 'carspa' ),
    'id'               => 'single_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_single_blog_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Single Blog Banner', 'carspa'),
            'subtitle' => esc_html__('Show Hide Banner Globally ', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'carspa'), 
                'hide' => esc_html__('Hide Banner', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_single_blog_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_single_blog_banner_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_single_blog_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> carspa_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'carspas_single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  Archive page 

Redux::set_section('carspa', array(
    'title'            => esc_html__( 'Archive Banner', 'carspa' ),
    'id'               => 'archive_blog_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_arcive_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive  Banner', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'carspa'), 
                'hide' => esc_html__('Hide Banner', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_archive_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_arcive_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Title', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_arcive_description',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Archive Description', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_archive_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> carspa_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'carspas_archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));

//  search page 

