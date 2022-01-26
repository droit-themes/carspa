<?php

Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Footer', 'carspa' ),
	'id'        => 'carspa_page',
	'icon'      => 'dashicons dashicons-admin-post',
));

// page Title Bar
Redux::set_section('carspa', array(
	'title'     => esc_html__( 'Content', 'carspa' ),
	'id'        => 'carspa_footer',
	'icon'      => '',
    'subsection' => true,
	'fields'    => array(
        array(
            'title'     => esc_html__('Copyright Text', 'carspa'),
            'id'        => 'carspa_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2022 <a href="#">DroitThemes</a> | All rights reserved',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            )
        ),
	)
));

