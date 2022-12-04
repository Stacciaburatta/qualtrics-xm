<?php // qualtrics_xm - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// register plugin settings
function qualtrics_xm_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback = ''
	);
	
	*/
	
	register_setting( 
		'qualtrics_xm_options', 
		'qualtrics_xm_options', 
		'qualtrics_xm_callback_validate_options' 
	); 
	
	/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'qualtrics_xm_section_wsf', 
		esc_html__('Deploy intercept on the site pages', 'qualtrics_xm'), 
		'qualtrics_xm_callback_section_wsf', 
		'qualtrics_xm'
	);
	
	/*
	
	add_settings_field(
    	string   $id, 
		string   $title, 
		callable $callback, 
		string   $page, 
		string   $section = 'default', 
		array    $args = []
	);
	
	*/
	
	add_settings_field(
		'custom_url',
		esc_html__('Custom URL', 'qualtrics_xm'),
		'qualtrics_xm_callback_field_text',
		'qualtrics_xm', 
		'qualtrics_xm_section_wsf', 
		[ 'id' => 'custom_url', 'label' => esc_html__('Custom URL for Website Feedback', 'qualtrics_xm') ]
	);
	
	add_settings_field(
		'enable_custom_url',
		esc_html__('', 'qualtrics_xm'),
		'qualtrics_xm_callback_field_radio',
		'qualtrics_xm', 
		'qualtrics_xm_section_wsf', 
		[ 'id' => 'enable_custom_url', 'label' => esc_html__('Activate/Deactivate Website Feedback', 'qualtrics_xm') ]
	);
	
	add_settings_field(
		'code_snippet',
		esc_html__('Code Snippet', 'qualtrics_xm'),
		'qualtrics_xm_callback_field_textarea',
		'qualtrics_xm', 
		'qualtrics_xm_section_wsf', 
		[ 'id' => 'code_snippet', 'label' => esc_html__('Website Feedback code snippet', 'qualtrics_xm') ]
	);
	
	add_settings_field(
		'activate_wsf',
		esc_html__('Activate Website Feedback', 'qualtrics_xm'),
		'qualtrics_xm_callback_field_checkbox',
		'qualtrics_xm', 
		'qualtrics_xm_section_wsf', 
		[ 'id' => 'activate_wsf', 'label' => esc_html__('Activate Website Feedback', 'qualtrics_xm') ]
	);

} 
add_action( 'admin_init', 'qualtrics_xm_register_settings' );


