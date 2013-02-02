<?php
/**
 * motrton-three Theme Customizer
 *
 * @package motrton-three
 * @since motrton-three 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since motrton-three 1.2
 */
function motrton_three_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'motrton_three_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since motrton-three 1.2
 */
function motrton_three_customize_preview_js() {
	wp_enqueue_script( 'motrton_three_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'motrton_three_customize_preview_js' );
