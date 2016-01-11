<?php

add_action('admin_notices', 'showAdminMessages');

function showAdminMessages() {
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Meta Slider Plugin
	if(!is_plugin_active( 'ml-slider/ml-slider.php' ))	{
		$plugin_messages[] = 'This theme requires you to install the Meta Slider Plugin plugin, <a href="https://wordpress.org/plugins/ml-slider/">download it from here</a>.';
	}

	if(count($plugin_messages) > 0)	{
		echo '<div id="message" class="error">';

			foreach($plugin_messages as $message) {
				echo '<p><strong>'.$message.'</strong></p>';
			}

		echo '</div>';
	}
}
