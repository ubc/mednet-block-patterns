<?php
/**
 * Scripts
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
 * MBP_Scripts Class
 *
 * This class handles pattern packages
 *
 * @since 1.0.0
 */
class MBP_Scripts {

	/**
	 * Class constructor
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'mbp_register_assets' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'mbp_load_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'mbp_load_editor_assets' ) );
		add_action( 'after_setup_theme', array( $this, 'remove_core_patterns' ) );
	}

	/**
	 * Enqueue assets to frontend pages.
	 *
	 * @return void
	 */
	public function mbp_load_assets() {
		wp_enqueue_script( 'mbp-front-end-script' );
		wp_enqueue_style( 'mbp-site-styles' );
	}

	/**
	 * Enqueue assets for editing.
	 *
	 * @return void
	 */
	public function mbp_load_editor_assets() {
		wp_enqueue_script( 'mbp-editor-script' );
		wp_enqueue_script( 'mbp-style-variations' );
		wp_enqueue_style( 'mbp-site-styles' );
		wp_enqueue_style( 'mbp-editor-styles' );
	}

	/**
	 * Register assets for patterns.
	 *
	 * @return void
	 */
	public function mbp_register_assets() {
		wp_register_script(
			'mbp-editor-script',
			plugins_url( 'js/editor.js', __FILE__ ),
			array(
				'wp-blocks',
				'wp-i18n',
				'wp-element',
				'wp-editor',
				'wp-plugins',
				'wp-edit-post',
			),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/editor.js' ),
			true
		);
		wp_register_script(
			'mbp-front-end-script',
			plugins_url( 'js/front-end.js', __FILE__ ),
			array(
				'wp-blocks',
				'wp-i18n',
				'wp-element',
				'wp-plugins',
			),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/front-end.js' ),
			true
		);
		wp_register_script(
			'mbp-style-variations',
			plugins_url( 'js/block-style-variations.js', __FILE__ ),
			array(
				'wp-blocks',
				'wp-i18n',
				'wp-element',
				'wp-editor',
				'wp-plugins',
				'wp-edit-post',
			),
			filemtime( plugin_dir_path( __FILE__ ) . 'js/block-style-variations.js' ),
			true
		);
		wp_register_style(
			'mbp-site-styles',
			plugins_url( '/css/public.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . 'css/public.css' )
		);
		wp_register_style(
			'mbp-editor-styles',
			plugins_url( '/css/editor.css', __FILE__ ),
			array( 'wp-editor' ),
			filemtime( plugin_dir_path( __FILE__ ) . 'css/editor.css' )
		);
	}

	/**
	 * Remove core patterns
	 */
	public function remove_core_patterns() {
		remove_theme_support( 'core-block-patterns' );
	}
}
