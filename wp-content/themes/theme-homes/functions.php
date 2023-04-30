<?php

/**
 * This function takes
 * 
 * @return void
 */

function softuni_assets() {
    wp_enqueue_style('theme-homes', get_stylesheet_directory_uri() . '/assets/css/master.css');
}

add_action( 'wp_enqueue_scripts', 'softuni_assets' );