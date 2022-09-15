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
		add_action( 'init', array( $this, 'set_filters' ) );
		add_action( 'admin_init', array( $this, 'remove_block_directory' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'mbp_load_assets' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'mbp_load_editor_assets' ) );
		add_action( 'after_setup_theme', array( $this, 'remove_core_patterns' ) );
		add_action( 'after_setup_theme', array( $this, 'add_theme_supports' ), 100 );
		add_action( 'after_setup_theme', array( $this, 'set_editor_font_sizes' ) );
		add_action( 'admin_menu', array( $this, 'config_cms_menu' ) );
	}

	/**
	 * Set sitewide filters to improve the editing experience.
	 *
	 * @return void
	 */
	public function set_filters() {
		add_filter( 'should_load_remote_block_patterns', '__return_false' ); //don't use the pattern catalogue.
	}
	/**
	 * Remove or add menu items in the editor
	 *
	 * @return void
	 */
	public function config_cms_menu() {
		remove_menu_page('link-manager.php');
	}
	/**
	 * Disable the block editor directory
	 *
	 * @return void
	 */
	public function remove_block_directory() {
		remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );
		remove_action( 'enqueue_block_editor_assets', 'gutenberg_enqueue_block_editor_assets_block_directory' );
	}
	/**
	 * Enqueue assets to frontend pages.
	 *
	 * @return void
	 */
	public function mbp_load_assets() {
		wp_enqueue_script( 'mbp-front-end-script' );
		wp_enqueue_style( 'mbp-public-styles' );
	}

	/**
	 * Enqueue assets for editing.
	 *
	 * @return void
	 */
	public function mbp_load_editor_assets() {
		wp_enqueue_script( 'mbp-editor-script' );
		wp_enqueue_script( 'mbp-style-variations' );

		wp_enqueue_style( 'mbp-variables-styles' );
		wp_enqueue_style( 'mbp-site-styles' );
		wp_enqueue_style( 'mbp-editor-styles' );
		wp_enqueue_style( 'mbp-pattern-styles' );
		wp_enqueue_style( 'mbp-variation-styles' );
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
			array(),
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
			'mbp-public-styles',
			plugins_url( 'css/public.css', __FILE__ ),
			array(),
			filemtime( plugin_dir_path( __FILE__ ) . 'css/public.css' )
		);
	}

	/**
	 * Remove core patterns
	 */
	public function remove_core_patterns() {
		remove_theme_support( 'core-block-patterns' );
	}
	/**
	 * Add options for giving the user more editing control
	 *
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/ Opt-in documentation
	 */
	public function add_theme_supports() {

		add_theme_support( 'align-wide' );
		add_theme_support( 'line-height' );
		add_theme_support( 'spacing' );
		add_theme_support( 'custom-spacing' );
		add_theme_support( 'appearance-tools' );
		add_theme_support( 'responsive-embeds' );

	}

	/**
	 * Configure the editor font options
	 *
	 * @return void
	 */
	public function set_editor_font_sizes() {

		$font_sizes = array(
			array(
				'name' => 'Smallest',
				'size' => '0.75rem',
				'slug' => 'smallest',
			),
			array(
				'name' => 'Small',
				'size' => '0.875rem',
				'slug' => 'small',
			),
			array(
				'name' => 'Default',
				'size' => '1rem',
				'slug' => 'default',
			),
			array(
				'name' => 'Callout',
				'size' => '1.09375rem',
				'slug' => 'callout',
			),
			array(
				'name' => 'Larger',
				'size' => '1.25rem',
				'slug' => 'larger',
			),
			array(
				'name' => 'Large',
				'size' => '1.5rem',
				'slug' => 'large',
			),
			array(
				'name' => 'Really Large',
				'size' => '1.75rem',
				'slug' => 'really-large',
			),
			array(
				'name' => 'Extra Large',
				'size' => '2rem',
				'slug' => 'xlarge',
			),
			array(
				'name' => 'XX Large',
				'size' => '2.25rem',
				'slug' => 'xxlarge',
			),
			array(
				'name' => 'Biggest',
				'size' => '2.5rem',
				'slug' => 'biggest',
			),
		);
		add_theme_support( 'editor-font-sizes', $font_sizes );
	}
}
