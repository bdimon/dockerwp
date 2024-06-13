<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dvb
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function dvb_styles() {
	wp_enqueue_style(
		'dvb-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'dvb_styles' );
