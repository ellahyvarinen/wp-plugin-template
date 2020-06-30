<?php
/**
 * Plugin Name: Customizations
 * Plugin URI: https://timanttti.com
 * Description: Customizing WordPress with custom plugin
 * Version: 1.0.0
 * Author: Ella Hyvärinen
 * Author URI: https://timanttti.com
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// Changes admin's fonts
function my_custom_fonts() {
	echo '<style>
	html, body {
		font-family: "Roboto Mono", serif;
	} 
	</style>';
}
add_action('admin_head', 'my_custom_fonts');


// Add more functions below