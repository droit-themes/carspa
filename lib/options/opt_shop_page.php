<?php

Redux::setSection('carspa', array(
    'title'     => esc_html__('Shop page', 'carspa'),
    'id'        => 'shop_0pt',
    'icon'      => 'el el-lines',
    'fields'    => array(

        array( 
            'title'    => esc_html__('Shop Page Title', 'carspa'),
            'id' => 'carspa_shop_title',
            'type' => 'text',
            'default'   => esc_html__('Shop Page', 'carspa'),
        ),

        array(
            'id'       => 'carspa_shop_breadcrumbs',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Breadcrumbs', 'carspa'),
            'options' => array(
                'yes' => esc_html__('Yes', 'carspa'), 
                'no' => esc_html__('No', 'carspa'), 
             ), 
            'default' => 'yes'
            ),

        array(
            'id'       => 'carspa_shop_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'carspa'),
            'default'  => array(
                'url'=> CARSPA_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'url'      => false
        ),

        array(
            'id'        => 'carspa_shop_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog-breadcrumbs-area-two.shop_page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),                        
        ),
    )
));
