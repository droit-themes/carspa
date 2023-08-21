<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage carspa
 * @since carspa 1.0
 */

 $opt = get_option( 'carspa' );
 $blog_excerpt = isset($opt['blog_excerpt']) ? $opt['blog_excerpt'] : '';
 
 
 echo wp_trim_words(get_the_excerpt(), $blog_excerpt);
