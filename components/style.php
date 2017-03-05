<?php
/**
 * Styles
 *
 * Styles for the plugin.
 *
 * @since 	1.0.0
 * @package HTWPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Make sure the function is unique.
if ( ! function_exists( 'htwpc_styles' ) ) {
	// Hook it.
	add_action( 'admin_head', 'htwpc_styles' );

	/**
	 * Styles.
	 *
	 * @since 1.0.0
	 */
	function htwpc_styles() {
		// This makes sure that the positioning is also good for right-to-left languages.
		$x = is_rtl() ? 'left' : 'right';

		// No file needed for CSS this small.
		echo "
		<style type='text/css'>
			#htwpc {
				float: $x;
				padding-$x: 15px;
				padding-top: 5px;
				margin: 0;
				font-size: 11px;
			}
		</style>
		";
	} // End fucntion().
} // End if().
