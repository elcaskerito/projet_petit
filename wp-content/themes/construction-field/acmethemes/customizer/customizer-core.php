<?php
/**
 * Header Image Display Options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_header_image_display
 *
 */
if ( !function_exists('construction_field_header_image_display') ) :
	function construction_field_header_image_display() {
		$construction_field_header_image_display =  array(
			'hide'              => esc_html__( 'Hide', 'construction-field' ),
			'bg-image'          => esc_html__( 'Background Image', 'construction-field' ),
			'normal-image'      => esc_html__( 'Normal Image', 'construction-field' )
		);
		return apply_filters( 'construction_field_header_image_display', $construction_field_header_image_display );
	}
endif;

/**
 * Menu Right Button Link Options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_menu_right_button_link_options
 *
 */
if ( !function_exists('construction_field_menu_right_button_link_options') ) :
	function construction_field_menu_right_button_link_options() {
		$construction_field_menu_right_button_link_options =  array(
			'disable'       => esc_html__( 'Disable', 'construction-field' ),
			'booking'       => esc_html__( 'Popup Widgets ( Booking Form )', 'construction-field' ),
			'link'          => esc_html__( 'One Link', 'construction-field' )
		);
		return apply_filters( 'construction_field_menu_right_button_link_options', $construction_field_menu_right_button_link_options );
	}
endif;

/**
 * Header top display options of elements
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_header_top_display_selection
 *
 */
if ( !function_exists('construction_field_header_top_display_selection') ) :
	function construction_field_header_top_display_selection() {
		$construction_field_header_top_display_selection =  array(
			'hide'          => esc_html__( 'Hide', 'construction-field' ),
			'left'          => esc_html__( 'on Top Left', 'construction-field' ),
			'right'         => esc_html__( 'on Top Right', 'construction-field' )
		);
		return apply_filters( 'construction_field_header_top_display_selection', $construction_field_header_top_display_selection );
	}
endif;

/**
 * Feature slider text align
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $construction_field_slider_text_align
 *
 */
if ( !function_exists('construction_field_slider_text_align') ) :
	function construction_field_slider_text_align() {
		$construction_field_slider_text_align =  array(
			'alternate'     => esc_html__( 'Alternate', 'construction-field' ),
			'text-left'     => esc_html__( 'Left', 'construction-field' ),
			'text-right'    => esc_html__( 'Right', 'construction-field' ),
			'text-center'   => esc_html__( 'Center', 'construction-field' )
		);
		return apply_filters( 'construction_field_slider_text_align', $construction_field_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_fs_image_display_options
 *
 */
if ( !function_exists('construction_field_fs_image_display_options') ) :
	function construction_field_fs_image_display_options() {
		$construction_field_fs_image_display_options =  array(
			'full-screen-bg' => esc_html__( 'Full Screen Background', 'construction-field' ),
			'responsive-img' => esc_html__( 'Responsive Image', 'construction-field' )
		);
		return apply_filters( 'construction_field_fs_image_display_options', $construction_field_fs_image_display_options );
	}
endif;

/**
 * Feature Info display Options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_feature_info_display_options
 *
 */
if ( !function_exists('construction_field_feature_info_display_options') ) :
	function construction_field_feature_info_display_options() {
		$construction_field_feature_info_display_options =  array(
			'hide'                  => esc_html__( 'Hide', 'construction-field' ),
			'alternative-info-menu' => esc_html__( 'Alternative Menu', 'construction-field' ),
			'above'                 => esc_html__( 'Above Feature Slider', 'construction-field' ),
			'below'                 => esc_html__( 'Below Feature Slider', 'construction-field' ),
			'absolute'              => esc_html__( 'Absolute Feature Slider', 'construction-field' ),
		);
		return apply_filters( 'construction_field_feature_info_display_options', $construction_field_feature_info_display_options );
	}
endif;

/**
 * Feature Info number
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_feature_info_number
 *
 */
if ( !function_exists('construction_field_feature_info_number') ) :
	function construction_field_feature_info_number() {
		$construction_field_feature_info_number =  array(
			1               => esc_html__( '1', 'construction-field' ),
			2               => esc_html__( '2', 'construction-field' ),
			3               => esc_html__( '3', 'construction-field' ),
			4               => esc_html__( '4', 'construction-field' ),
		);
		return apply_filters( 'construction_field_feature_info_number', $construction_field_feature_info_number );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_footer_copyright_beside_option
 *
 */
if ( !function_exists('construction_field_footer_copyright_beside_option') ) :
	function construction_field_footer_copyright_beside_option() {
		$construction_field_footer_copyright_beside_option =  array(
			'hide'          => esc_html__( 'Hide', 'construction-field' ),
			'social'        => esc_html__( 'Social Links', 'construction-field' ),
			'footer-menu'   => esc_html__( 'Footer Menu', 'construction-field' )
		);
		return apply_filters( 'construction_field_footer_copyright_beside_option', $construction_field_footer_copyright_beside_option );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_sidebar_layout
 *
 */
if ( !function_exists('construction_field_sidebar_layout') ) :
    function construction_field_sidebar_layout() {
        $construction_field_sidebar_layout =  array(
	        'right-sidebar' => esc_html__( 'Right Sidebar', 'construction-field' ),
	        'left-sidebar'  => esc_html__( 'Left Sidebar' , 'construction-field' ),
	        'both-sidebar'  => esc_html__( 'Both Sidebar' , 'construction-field' ),
	        'middle-col'    => esc_html__( 'Middle Column' , 'construction-field' ),
	        'no-sidebar'    => esc_html__( 'No Sidebar', 'construction-field' )
        );
        return apply_filters( 'construction_field_sidebar_layout', $construction_field_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_blog_archive_feature_layout
 *
 */
if ( !function_exists('construction_field_blog_archive_feature_layout') ) :
    function construction_field_blog_archive_feature_layout() {
        $construction_field_blog_archive_feature_layout =  array(
            'left-image'    => esc_html__( 'Show Image', 'construction-field' ),
            'no-image'      => esc_html__( 'No Image', 'construction-field' )
        );
        return apply_filters( 'construction_field_blog_archive_feature_layout', $construction_field_blog_archive_feature_layout );
    }
endif;

/**
 * Blog content from
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_blog_archive_content_from
 *
 */
if ( !function_exists('construction_field_blog_archive_content_from') ) :
	function construction_field_blog_archive_content_from() {
		$construction_field_blog_archive_content_from =  array(
			'excerpt'    => esc_html__( 'Excerpt', 'construction-field' ),
			'content'    => esc_html__( 'Content', 'construction-field' )
		);
		return apply_filters( 'construction_field_blog_archive_content_from', $construction_field_blog_archive_content_from );
	}
endif;

/**
 * Image Size
 *
 * @since Construction Field 1.0.0
 *
 * @param null
 * @return array $construction_field_get_image_sizes_options
 *
 */
if ( !function_exists('construction_field_get_image_sizes_options') ) :
	function construction_field_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'construction-field' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = esc_html__( 'full (original)', 'construction-field' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'construction_field_get_image_sizes_options', $choices );
	}
endif;