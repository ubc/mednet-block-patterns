<?php
/**
 * Plugin Name: Mednet block patterns
 * Description: Block pattern for block editors
 * Version: 1.0.0
 * Author: Pegah Panahandeh
 *
 * @package MedNet
 */

if ( ! defined( 'WPINC' ) ) {
	die();
}

/*
 * Current plugin version
 */
define( 'MBP_VERSION', '1.0.0' );


/**
 * Plugin URL
 */
define( 'MBPURL', plugin_dir_url( __FILE__ ) );

/**
 * Add styles
 */
function mednet_patterns_add_styles() {
	wp_enqueue_style( 'mbp-styles', MBPURL . 'inc/css/pattern-styles.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'mednet_patterns_add_styles' );
add_action( 'enqueue_block_editor_assets', 'mednet_patterns_add_styles' );


require_once 'inc/patterns.php';
