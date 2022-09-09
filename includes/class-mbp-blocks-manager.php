<?php
/**
 * Block Manager
 *
 * @package     MBP
 * @copyright   Copyright (c) 2022, Graham Douglas
 * @since       1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * MBP_Blocks_Manager Class
 *
 * Handle block manipulation.
 *
 * @since 1.0.0
 */
class MBP_Blocks_Manager {
	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'mbp_register_block_styles' ) );
	}

	/**
	 * Register block styles
	 *
	 * @return void
	 */
	public static function mbp_register_block_styles() {

		if ( ! function_exists( 'register_block_style' ) ) {
			return;
		}
		wp_register_style(
			'mbp-variables-styles',
			plugins_url( '/css/variables.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . '/css/variables.css' )
		);
		wp_register_style(
			'mbp-site-styles',
			plugins_url( '/css/site.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . '/css/site.css' )
		);
		wp_register_style(
			'mbp-pattern-styles',
			plugins_url( '/css/pattern-styles.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . '/css/pattern-styles.css' )
		);
		wp_register_style(
			'mbp-variation-styles',
			plugins_url( '/css/style-variations.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . '/css/style-variations.css' )
		);
		wp_register_style(
			'mbp-editor-styles',
			plugins_url( '/css/editor.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . '/css/editor.css' )
		);

	}

}

new MBP_Blocks_Manager();
