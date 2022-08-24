<?php
/**
 * MedNet Block Patterns
 *
 * @package     MedNet
 * @author      Graham Douglas <graham.douglas@ubc.ca>
 * @copyright   2022 University of British Columbia Faculty of Medicine
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'MBP_Category_Manager' ) ) :
	/**
	 * Category_Manager Class
	 *
	 * This class handles pattern packages
	 *
	 * @since 1.0.0
	 */
	class MBP_Category_Manager {

		/**
		 * Define and set the categories.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'mednet_register_block_categories' ) );
		}

		/**
		 * Define default pattern categories
		 *
		 * @since 1.0.0
		 * @return array
		 */
		public function get_pattern_categories() {

			$pattern_categories = array(
				'text' => array(
					'slug' => 'MedNet_Text',
					'text' => 'Text',
				),
				'links_lists' => array(
					'slug' => 'MedNet_Links_Lists',
					'text' => 'Lists and Links',
				),
				'components'  => array(
					'slug' => 'MedNet_Components',
					'text' => 'Components',
				),
				'layouts'     => array(
					'slug' => 'MedNet_Page_Layouts',
					'text' => 'Page Layouts',
				),
				'pages'       => array(
					'slug' => 'MedNet_Page_Pattern',
					'text' => 'Page Patterns',
				),
				'posts'       => array(
					'slug' => 'MedNet_Post_Pattern',
					'text' => 'Post Patterns',
				),
				'demo'        => array(
					'slug' => 'MedNet_Demo_Pattern',
					'text' => 'MedNet Demo Patterns',
				),
				'demo'      => array(
					'slug' => 'MedNet_Demo_Pattern',
					'text' => 'MedNet Demo Patterns',
				),
			);

			return $pattern_categories;

		}

		/**
		 * Register the MedNet block pattern categories.
		 *
		 * @since 1.0.0
		 * @var $categories array
		 */
		public function mednet_register_block_categories() {
			$categories = $this->get_pattern_categories();
			foreach ( $categories as $c ) {
				register_block_pattern_category( $c['slug'], array( 'label' => $c['text'] ) );
			}
		}
	}
endif;
