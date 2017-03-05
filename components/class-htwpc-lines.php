<?php
/**
 * CLASS: HTWPC_Lines
 *
 * Contains Lines for the call outs.
 *
 * @since 	1.0.0
 * @package HTWPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Be safe.
if ( ! class_exists( 'HTWPC_Lines' ) ) {
	/**
	 * HTWPC_Lines.
	 *
	 * Listing all the call-outs lines text.
	 *
	 * @since 1.0.0
	 */
	class HTWPC_Lines {
		/**
		 * Function: Text.
		 *
		 * @since 1.0.0
		 */
		public static function lines() {
			// Array of dynamic text.
			$members = array (
				'Awais'       => 'MrAhmadAwais',
				'Roy'         => 'royboy789',
				'Chris'       => 'ChrisFlanny',
				'Nick'        => 'nickadamstv',
				'Matt'        => 'learnwithmattc',
				'Josh'        => 'Josh412',
				'Jean'        => 'jfarsen',
				'Maxime'      => 'maximejobin',
				'Brian'       => 'brianrotsztein',
				'Lucas'       => 'lchski',
				'Shawn'       => 'shawnhooper',
				'Christopher' => 'thisismyurl',
				'Theresa'     => 'mindsqueezecrea',
				'Meagan'      => 'mhanes',
				'Carl'        => 'twigpress',
				'Chris'       => 'chriswiegman',
				'Jason'       => 'gopostmatic',
				'Jesse'       => 'jpetersen',
				'Kate'        => '2fishweb',
				'Awais'       => 'MrAhmadAwais',
				'Michele'     => 'Michele_Butcher',
				'Shelly'      => 'SpinBird',
				'Adam'        => 'wpmodder',
				// 'Jordan'   => 'jrdn_qntl', // No Twitter account.
				// 'Andrew'   => 'bamadesigner', // No Twitter account.
			);

			// Loop through to build a line.
			foreach ( $members as $name => $twitter_username ) {
				// Build an array element.
				$htwpc_array[] = 'Have you said <a target="_blank" href="https://twitter.com/home?status=%F0%9F%99%8C%20I%20don\'t%20say%20Hi%20to%20%40' . $twitter_username . '%20enough.%20So...%20%23Hi' . $name . '%20%0A%0A%0Ah/t%20%40MrAhmadAwais%20%40TheWPCrowd%20%23HiTWPC">#Hi' . $name . '</a> today?';
			}

			// And then randomly choose a line.
			return wptexturize( $htwpc_array[ mt_rand( 0, count( $htwpc_array ) - 1 ) ] );
		} // End function().
	} // End class.
} // End if().


