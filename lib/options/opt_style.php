<?php
// Header Section

Redux::setSection( 'carspa', array(
    'title'            => esc_html__( 'Theme Color', 'carspa' ),
    'id'               => 'carspa_color_opt',
    'icon'             => 'el el-lines',
    'fields'           => array(
      
        array(
            'id'       => 'carspa_primary_color',
            'type'     => 'color',
            'title'    => __('Primary Color', 'carspa'), 
            'desc'     => __('Primary color work at all Headding tag Color', 'carspa'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .blog_title a, .widget-title')
        ),
        
        array(
            'id'       => 'carspa_secondary_color',
            'type'     => 'color',
            'title'    => __('Secondary Color', 'carspa'), 
            'desc'     => __('Secondary color work at Blog Title , Page Title , Widget Title & Comment area title', 'carspa'), 
            'validate' => 'color',
            'output'   => array(
               'color'              => '.text-white .post-meta, .text-white .post-meta a, h1.page_title.banne-blog, .media_blog_content .post_bottom, .blog_title a, .widget-area h2, .comment-reply-title, .comments-title, .comment_box .comments_item .content h4', 
               'background-color'   => '.site-footer, .pagination .page-numbers.current, ,.menu > .nav-item > .nav-link:before, .featured_post',
               'border-color'       => '.site-footer, .pagination .page-numbers.current'
            )
        ), 
        
        array(
            'id'       => 'carspa_body_color',
            'type'     => 'color',
            'title'    => __('Body Color', 'carspa'),
            'desc'     => __('Body color work at Body color , Sideber ul-li, Comment content', 'carspa'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('body, .post-meta, .widget_rss ul li .rssSummary, .media_blog_content .post_bottom, .comment_box .comments_item .content p')
        ),

        array(
            'id'       => 'carspa_link_color',
            'type'     => 'color',
            'title'    => __('Link Color', 'carspa'),
            'desc'     => __('Link color work at All Link Color Without Menu Section', 'carspa'), 
            'validate' => 'color',
            'mode'     => 'color',
            'output'   => array('a, .media_blog_content .post_bottom .learn_btn_two, .widget ul > li a, .widget a, .post-meta a, a.comment_link')
        ),

        array(
            'id'       => 'carspa_link_hover_color',
            'type'     => 'color',
            'title'    => __('Link Hover Color', 'carspa'),
            'desc'     => __('Link color work at All type Hover Color Without Menu Section', 'carspa'),
            'validate' => 'color',
            'output'   => array(
               'color'              => 'a:hover, a:hover, a:focus, a:active, h2 a:hover, .widget_categories ul li a:hover,.menu > .nav-item:hover, .learn_btn_two:hover, .widget ul > li:hover > a, .widget a:hover, .post-meta a:hover, .media_blog_content .post_bottom .learn_btn_two:hover', 
               'background-color'   => '.page-numbers.prev:hover, .pagination .page-numbers:hover, .pagination .page-numbers.prev:hover , .pagination .page-numbers.next:hover',
               'border-color'       => '.page-numbers:hover, .pagination .page-numbers.prev:hover, .pagination .page-numbers.next:hover'
            )
        ),        
    )
) );


