function theme_setup() {
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 */
	add_editor_style( array( 'css/editor-style.css' ) );
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Load Simplegrid shortcode generator file.
 */
require get_template_directory() . '/inc/simplegrid.php';
