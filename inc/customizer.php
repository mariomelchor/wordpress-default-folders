<?php
/**
 * dhali Theme Customizer.
 *
 * @package dhali
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dhali_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//Add WP Customizer Section for Contact Details
	$wp_customize->add_section('contact_details',
		array(
			'title'		=> __('Contact Details','dhali'),
			'priority' => 20,
		)
	);

	//Add WP Customizer Setting for Phone Number
	$wp_customize->add_setting('phone_number_setting',
		array(
			'default'		=> __('Phone Number Here','dhali'),
			'type'			=> 'theme_mod',
			'transport' => 'postMessage'
		)
	);

	//Add WP Customizer Control for Phone Number
	$wp_customize->add_control('phone_number_control',
		array(
			'label'    => __( 'Phone Number', 'dhali' ),
			'section'  => 'contact_details',
			'settings' => 'phone_number_setting',
			'type'     => 'text',
		)
	);

	//Add WP Customizer Setting for Address
	$wp_customize->add_setting('address_setting',
		array(
			'default'		=> __('Address Here','dhali'),
			'type'			=> 'theme_mod',
			'transport' => 'postMessage'
		)
	);

	//Add WP Customizer Control for Address Control
	$wp_customize->add_control('address_control',
		array(
			'label'    => __( 'Address', 'dhali' ),
			'section'  => 'contact_details',
			'settings' => 'address_setting',
			'type'     => 'textarea',
		)
	);

}
add_action( 'customize_register', 'dhali_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function dhali_customize_preview_js() {
	wp_enqueue_script( 'dhali_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20160427', true );
}
add_action( 'customize_preview_init', 'dhali_customize_preview_js' );
