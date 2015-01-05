<?php
/**
* Plugin Name: Custom Content
* Plugin URI: http://joshmallard.com
* Description: Simple way to add custom content for client projects
* Author: Josh Mallard
* Version: 1.0.0
* Author URI: http://joshmallard.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load CPT Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/CPT_Core/CPT_Core.php' );

// Load Taxonomy Helper
require_once( plugin_dir_path( __FILE__ ) . 'core-classes/Taxonomy_Core/Taxonomy_Core.php' );