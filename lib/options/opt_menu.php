<?php

// Navbar styling
Redux::setSection('carspa', array(
    'title'            => esc_html__( 'Menu Settings', 'carspa' ),
    'id'               => 'menu_opt',
    'icon'             => 'el el-lines',
    'fields'           => array(
        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color', 'carspa'),
            'id'        => 'menu_bar_bg_color',
            'output'    => array(
                'background' => '.site-header .navbar',
            ),
            'type'      => 'color',
        ),

        array(
            'id'          => 'menu_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'carspa'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.menu > .nav-item > .nav-link'),
            'units'       => 'px',
        ),

        array(
            'id'          => 'menu_submenu_typo',
            'type'        => 'typography',
            'title'       => __('Submenu Typography', 'carspa'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.menu > .nav-item.submenu .dropdown-menu .nav-item'),
            'units'       => 'px',
        ),


        array(
            'title'     => esc_html__('Menu Item Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color', 'carspa'),
            'id'        => 'menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Menu Hover Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'carspa'),
            'id'        => 'menu_hover_active_font_color',
            'output'    => array(
                'color'     => '.menu > .nav-item.active .nav-link, .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Menu Active/Hover Bar Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item Active/Hover Bar Color mode', 'carspa'),
            'id'        => 'menu_hover_active_bar_color',
            'output'    => array(
                'background'     => '.menu > .nav-item > .nav-link:before',
            ),
            'type'      => 'color',
        ),
        

        // Sticky menu settings section
        array(
            'id' => 'sticky_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sticky menu settings', 'carspa'),
            'subtitle' => esc_html__('The following settings will only apply on the sticky header mode..', 'carspa'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Bar Backgound Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color', 'carspa'),
            'id'        => 'stick_menu_bar_bg_color',
            'output'    => array(
                'background' => '.site-header.sticky_nav.navbar_fixed .navbar',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'carspa'),
            'id'        => 'sticky_menu_font_color',
            'output'    => array(
                'color' => '.navbar_fixed .menu > .nav-item > .nav-link',
            ),
            'type'      => 'color',
        ),
        
        array(
            'title'     => esc_html__('Menu Hover Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item Hover font color on header sticky mode', 'carspa'),
            'id'        => 'menu_sticky_active_font_color',
            'output'    => array(
                'color'     => '.navbar_fixed .menu > .nav-item.active .nav-link, .navbar_fixed .menu > .nav-item:hover .nav-link',
            ),
            'type'      => 'color',
        ),
        array(
            'id'     => 'submenu_end',
            'type'   => 'section',
            'indent' => false,
        ),

        array(
            'title'     => esc_html__('Menu item margin', 'carspa'),
            'subtitle'  => esc_html__('Margin around menu item.', 'carspa'),
            'id'        => 'menu_item_margin',
            'type'      => 'spacing',
            'output'    => array( '.menu > .nav-item' ),
            'mode'      => 'margin',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),


        // Sub menu settings section
        array(
            'id' => 'sub_menu_start',
            'type' => 'section',
            'title' => esc_html__('Sub menu settings', 'carspa'),
            'subtitle' => esc_html__('The following settings will only apply on the Sub Menu header mode..', 'carspa'),
            'indent' => false
        ),
        array(
            'title'     => esc_html__('Menu Backgound Color', 'carspa'),
            'subtitle'  => esc_html__('Sub Menu item font color', 'carspa'),
            'id'        => 'sub_menu_bar_bg_color',
            'output'    => array(
                'background' => '.menu > .nav-item.submenu .dropdown-menu',
            ),
            'type'      => 'color',
        ),
        array(
            'title'     => esc_html__('Menu Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color on sticky menu mode.', 'carspa'),
            'id'        => 'sub_menu_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Active Menu Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color on sticky Active menu mode.', 'carspa'),
            'id'        => 'sub_menu_active_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item.active > .nav-link',
            ),
            'type'      => 'color',
        ),

        array(
            'title'     => esc_html__('Hover Menu Color', 'carspa'),
            'subtitle'  => esc_html__('Menu item font color on sticky Active menu mode.', 'carspa'),
            'id'        => 'sub_menu_hover_font_color',
            'output'    => array(
                'color' => '.menu > .nav-item.submenu .dropdown-menu .nav-item:hover > .nav-link',
            ),
            'type'      => 'color',
        ),

    
    )
));


/*** Headers Typography ***/
Redux::set_section( 'carspa', array(
    'title'            => esc_html__( 'Mobile Menu Setting', 'carspa' ),
    'id'               => 'mobile_menu_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
        
        array(
            'id'            => 'mobile_menu_dropdown_bg',
            'type'          => 'color',
            'title'         => esc_html__( 'Background Color', 'carspa' ),
            'subtitle'      => esc_html__( 'Controls the background color of the mobile menu dropdown and classic mobile menu box.', 'carspa' ),
            'mode'          => 'background',
        ),
        array(
            'title'         => esc_html__( 'Menu Item Color', 'carspa' ),
            'id'            => 'mobile_menu_font_color',
            'type'          => 'color',
        ),
        array(
            'title'         => esc_html__( 'Menu Item Active/Hover Color', 'carspa' ),
            'id'            => 'mobile_menu_hover_color',
            'type'          => 'color',
        ),
        array(
            'title'         => esc_html__( 'Dropdown Icon Color', 'carspa' ),
            'id'            => 'mobile_menu_dropdown_color',
            'type'          => 'color',
        ),

        array (
            'title'     => esc_html__( 'Hamburger Menu Icon Color', 'carspa' ),
            'id'        => 'hamburger_menu_icon_color',
            'output'    => array(
                'background' => '.navbar-toggler span',
            ),
            'type'      => 'color',
        ),

        array (
            'title'     => esc_html__( 'Hamburger Menu Icon Color Sticky', 'muffle' ),
            'id'        => 'hamburger_menu_icon_color_sticky',
            'output'    => array(
                'background' => '.navbar-toggler span',
            ),
            'type'      => 'color',
        ),
    

      
    )
));