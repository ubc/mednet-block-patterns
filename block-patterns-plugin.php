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
require_once 'inc/categories.php';


/**
 * Gutenberg scripts and styles
 *
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function be_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor',
		MBPURL . 'inc/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( MBPURL . 'inc/js/editor.js' ),
		true
	);
}

/**
 * Gutenberg scripts and styles
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 */
function myguten_enqueue() {
	wp_enqueue_script(
		'myguten-script',
		plugin_dir_url( __FILE__ ) . 'inc/js/editor.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );

/**
 * Gutenberg script
 */
function wpb_hook_javascript() {
	?>
		<script>
			function closeAlert(){
				document.querySelector('.alert-banner').style.display="none";
			}
			function expandAll(){
					const accordionItems = document.querySelectorAll('.c-accordion__item');
					const accordionContentBlocks = document.querySelectorAll('.c-accordion__content');
					for (let i = 0; i <accordionItems.length; i++) {
						accordionItems[i].classList.add("is-open");
					}
					for (let j = 0; j <accordionContentBlocks.length; j++) {
						accordionContentBlocks[j].style.display="block";
					}
				}
				function collapseAll(){
					const accordionItems = document.querySelectorAll('.c-accordion__item');
					const accordionContentBlocks = document.querySelectorAll('.c-accordion__content');
					for (let i = 0; i <accordionItems.length; i++) {
						accordionItems[i].classList.remove("is-open");
					}
					for (let j = 0; j <accordionContentBlocks.length; j++) {
						accordionContentBlocks[j].style.display="none";
					}
				}
	</script>
	<?php
}
add_action( 'wp_head', 'wpb_hook_javascript' );
