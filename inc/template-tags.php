<?php

if ( ! function_exists( 'dhali_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 */
function dhali_the_custom_logo() {
  if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
    the_custom_logo();
  } else {
    echo '<a href="'. get_bloginfo('url' ) .'" class="navbar-brand py-0"><img width="300" height="100" src="http://via.placeholder.com/300x100" class="img-fluid" alt="'. get_bloginfo( 'name' ) .'"></a>';
  }
}
endif;

if ( ! function_exists( 'dhali_post_navigation' ) ) :
/**
 * Displays the post navigation.
 * Previous Post/Next Post anchor tags
 */
function dhali_post_navigation() {
	$previous   = get_previous_post_link( '<div class="nav-previous">%link</div>', 'Previous Post', true );
	$next       = get_next_post_link( '<div class="nav-next">%link</div>', 'Next Post', true );

	// Only add markup if there's somewhere to navigate to.
	if ( $previous || $next ) {
		$navigation = _navigation_markup( $previous . $next, 'post-navigation' );
	}
	echo $navigation;
}
endif;
