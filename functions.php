function dhali_setup() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 */
	add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'dhali_setup' );

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
