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
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap-theme.css');
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
 * Enable automatic updates for plugins
 */
add_filter('auto_update_plugin', '__return_true');
