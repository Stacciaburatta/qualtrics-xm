<?php // Qualtrics XM - Admin Menu



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// add sub-level administrative menu
function qualtrics_xm_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug, 
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
		esc_html__('Qualtrics XM Settings', 'qualtrics_xm'),
		esc_html__('Qualtrics XM', 'qualtrics_xm'),
		'manage_options',
		'qualtrics_xm',
		'qualtrics_xm_display_settings_page'
	);
	
}
add_action( 'admin_menu', 'qualtrics_xm_add_sublevel_menu' );



// add top-level administrative menu
function qualtrics_xm_add_toplevel_menu() {
	
	/* 
	
	add_menu_page(
		string   $page_title, 
		string   $menu_title, 
		string   $capability, 
		string   $menu_slug, 
		callable $function = '', 
		string   $icon_url = '', 
		int      $position = null 
	)
	
	*/
	
	add_menu_page(
		esc_html__('MyPlugin Settings', 'myplugin'),
		esc_html__('MyPlugin', 'myplugin'),
		'manage_options',
		'myplugin',
		'myplugin_display_settings_page',
		'dashicons-admin-generic',
		null
	);
	
}
// add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );


