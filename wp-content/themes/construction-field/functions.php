<?php
/**
 * Construction Field functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Construction Field
 */


/**
 * Default Theme layout options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_theme_layout
 *
 */
if ( !function_exists('construction_field_get_default_theme_options') ) :
    function construction_field_get_default_theme_options() {

        $default_theme_options = array(

            /*logo and site title*/
            'construction-field-display-site-logo'      => '',
            'construction-field-display-site-title'     => 1,
            'construction-field-display-site-tagline'   => 1,

            /*header height*/
            'construction-field-header-height'          => 300,
            'construction-field-header-image-display'   => 'bg-image',

            /*header top*/
            'construction-field-enable-header-top'       => '',
            'construction-field-header-top-menu-display-selection'      => 'right',
            'construction-field-header-top-news-display-selection'      => 'left',
            'construction-field-header-top-social-display-selection'    => 'right',
            'construction-field-newsnotice-title'       => esc_html__( 'News :', 'construction-field' ),
            'construction-field-newsnotice-cat'         => 0,

            /*menu options*/
            'construction-field-enable-sticky'                  => '',
            'construction-field-menu-right-button-options'      => 'disable',
            'construction-field-menu-right-button-title'        => esc_html__('Request a Quote','construction-field'),
            'construction-field-menu-right-button-link'         => '',
            'construction-field-enable-cart-icon'               => '',

            /*feature section options*/
            'construction-field-enable-feature'                         => '',
            'construction-field-slides-data'                            => '',
            'construction-field-feature-slider-enable-animation'        => 1,
            'construction-field-feature-slider-display-title'           => 1,
            'construction-field-feature-slider-display-excerpt'         => 1,
            'construction-field-fs-image-display-options'               => 'full-screen-bg',
            'construction-field-feature-slider-text-align'              => 'text-left',

            /*basic info*/
            'construction-field-feature-info-display-options'           => 'hide',
            'construction-field-feature-info-number'    => 4,
            'construction-field-first-info-icon'        => 'fa-calendar',
            'construction-field-first-info-title'       => esc_html__('Send Us a Mail', 'construction-field'),
            'construction-field-first-info-desc'        => esc_html__('domain@example.com ', 'construction-field'),
            'construction-field-second-info-icon'       => 'fa-map-marker',
            'construction-field-second-info-title'      => esc_html__('Our Location', 'construction-field'),
            'construction-field-second-info-desc'       => esc_html__('Elmonte California', 'construction-field'),
            'construction-field-third-info-icon'        => 'fa-phone',
            'construction-field-third-info-title'       => esc_html__('Call Us', 'construction-field'),
            'construction-field-third-info-desc'        => esc_html__('01-23456789-10', 'construction-field'),
            'construction-field-forth-info-icon'        => 'fa-envelope-o',
            'construction-field-forth-info-title'       => esc_html__('Office Hours', 'construction-field'),
            'construction-field-forth-info-desc'        => esc_html__('8 hours per day', 'construction-field'),

            /*footer options*/
            'construction-field-footer-copyright'                       => esc_html__( '&copy; Custom Copyright', 'construction-field' ),
            'construction-field-footer-copyright-beside-option'         => 'footer-menu',
            'construction-field-footer-bg-img'                          => '',

            /*layout/design options*/
            'construction-field-enable-animation'       => '',

            'construction-field-single-sidebar-layout'                  => 'right-sidebar',
            'construction-field-front-page-sidebar-layout'              => 'right-sidebar',
            'construction-field-archive-sidebar-layout'                 => 'right-sidebar',

            'construction-field-blog-archive-img-size'                  => 'full',
            'construction-field-blog-archive-content-from'              => 'excerpt',
            'construction-field-blog-archive-excerpt-length'            => 42,
            'construction-field-blog-archive-more-text'                 => esc_html__( 'Read More', 'construction-field' ),
            'construction-field-exclude-categories'                 => '',

            'construction-field-primary-color'          => '#fab702',
            'construction-field-header-top-bg-color'    => '#fab702',
            'construction-field-footer-bg-color'        => '#242424',
            'construction-field-footer-bottom-bg-color' => '#131313',

            /*Front Page*/
            'construction-field-hide-front-page-content' => '',
            'construction-field-hide-front-page-header'  => '',

            /*woocommerce*/
            'construction-field-wc-shop-archive-sidebar-layout'     => 'no-sidebar',
            'construction-field-wc-product-column-number'           => 4,
            'construction-field-wc-shop-archive-total-product'      => 16,
            'construction-field-wc-single-product-sidebar-layout'   => 'no-sidebar',

            /*single post*/
            'construction-field-single-header-title'            => esc_html__( 'Blog', 'construction-field' ),
            'construction-field-single-img-size'                => 'full',

            /*theme options*/
            'construction-field-popup-widget-title'     => esc_html__( 'Request a Quote', 'construction-field' ),
            'construction-field-show-breadcrumb'        => 1,
            'construction-field-search-placeholder'     => esc_html__( 'Search', 'construction-field' ),
            'construction-field-social-data'            => ''
        );
        return apply_filters( 'construction_field_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Get theme options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array construction_field_theme_options
 *
 */
if ( !function_exists('construction_field_get_theme_options') ) :
    function construction_field_get_theme_options() {

        $construction_field_default_theme_options = construction_field_get_default_theme_options();
        $construction_field_get_theme_options = get_theme_mod( 'construction_field_theme_options');
        if( is_array( $construction_field_get_theme_options )){
            return array_merge( $construction_field_default_theme_options ,$construction_field_get_theme_options );
        }
        else{
            return $construction_field_default_theme_options;
        }
    }
endif;

$construction_field_saved_theme_options = construction_field_get_theme_options();
$GLOBALS['construction_field_customizer_all_values'] = $construction_field_saved_theme_options;
/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';