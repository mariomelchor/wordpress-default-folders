<?php

function dhali_setup() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 */
	add_editor_style( array( 'css/editor-style.css' ) );

}
add_action( 'after_setup_theme', 'dhali_setup' );

/**
 * Enqueue scripts and styles.
 */
function dhali_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style( 'wp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wg-style', get_template_directory_uri() . '/css/styles.css');

	wp_enqueue_script( 'google-fonts', get_template_directory_uri() . '/js/google-fonts.js', array(), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'dhali_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Required Plugins.
 */
require get_template_directory() . '/inc/required-plugins.php';

/**
 * Load Default Settings for Meta Slider.
 */
require get_template_directory() . '/inc/meta-slider.php';

/**
 * Enable automatic updates for plugins
 */
add_filter('auto_update_plugin', '__return_true');

/**
 * Replaces classes to the_custom_logo function html output.
 */
function dhali_custom_logo_output( $html ){
	$html = str_replace( array('custom-logo-link', 'custom-logo'), array('navbar-brand py-0', 'img-fluid'), $html );
	return $html;
}
add_filter('get_custom_logo', 'dhali_custom_logo_output', 10);

/**
 * Enable default taxonomies for Pages and Attachments
 */
function dhali_register_taxonomy() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'dhali_register_taxonomy' );

/**
 * Add Note to Featured Image Meta Box
 */
function dhali_post_thumbnail_html( $content ) {
	return $content .= '1400x600px - <small><em>Recommended Image Dimensions</em></small>';
}
add_filter( 'admin_post_thumbnail_html', 'dhali_post_thumbnail_html');
