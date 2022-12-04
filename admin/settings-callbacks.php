<?php // qualtrics_xm - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}

// callback: login section
function qualtrics_xm_callback_section_wsf() {
	
	echo '<p>'. esc_html__('These settings enable you to customize the Intercept deployment.', 'qualtrics_xm') .'</p>';
	
}

// callback: text field
function qualtrics_xm_callback_field_text( $args ) {
	
	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$value = isset( $options[$id] ) ? $options[$id] : '';
	
	echo '<input id="qualtrics_xm_options_'. $id .'" name="qualtrics_xm_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="qualtrics_xm_options_'. $id .'">'. $label .'</label>';
	
}

// radio field options
function qualtrics_xm_options_radio() {
	
	return array(
		
		'enable'  => esc_html__('Enable custom URL', 'qualtrics_xm'),
		'disable' => esc_html__('Disable custom URL', 'qualtrics_xm')
		
	);
	
}

// callback: radio field
function qualtrics_xm_callback_field_radio( $args ) {
	
	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$radio_options = qualtrics_xm_options_radio();
	
	foreach ( $radio_options as $value => $label ) {
		
		$checked = checked( $selected_option === $value, true, false );
		
		echo '<label><input name="qualtrics_xm_options['. $id .']" type="radio" value="'. $value .'"'. $checked .'> ';
		echo '<span>'. $label .'</span></label><br />';
		
	}
	
}

// callback: textarea field
function qualtrics_xm_callback_field_textarea( $args ) {
	
	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	//$allowed_tags = wp_kses_allowed_html( 'post' );
	
	//$value = isset( $options[$id] ) ? wp_kses( stripslashes_deep( $options[$id] ), $allowed_tags ) : '';
	$value = isset( $options[$id] ) ? $options[$id] : '';
	
	echo '<textarea id="qualtrics_xm_options_'. $id .'" name="qualtrics_xm_options['. $id .']" rows="5" cols="50">'. $value .'</textarea><br />';
	echo '<label for="qualtrics_xm_options_'. $id .'">'. $label .'</label>';
	
}


// callback: checkbox field
function qualtrics_xm_callback_field_checkbox( $args ) {
	
	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$checked = isset( $options[$id] ) ? checked( $options[$id], 1, false ) : '';
	
	echo '<input id="qualtrics_xm_options_'. $id .'" name="qualtrics_xm_options['. $id .']" type="checkbox" value="1"'. $checked .'> ';
	echo '<label for="qualtrics_xm_options_'. $id .'">'. $label .'</label>';
	
}



// select field options
function qualtrics_xm_options_select() {
	
	return array(
		
		'default'   => esc_html__('Default',   'qualtrics_xm'),
		'light'     => esc_html__('Light',     'qualtrics_xm'),
		'blue'      => esc_html__('Blue',      'qualtrics_xm'),
		'coffee'    => esc_html__('Coffee',    'qualtrics_xm'),
		'ectoplasm' => esc_html__('Ectoplasm', 'qualtrics_xm'),
		'midnight'  => esc_html__('Midnight',  'qualtrics_xm'),
		'ocean'     => esc_html__('Ocean',     'qualtrics_xm'),
		'sunrise'   => esc_html__('Sunrise',   'qualtrics_xm'),
		
	);
	
}



// callback: select field
function qualtrics_xm_callback_field_select( $args ) {
	
	$options = get_option( 'qualtrics_xm_options', qualtrics_xm_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$select_options = qualtrics_xm_options_select();
	
	echo '<select id="qualtrics_xm_options_'. $id .'" name="qualtrics_xm_options['. $id .']">';
	
	foreach ( $select_options as $value => $option ) {
		
		$selected = selected( $selected_option === $value, true, false );
		
		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';
		
	}
	
	echo '</select> <label for="qualtrics_xm_options_'. $id .'">'. $label .'</label>';
	
}


