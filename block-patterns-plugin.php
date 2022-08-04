<?php
/**
 * MedNet Block Patterns
 *
 * @package     MedNet
 * @author      Graham Douglas <graham.douglas@ubc.ca>
 * @copyright   2022 University of British Columbia Faculty of Medicine
 *
 * @wordpress-plugin
 * Plugin Name: MedNet Block Patterns
 * Description: Custom block patterns and site changes for UBC MedNet.
 * Version:     1.0.0
 * Author:      Graham Douglas
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'MedNet_Block_Patterns' ) ) :

	/**
	 * Main MedNet_Block_Patterns Class.
	 *
	 * @since 1.0
	 */
	final class MedNet_Block_Patterns {

		/**
		 * Singleton instance.
		 *
		 * @var MedNet_Block_Patterns MedNet Block Patterns
		 * @since 1.0
		 */
		private static $instance;

		/**
		 * Setup and register mednet block patterns and styles.
		 *
		 * @var MedNet_Block_Patterns MedNet Block Patterns
		 * @since 1.0
		 */
		public $mbp_pattern_packages;

		/**
		 * Main MedNet_Block_Patterns Instance.
		 *
		 * Insures that only one instance of MedNet_Block_Patterns exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @since 1.0
		 * @static
		 * @static var array $instance
		 * @uses MedNet_Block_Patterns::setup_constants() Setup the constants needed.
		 * @uses MedNet_Block_Patterns::includes() Include the required files.
		 * @see MBP()
		 * @return object|MedNet_Block_Patterns The MedNet_Block_Patterns singleton.
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof MedNet_Block_Patterns ) ) {
				self::$instance = new MedNet_Block_Patterns();
				self::$instance->setup_constants();
				self::$instance->includes();

				$MBP_Pattern_Packages = new MBP_Pattern_Packages();
				$MBP_Scripts          = new MBP_Scripts();
				$MBP_Categories       = new MBP_Category_Manager();

				self::$instance->pattern_packages = $MBP_Pattern_Packages->get_page_patterns();
				register_activation_hook( __FILE__, array( self::$instance, 'mbp_on_plugin_activation' ) );

			}

			return self::$instance;
		}

		/**
		 * Throw error on object clone.
		 *
		 * The whole idea of the singleton design pattern is that there is a single
		 * object therefore, we don't want the object to be cloned.
		 *
		 * @since 1.0
		 * @access protected
		 * @return void
		 */
		public function __clone() {
			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_html( __( 'Cheatin&#8217; huh?', 'mednet-block-patterns' ) ), '1.0' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @since 1.0
		 * @access protected
		 * @return void
		 */
		public function __wakeup() {
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_html( __( 'Cheatin&#8217; huh?', 'mednet-block-patterns' ) ), '1.0' );
		}

		/**
		 * Setup plugin constants.
		 *
		 * @access private
		 * @since 1.0
		 * @return void
		 */
		private function setup_constants() {

			// Plugin version.
			if ( ! defined( 'MBP_VERSION' ) ) {
				define( 'MBP_VERSION', '1.0.0' );
			}

			// Plugin Folder Path.
			if ( ! defined( 'MBP_PLUGIN_DIR' ) ) {
				define( 'MBP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}

			// Plugin Folder URL.
			if ( ! defined( 'MBP_PLUGIN_URL' ) ) {
				define( 'MBP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}

			// Plugin Root File.
			if ( ! defined( 'MBP_PLUGIN_FILE' ) ) {
				define( 'MBP_PLUGIN_FILE', __FILE__ );
			}

			$mbp_upload_dir = wp_upload_dir();

			// WordPress Uploads Basedir.
			if ( ! defined( 'MBP_WP_BASEDIR' ) ) {
				define( 'MBP_WP_BASEDIR', $mbp_upload_dir['basedir'] );
			}

			// WordPress Uploads Baseurl.
			if ( ! defined( 'MBP_WP_BASEURL' ) ) {
				define( 'MBP_WP_BASEURL', $mbp_upload_dir['baseurl'] );
			}

		}

		/**
		 * Include required files.
		 *
		 * @access private
		 * @since 1.0
		 * @return void
		 */
		private function includes() {

			require_once MBP_PLUGIN_DIR . 'includes/template-functions.php';
			require_once MBP_PLUGIN_DIR . 'includes/class-pattern-packages.php';
			require_once MBP_PLUGIN_DIR . 'includes/class-blocks-manager.php'; // add block styles in this file.
			require_once MBP_PLUGIN_DIR . 'includes/class-category-manager.php';
			require_once MBP_PLUGIN_DIR . 'includes/class-patterns-manager.php';
			require_once MBP_PLUGIN_DIR . 'includes/class-scripts.php';

		}

	}

endif; // End if class_exists check.

if ( ! function_exists( 'mednet_block_patterns' ) ) :
	/**
	 * The main function for that returns MedNet_Block_Patterns
	 *
	 * @since 1.0
	 * @return object|MedNet_Block_Patterns The one true mednet_Block_Patterns Instance.
	 */
	function mednet_block_patterns() {
		return MedNet_Block_Patterns::instance();
	}
endif;

// Get MBP Running.
$mbp_instance = mednet_block_patterns();
