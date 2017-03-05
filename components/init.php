<?php
/**
 * Initializer
 *
 * Initializes the plugin componenets.
 *
 * @since 	1.0.0
 * @package HTWPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * CLASS: HTWPC_Lines.
 *
 * @since 1.0.0
 */
if ( file_exists( HTWPC_DIR . '/components/class-htwpc-lines.php' ) ) {
    require_once( HTWPC_DIR . '/components/class-htwpc-lines.php' );
}

/**
 * Style.
 *
 * @since 1.0.0
 */
if ( file_exists( HTWPC_DIR . '/components/style.php' ) ) {
    require_once( HTWPC_DIR . '/components/style.php' );
}

// Make sure the function is unique.
if ( ! function_exists( 'htwpc_init' ) ) {
	// Hook.
	add_action( 'admin_notices', 'htwpc_init' );

	/**
	 * Intialize the plugin.
	 *
	 * @since 1.0.0
	 */
	function htwpc_init() {
		// Choose a random line.
		$htwpc_line = HTWPC_Lines::lines();

		// Print the line as an admin notice.
		echo "<p id='htwpc'>$htwpc_line</p>";
	} // End function().
} // End if().

