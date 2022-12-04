<?php // qualtrics_xm - Core Functionality

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}

// custom admin footer
function qualtrics_xm_embedd_snippet() {
	//Don't include snippet in the admin area
	if ( is_admin() ) {
		return;
	}

	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	error_log("activate_wfs: " . $options['activate_wsf']);
	if ( isset( $options['activate_wsf'] ) && $options['activate_wsf'] != 1 ) {
		
		return;
	}
	
	if ( isset( $options['code_snippet'] ) && ! empty( $options['code_snippet'] ) ) {
		
		echo $options['code_snippet'];
		
	}
		
}
add_action( 'wp_footer', 'qualtrics_xm_embedd_snippet', 100 );



