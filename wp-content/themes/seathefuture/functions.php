<?php
/**
 * Sea the future functions and definitions
 */

if ( ! function_exists( 'sea_setup' ) ) :
	function sea_setup() {

		add_theme_support( 'automatic-feed-links' );

        register_nav_menus( array(
			'main' => esc_html__( 'Primary', 'bigs' ),
		) );

	}
endif;
add_action( 'after_setup_theme', 'sea_setup' );


/**
 * Enqueue scripts and styles.
 */
function sea_scripts() {
	wp_enqueue_style( 'sea-style', get_stylesheet_uri() );
	wp_enqueue_style('winward-wnwd',  get_template_directory_uri() . '/css/bootstrap-grid.min.css');
}
add_action( 'wp_enqueue_scripts', 'sea_scripts' );
