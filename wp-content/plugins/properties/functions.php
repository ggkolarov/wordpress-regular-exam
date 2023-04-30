<?php 

/**
 * This function update the number of the visitors for each home view
 * @param [type] $home_id
 * @return void
 */

function home_update_views_count( $home_id ) {
    if ( empty( $home_id ) ) {
        return;
    }

    $view_count = get_post_meta( $home_id, 'views_count', true );

    // var_dump( $view_count );

    if ( ! empty( $view_count ) ) {
        $view_count = $view_count + 1;
    } else {
        $view_count = 1;
    }

    update_post_meta( $home_id, 'views_count', $view_count );

}

function register_properties_menu() {
    register_nav_menu( 'primary_menu', __( 'Main navigation', 'softuni-homes' ) );
}

add_action( 'after_setup_theme', 'register_properties_menu' );