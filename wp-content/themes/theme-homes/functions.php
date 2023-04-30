<?php

/**
 * This function adds the assets with enqueue
 * 
 * @return void
 */

function softuni_assets() {
    wp_enqueue_style('theme-homes', get_stylesheet_directory_uri() . '/assets/css/master.css');
}

add_action( 'wp_enqueue_scripts', 'softuni_assets' );

/**
 * 
 * This function adds a custom class to the body tag
 */

 function add_custom_body_class( $classes ) {
    $classes[] = 'softuni-regular-exam';

    return $classes;
}

add_filter( 'body_class', 'add_custom_body_class' );
