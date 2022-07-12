<?php
/**
 * Mednet Block Patterns
 *
 * @package     MedNet
 * @author      Pegah Panahandeh
 * @copyright   2022 Pegah Panahandeh
 *
 * @wordpress-plugin
 * Plugin Name: Mednet Block Patterns
 * Description: list of custom block patterns for UBC Mednet
 * Version:     1.0.0
 * Author:      Pegah Panahandeh
 */

if ( ! defined( 'WPINC' ) ) {
	die();
}

/*
 * Current plugin version
 */
define( 'MBP_VERSION', '1.0.0' );


add_action( 'init', 'mbp_register_assets' );
add_action( 'wp_enqueue_scripts', 'mbp_load_assets' );
add_action( 'enqueue_block_editor_assets', 'mbp_load_editor_assets' );

/**
 * Enqueue assets to frontend pages.
 *
 * @return void
 */
function mbp_load_assets() {
	wp_enqueue_script( 'mbp-front-end-script' );
	wp_enqueue_style( 'mbp-pattern-styles' );
}

/**
 * Enqueue assets for editing.
 *
 * @return void
 */
function mbp_load_editor_assets() {
	wp_enqueue_script( 'mbp-editor-script' );
	wp_enqueue_script( 'mbp-style-variations' );
	wp_enqueue_style( 'mbp-pattern-styles' );
	wp_enqueue_style( 'mbp-editor-styles' );
}

/**
 * Register assets for patterns.
 *
 * @return void
 */
function mbp_register_assets() {
	wp_register_script(
		'mbp-editor-script',
		plugins_url( 'inc/js/editor.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-editor',
			'wp-plugins',
			'wp-edit-post',
		),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/editor.js' ),
		true
	);
	wp_register_script(
		'mbp-front-end-script',
		plugins_url( 'inc/js/front-end.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-plugins',
		),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/front-end.js' ),
		true
	);
	wp_register_script(
		'mbp-style-variations',
		plugins_url( 'inc/js/block-style-variations.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-editor',
			'wp-plugins',
			'wp-edit-post',
		),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/block-style-variations.js' ),
		true
	);
	wp_register_style(
		'mbp-pattern-styles',
		plugins_url( '/inc/css/pattern-styles.css', __FILE__ ),
		array( 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/css/pattern-styles.css' )
	);
	wp_register_style(
		'mbp-editor-styles',
		plugins_url( '/inc/css/editor.css', __FILE__ ),
		array( 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/css/editor.css' )
	);
}


require_once 'inc/patterns.php';
require_once 'inc/categories.php';
