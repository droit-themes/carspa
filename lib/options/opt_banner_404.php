<?php 
Redux::set_section('carspa', array(
    'title'            => esc_html__( '404 Banner', 'carspa' ),
    'id'               => 'carspa_404_banner',
    'icon'             => 'el el-cog',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'       => 'carspa_404_banner_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show 404  Banner', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show Banner', 'carspa'), 
                'hide' => esc_html__('Hide Banner', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_404_title',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Title', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'title'    => esc_html__('404 Banner Titile', 'carspa'),
            'type' => 'text',
            'id'       => 'carspa_404_banner_title',
            'placeholder' => esc_html__( '404 Banner Titile', 'carspa'),
            'required'    => array('carspa_404_title', '=', 'show')
        ),
        array(
            'id'       => 'carspa_404_banner_breadcrumb',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumb', 'carspa'),
            'options' => array(
                'show' => esc_html__('Show', 'carspa'), 
                'hide' => esc_html__('Hide', 'carspa'), 
            ), 
            'default' => 'show'
        ),
        array(
            'id'       => 'carspa_404_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'carspas_404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
      )
));