<?php
/**
 * Description: Add new categories for block patterns
 *
 * @package MedNet
 */

/**
 * Register MedNet category
 */
function mednet_register_block_categories() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'MedNet_Components',
			array( 'label' => _x( 'MedNet Components', 'Block pattern category', 'textdomain' ) )
		);

		register_block_pattern_category(
			'MedNet_Page_Pattern',
			array( 'label' => _x( 'Mednet Page Patterns', 'Block pattern category', 'textdomain' ) )
		);

	}
}
add_action( 'init', 'mednet_register_block_categories' );
