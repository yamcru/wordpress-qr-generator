<?php
/**
 * Plugin Name:     QR Code Generator
 * Plugin URI:      PLUGIN  URL
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          Yamil L Cruz
 * Author URI:      https://www.linkedin.com/in/yamilcruz/
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Table Dash QR Code Generator
 */


//include custom post types
include 'src/post-type.php';

//Add Templates 
function load_custom_template( $template ) {
	if ( is_singular( 'qrcode' ) ) {
		$template = WP_PLUGIN_DIR .'/'. plugin_basename( dirname(__FILE__) ) .'/src/templates/qr_code.php';
	}
	
	return $template;
}
add_filter( 'single_template', 'load_custom_template', 50, 1 );



