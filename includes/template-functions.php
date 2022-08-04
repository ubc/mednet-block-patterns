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

/**
 * Returns the path to the MBP patterns directory
 *
 * @since 1.0.0
 * @return string
 */
if ( ! function_exists( 'mbp_get_patterns_dir' ) ) :
	function mbp_get_patterns_dir() {
		return MBP_PLUGIN_DIR . 'patterns';
	}
endif;

/**
 * Returns the URL to the MBP patterns directory
 *
 * @since 1.0.0
 * @return string
 */
if ( ! function_exists( 'mbp_get_patterns_url' ) ) :
	function mbp_get_patterns_url() {
		return MBP_PLUGIN_URL . 'patterns';
	}
endif;
