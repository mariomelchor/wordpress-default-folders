<?php

/**
 * Default Settings for Meta Slider Plugin.
 *
 * @package dhali
 */

function dhali_slider_parameters( $params ) {
		$params['type'] 				= 'flex';
		$params['width'] 				= 1600;
		$params['height'] 			= 600;
		$params['navigation'] 	= 'false';
		$params['effect'] 			= 'fade';
		$params['center'] 			= 'true';
		$params['fullWidth'] 		= 'true';
	return $params;
}
add_filter('metaslider_default_parameters', 'dhali_slider_parameters', 10, 1);
