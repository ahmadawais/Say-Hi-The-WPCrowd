<?php
/**
 * Plugin Name: Say Hi to TheWPCrowd #HiTWPC
 * Plugin URI: http://AhmadAwais.com/
 * Description: Say #Hi to the members of `TheWPCrowd`.
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package HTWPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'HTWPC_VERSION' ) ) {
    define( 'HTWPC_VERSION', '1.0.0' );
}

if ( ! defined( 'HTWPC_NAME' ) ) {
    define( 'HTWPC_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('HTWPC_DIR' ) ) {
    define( 'HTWPC_DIR', WP_PLUGIN_DIR . '/' . HTWPC_NAME );
}

if ( ! defined('HTWPC_URL' ) ) {
    define( 'HTWPC_URL', WP_PLUGIN_URL . '/' . HTWPC_NAME );
}

/**
 * Initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( HTWPC_DIR . '/components/init.php' ) ) {
    require_once( HTWPC_DIR . '/components/init.php' );
}
