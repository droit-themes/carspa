<?php

Redux::setSection('carspa', array(
    'title'     => esc_html__('404 Page Settings', 'carspa'),
    'id'        => '404_0pt',
    'icon'      => 'el el-lines',
    'fields'    => array(

        array(
            'title'     => esc_html__('Heading Text', 'carspa'),
            'id'        => 'error_heading',
            'type'      => 'text',
            'default'   => esc_html__("404", 'carspa'),
        ),

        array(
            'title'     => esc_html__('Title', 'carspa'),
            'id'        => 'error_title',
            'type'      => 'text',
            'default'   => esc_html__('Page not found', 'carspa'),
        ),

        array(
            'title'     => esc_html__('Subtitle', 'carspa'),
            'id'        => 'error_subtitle',
            'type'      => 'textarea',
            'default'   => esc_html__('We are sorry, the page you have looked for does not exist in our database! Maybe go to our home page or try to use a search?', 'carspa'),
        ),

        array(
            'title'     => esc_html__('Home button label', 'carspa'),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__('Go Back to home Page', 'carspa'),
            
        ),

        array(
            'id'          => 'btn_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Color', 'carspa' ),
            'output'      => array(
                'color' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_font_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Text Hover Color', 'carspa' ),
            'output'      => array(
                'color' => '.error_btn:hover',
            ),
        ),

        array(
            'id'          => 'btn_bg_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Color', 'carspa' ),
            'output'      => array(
                'background' => '.error_btn',
            ),
        ),

        array(
            'id'          => 'btn_bg_color_hover',
            'type'        => 'color',
            'title'       => esc_html__( 'Button Background Hover Color', 'carspa' ),
            'output'      => array(
                'background' => '.error_btn:hover',
            ),
        ),
        array(
            'id'          => 'page_bg_color',
            'type'        => 'background-color',
            'title'       => esc_html__( 'Page Background Color', 'carspa' ),
            'output'    => array(
                'background' => '.error_section',
            ),
            'type'      => 'color',
        ),

    )
));
