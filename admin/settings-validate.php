<?php // qualtrics_xm - Validate Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// callback: validate options
function qualtrics_xm_callback_validate_options( $input ) {
	
	// custom url
	if ( isset( $input['custom_url'] ) ) {
		
		$input['custom_url'] = esc_url( $input['custom_url'] );
		
	}
	
	// custom style
	$radio_options = qualtrics_xm_options_radio();
	
	if ( ! isset( $input['enable_custom_url'] ) ) {
		
		$input['enable_custom_url'] = null;
		
	}
	if ( ! array_key_exists( $input['enable_custom_url'], $radio_options ) ) {
		
		$input['enable_custom_url'] = null;
		
	}
	
	// code snippet
	if ( isset( $input['code_snippet'] ) ) {
		
		//$input['code_snippet'] = wp_kses_post( $input['code_snippet'] );
		
	}
	
	// custom toolbar
	if ( ! isset( $input['activate_wsf'] ) ) {
		
		$input['activate_wsf'] = null;
		
	}
	
	$input['activate_wsf'] = ($input['activate_wsf'] == 1 ? 1 : 0);
	
	// custom scheme
	$select_options = qualtrics_xm_options_select();
	
	if ( ! isset( $input['custom_scheme'] ) ) {
		
		$input['custom_scheme'] = null;
		
	}
	
	if ( ! array_key_exists( $input['custom_scheme'], $select_options ) ) {
		
		$input['custom_scheme'] = null;
	
	}
	
	return $input;
	
}


