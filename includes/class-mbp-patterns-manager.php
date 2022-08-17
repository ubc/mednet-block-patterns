<?php
/**
 * Pattern Manager
 *
 * @package     MBP
 * @since       1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * MedNet Block Pattern Manager.
 *
 * Handle and register block patterns.
 *
 * @since 1.0.0
 */
class MBP_Patterns_Manager {
	/**
	 * Class constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'mbp_register_block_patterns' ), 9 );

	}

	/**
	 * Register all block patterns in an array
	 *
	 * @return void
	 */
	public function mbp_register_block_patterns() {

		if ( ! function_exists( 'register_block_pattern_category' ) || ! function_exists( 'register_block_pattern' ) ) {
			return;
		}

		global $mbp_instance;
		$mbp_prefix = 'mbp-';
		$patterns   = $mbp_instance->pattern_packages;
		foreach ( $patterns as $pattern_key => $pattern_data ) {
			$pattern_name = $mbp_prefix . '/' . $pattern_key;
			$this->mbp_register_block_pattern( $pattern_name, $pattern_data );
		}
	}

	/**
	 * Register provided data as a block pattern
	 *
	 * @param string $pattern_name The patterns name.
	 * @param array  $pattern_data The title, description, content, categories, keywords and viewoportwidth of the pattern.
	 * @return void
	 */
	public function mbp_register_block_pattern( $pattern_name, $pattern_data ) {

		$data = array(
			'title'         => $pattern_data['title'],
			'description'   => $pattern_data['description'],
			'content'       => $this->get_block_pattern_markup( $pattern_data['file_content'] ),
			'categories'    => $pattern_data['categories'],
			'keywords'      => $pattern_data['keywords'],
			'viewportWidth' => $pattern_data['viewportWidth'],
			'blockTypes'      => $pattern_data['blockTypes'],
		);
		register_block_pattern( $pattern_name, $data );

	}
	/**
	 * Get the content of a file for the pattern content
	 *
	 * @param string $path location of the file.
	 * @return string
	 */
	public static function get_block_pattern_markup( $path ) {
		if ( ! $path ) {
			return;
		}

		ob_start();
		include $path;
		return ob_get_clean();

	}

}


new MBP_Patterns_Manager();
