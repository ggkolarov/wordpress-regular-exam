<?php
    function theme_homes_parent_styles() {
    $parent_theme = 'theme-homes';
    $theme        = wp_get_theme();
    wp_enqueue_style( $parent_theme,
        get_template_directory_uri() . '/assets/css/master.css',
        array(), 
        $theme->parent()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'theme_homes_parent_styles' );