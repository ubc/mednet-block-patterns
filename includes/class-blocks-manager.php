<?php

/* ---------------------------------------------------------------------------------------------
   BLOCKS MANAGER CLASS
   Handles block styles.
------------------------------------------------------------------------------------------------ */

if ( ! class_exists( 'MBP_Blocks_Manager' ) ) :
	class MBP_Blocks_Manager {

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
				'mbp-site-styles',
				plugins_url( '/css/public.css', __FILE__ ),
				array( 'wp-editor' ),
				filemtime( plugin_dir_path( __FILE__ ) . '/css/public.css' )
			);
			wp_register_style(
				'mbp-editor-styles',
				plugins_url( '/css/editor.css', __FILE__ ),
				array( 'wp-editor' ),
				filemtime( plugin_dir_path( __FILE__ ) . '/css/editor.css' )
			);

		}

	}

endif;

new MBP_Blocks_Manager();
