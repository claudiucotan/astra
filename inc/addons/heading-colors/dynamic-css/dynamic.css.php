<?php
/**
 * Heading Colors - Dynamic CSS
 *
 * @package Astra
 * @since x.x.x
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Heading Colors
 */
add_filter( 'astra_dynamic_theme_css', 'astra_heading_colors_section_dynamic_css' );

/**
 * Dynamic CSS
 *
 * @param  string $dynamic_css          Astra Dynamic CSS.
 * @param  string $dynamic_css_filtered Astra Dynamic CSS Filters.
 * @return String Generated dynamic CSS for Heading Colors.
 *
 * @since x.x.x
 */
function astra_heading_colors_section_dynamic_css( $dynamic_css, $dynamic_css_filtered = '' ) {

	/**
	 * Heading Colors - h1 - h6.
	 */
	$heading_base_color = astra_get_option( 'heading-base-color' );

	/**
	 * Normal Colors without reponsive option.
	 * [1]. Heading Colors
	 */
	$css_output = array(

		/**
		 * Content base heading color.
		 */
		'.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6' => array(
			'color' => esc_attr( $heading_base_color ),
		),
	);

	/* Parse CSS from array() */
	$css_output = astra_parse_css( $css_output );

	$dynamic_css .= $css_output;

	return $dynamic_css;
}