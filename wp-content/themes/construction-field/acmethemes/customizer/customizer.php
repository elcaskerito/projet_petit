<?php
/**
 * Construction Field Theme Customizer.
 *
 * @package Acme Themes
 * @subpackage Construction Field
 */

/*
* file for upgrade to pro
*/
require construction_field_file_directory('acmethemes/customizer/customizer-pro/class-customize.php');

/*
* file for customizer core functions
*/
require construction_field_file_directory('acmethemes/customizer/customizer-core.php');

/*
* file for customizer sanitization functions
*/
require construction_field_file_directory('acmethemes/customizer/sanitize-functions.php');

/**
 * Adding different options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function construction_field_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    /*saved options*/
    $options  = construction_field_get_theme_options();

    /*defaults options*/
    $defaults = construction_field_get_default_theme_options();

    /*custom controls*/
    require construction_field_file_directory('acmethemes/customizer/custom-controls.php');
	require construction_field_file_directory('acmethemes/customizer/customizer-repeater/customizer-control-repeater.php');

    /*
     * file for feature panel of home page
     */
    require construction_field_file_directory('acmethemes/customizer/feature-section/feature-panel.php');

    /*
    * file for header panel
    */
    require construction_field_file_directory('acmethemes/customizer/header-options/header-panel.php');

    /*
    * file for customizer footer section
    */
    require construction_field_file_directory('acmethemes/customizer/footer-options/footer-panel.php');

    /*
    * file for design/layout panel
    */
    require construction_field_file_directory('acmethemes/customizer/design-options/design-panel.php');

	/*
   * file for single panel
   */
	require construction_field_file_directory('acmethemes/customizer/single-posts/single-post-panel.php');

    /*
     * file for options panel
     */
    require construction_field_file_directory('acmethemes/customizer/options/options-panel.php');

	/*woocommerce options*/
	if ( construction_field_is_woocommerce_active() ) :
		require_once construction_field_file_directory('acmethemes/customizer/wc-options/wc-panel.php');
	endif;

    /*sorting core and widget for ease of theme use*/
    $wp_customize->get_section( 'static_front_page' )->priority = 10;
    
    $construction_field_home_section = $wp_customize->get_section( 'sidebar-widgets-construction-field-home' );
    if ( ! empty( $construction_field_home_section ) ) {
        $construction_field_home_section->panel         = '';
        $construction_field_home_section->title         = esc_html__( 'Home Main Content Area ', 'construction-field' );
        $construction_field_home_section->priority      = 80;
    }


    /*customizing default colors section and adding new controls-setting too*/
    $wp_customize->get_section( 'colors' )->panel = 'construction-field-design-panel';
    $wp_customize->get_section( 'colors' )->title = esc_html__( 'Basic Color', 'construction-field' );
    $wp_customize->get_section( 'background_image' )->priority = 100;

    /*Background Image*/
    $wp_customize->get_section( 'background_image' )->panel = 'construction-field-design-panel';
    $wp_customize->get_section( 'background_image' )->priority = 60;

    /*adding header image inside this panel*/
    $wp_customize->get_section( 'header_image' )->panel = 'construction-field-header-panel';
    $wp_customize->get_section( 'header_image' )->description = esc_html__( 'Applied to header image of inner pages.', 'construction-field' );

    /*TODO 5.8*/
    /*$construction_field_popup_widget_area = $wp_customize->get_section( 'sidebar-widgets-popup-widget-area' );
    if ( ! empty( $construction_field_popup_widget_area ) ) {
        $construction_field_popup_widget_area->panel = 'construction-field-header-panel';
        $construction_field_popup_widget_area->title = esc_html__( 'Popup Widgets', 'construction-field' );
        $construction_field_popup_widget_area->priority = 999;

        $construction_field_popup_widget_title = $wp_customize->get_control( 'construction_field_theme_options[construction-field-popup-widget-title]' );
        if ( ! empty( $construction_field_popup_widget_title ) ) {
            $construction_field_popup_widget_title->section  = 'sidebar-widgets-popup-widget-area';
            $construction_field_popup_widget_title->priority = -1;
        }
    }*/
}
add_action( 'customize_register', 'construction_field_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function construction_field_customize_preview_js() {
    wp_enqueue_script( 'construction-field-customizer', get_template_directory_uri() . '/acmethemes/core/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'construction_field_customize_preview_js' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function construction_field_customize_controls_scripts() {
    wp_enqueue_script( 'construction-field-customizer-controls', get_template_directory_uri() . '/acmethemes/core/js/customizer-controls.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'construction_field_customize_controls_scripts' );