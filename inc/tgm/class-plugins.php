<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class carspa_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(
			array(
				'name'      => esc_html__( 'Elementor', 'carspa' ),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Addons For Elementor', 'carspa' ),
				'slug'               => 'droit-elementor-addons',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Droit Dark Mode', 'carspa' ),
				'slug'               => 'droit-dark-mode',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Carspa Core', 'carspa' ), // The plugin name.
				'slug'               => 'carspa-core', // The plugin slug (typically the folder name).
				'source'             => 'https://dlcarspa.droitlab.com/downloadfile/carspa-core_1.0.4.zip', // The plugin source.
				'required'           => true, // If false, the plugin is only 'recommended' instead of required.
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
				'external_url'       => '', // If set, overrides default API URL and points to an external URL.
				'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
			),
	
			array(
				'name'               => esc_html__( 'Redux Framework', 'carspa' ),
				'slug'               => 'redux-framework',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Advanced Custom Fields', 'carspa' ),
				'slug'               => 'advanced-custom-fields',
				'required'           => true,
			),
	
			array(
				'name'      => esc_html__( 'One Click Demo Import', 'carspa' ),
				'slug'      => 'one-click-demo-import',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'WooCommerce', 'carspa' ),
				'slug'      => 'woocommerce',
				'required'  => false,
			),
	
			array(
				'name'      => esc_html__( 'Bookly - Online Booking and Scheduling', 'carspa' ),
				'slug'      => 'bookly-responsive-appointment-booking-tool',
				'required'  => false,
			),
			
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new carspa_Register_Plugins();
