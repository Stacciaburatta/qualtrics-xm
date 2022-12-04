<?php
/*
Plugin Name:  Qualtrics XM
Description:  Beta plugin for Qualtrics Integration.
Plugin URI:   https://gioni.it
Author:       Gioni Gennai
Version:      1.0
Text Domain:  qualtrics_xm
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}

// load text domain
function qualtrics_xm_load_textdomain() {
	
	load_plugin_textdomain( 'qualtrics_xm', false, plugin_dir_path( __FILE__ ) . 'languages/' );
	
}
add_action( 'plugins_loaded', 'qualtrics_xm_load_textdomain' );



// include plugin dependencies: admin only
if ( is_admin() ) {
	
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
	
}

// default plugin options
function qualtrics_xm_options_default() {
	
	return array(
		'custom_url'     => 'https://qualtrics.com/',
		'enable_custom_url'   => 'disable',
		'code_snippet' => esc_html__('Past your Code Snippet here', 'qualtrics_xm'),
		'activate_wsf' => false,
	);
	
}


// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';


