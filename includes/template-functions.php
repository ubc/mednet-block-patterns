<?php
/**
 * Template Functions
 *
 * @package     MBP
 * @subpackage  Functions/Templates
 * @copyright   Copyright (c) 2022, Graham Douglas
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'mbp_get_patterns_dir' ) ) :
	/**
	 * Returns the path to the MBP patterns directory
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function mbp_get_patterns_dir() {
		return MBP_PLUGIN_DIR . 'patterns';
	}
endif;

if ( ! function_exists( 'mbp_get_patterns_url' ) ) :
	/**
	 * Returns the URL to the MBP patterns directory
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function mbp_get_patterns_url() {
		return MBP_PLUGIN_URL . 'patterns';
	}
endif;
