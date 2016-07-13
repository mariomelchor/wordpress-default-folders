<?php

/**
 * Default Settings for Meta Slider Plugin.
 *
 * @package dhali
 */

function dhali_slider_parameters( $params ) {
	$params['type']		= 'flex';
	$params['width']	= 1920;
	$params['height']	= 570;
	$params['effect'	= 'fade';
	$params['navigation'] 	= true;
	$params['center'] 	= true;
	$params['fullWidth'] 	= true;
	return $params;
}
add_filter('metaslider_default_parameters', 'dhali_slider_parameters', 10, 1);
