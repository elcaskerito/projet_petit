<?php
/*Title*/
$wp_customize->add_setting( 'construction_field_theme_options[construction-field-popup-widget-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['construction-field-popup-widget-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'construction_field_theme_options[construction-field-popup-widget-title]', array(
	'label'		        => esc_html__( 'Popup Main Title', 'construction-field' ),
	'section'           => 'construction-field-menu-options',
	'settings'          => 'construction_field_theme_options[construction-field-popup-widget-title]',
	'type'	  	        => 'text',
) );