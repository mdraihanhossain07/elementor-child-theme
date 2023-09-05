<?php
/**
 * Theme functions and definitions
 *
 * @package ElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function elementor_child_enqueue_scripts() {
    wp_enqueue_style(
        'elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'elementor-theme-style',
        ],
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'elementor_child_enqueue_scripts', 20 );


//Year

function func_year( $atts ) {
 return date("Y");
}
add_shortcode( 'year','func_year' );
