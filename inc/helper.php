<?php 

/**
 * helper function for carspa 
 */

 /**
  * carspa return 
  */

 if(!function_exists('carspa_return')){

    function carspa_return( $html ){
        return $html;
    }

 }
/**
 * Get editor data 
 */
if(!function_exists('carspa_editor_data')){

    function carspa_editor_data( $data ) {
        return wp_kses_post( $data );
    }

}


/*
 * Resize media image 
 * To get instant resize 
 */

if(!function_exists('carspa_get_image')){

    function carspa_get_image( $id, $size = 'full', $icon= false,  $attr = '') {
       
       echo  wp_get_attachment_image($id, $size, $icon, $attr);

    }
    
}
/**
 * carspa kses
 */
if(!function_exists('carspa_kses')){

    function carspa_kses ( $data ) {

        $allowed_tags = array(
            'a'								 => array(
                'class'	 => array(),
                'href'	 => array(),
                'rel'	 => array(),
                'title'	 => array(),
            ),
            'abbr'							 => array(
                'title' => array(),
            ),
            'b'								 => array(),
            'blockquote'					 => array(
                'cite' => array(),
            ),
            'cite'							 => array(
                'title' => array(),
            ),
            'code'							 => array(),
            'del'							 => array(
                'datetime'	 => array(),
                'title'		 => array(),
            ),
            'dd'							 => array(),
            'div'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'dl'							 => array(),
            'dt'							 => array(),
            'em'							 => array(),
            'h1'							 => array(),
            'h2'							 => array(),
            'h3'							 => array(),
            'h4'							 => array(),
            'h5'							 => array(),
            'h6'							 => array(),
            'i'								 => array(
                'class' => array(),
            ),
            'img'							 => array(
                'alt'	 => array(),
                'class'	 => array(),
                'height' => array(),
                'src'	 => array(),
                'width'	 => array(),
            ),
            'li'							 => array(
                'class' => array(),
            ),
            'ol'							 => array(
                'class' => array(),
            ),
            'p'								 => array(
                'class' => array(),
            ),
            'q'								 => array(
                'cite'	 => array(),
                'title'	 => array(),
            ),
            'span'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'strike'						 => array(),
            'br'							 => array(),
            'strong'						 => array(),
            'data-wow-duration'				 => array(),
            'data-wow-delay'				 => array(),
            'data-wallpaper-options'		 => array(),
            'data-stellar-background-ratio'	 => array(),
            'ul'							 => array(
                'class' => array(),
            ),
        );
       
        return wp_kses($data, $allowed_tags);
    }
}

/**
 * get carspa option 
 */

 if(!function_exists('carspa_options')){

    function carspa_options ( $section_id, $default = '' ) {

        $option_data = $default;

        if ( class_exists( 'Redux' ) ) {

            global $carspa;
            $option_data = (isset($carspa[$section_id]) && (!empty($carspa[$section_id]))) ? $carspa[$section_id] : $default;
           
        }

        return $option_data;

    }

 }

 /**
 * get carspa option 
 */

if(!function_exists('carspa_page_meta')){

    function carspa_page_meta ( $meta_id, $id, $default = '' ) {

       $metadata =  $default; 

       if(function_exists('get_field')) {
         $metadata = (get_field($meta_id, $id) != '') ? get_field($meta_id, $id): $default;
       }
      
       return $metadata;

    }

 }