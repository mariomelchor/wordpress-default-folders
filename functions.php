function dhali_setup() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 */
	add_editor_style( array( 'css/editor-style.css' ) );
	
	add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

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
}
add_action( 'wp_enqueue_scripts', 'dhali_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
	
/**
 * Load Simplegrid shortcode generator file.
 */
require get_template_directory() . '/inc/simplegrid.php';

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
 * Add Class to the_custom_logo function html output.
 */
add_filter('get_custom_logo', 'custom_logo_output', 10);
function custom_logo_output( $html ){
	$html = str_replace( 'custom-logo-link', 'custom-logo-link any-class-you-want', $html );
	return $html;
}

/**
 * Enable default taxonomies for Pages and Attachments
 */
function dhali_register_taxonomy() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'dhali_register_taxonomy' );
