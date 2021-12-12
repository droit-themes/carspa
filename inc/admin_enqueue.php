<?php 
/**
 * carspa admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'carspa_admin_enqueues');

function carspa_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if($screen->base == 'toplevel_page_carspa_options') {
            wp_enqueue_style( 'carspa-redux-style', carspa_CSS.'/redux-style.css' );
            wp_enqueue_style( 'carspa-sofiapro', carspa_CSS.'/sofiapro.css' );
        }
    }
    
}
