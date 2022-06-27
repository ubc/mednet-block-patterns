<?php
/**
 * Plugin Name: Mednet block patterns
 * Description: Block pattern for block editors
 * Version: 1.0.0
 * Author: Pegah Panahandeh
 *
 * @package MedNet
 */

/**
 * Register the patterns
 */
function mednet_register_block_patterns() {
	if ( function_exists( 'register_block_pattern' ) ) {
		include 'patterns-content.php';
		$patterns = array(
			'mednet-block-patterns/alert-banner'          => array(
				'title'       => __( 'Alert banner', 'mednet-block-patterns' ),
				'description' => ( 'Alert banner' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $alert_banner,
				'keywords'    => array( 'banner', 'alert' ),
			),
			'mednet-block-patterns/$announcements_block ' => array(
				'title'       => __( 'Announcements Block ', 'mednet-block-patterns' ),
				'description' => ( 'Announcements Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcements_block,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/$announcement_card_large  ' => array(
				'title'       => __( 'Announcement Card (Large)', 'mednet-block-patterns' ),
				'description' => ( 'Large Announcement Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_card_large,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/$announcement_card_small  ' => array(
				'title'       => __( 'Announcement Card (Small)', 'mednet-block-patterns' ),
				'description' => ( 'small Announcement Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_card_small,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/content_card '         => array(
				'title'       => __( 'Content Card ', 'mednet-block-patterns' ),
				'description' => ( 'Content Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $content_card,
				'keywords'    => array( 'image', 'card' ),
			),
			'mednet-block-patterns/three_col_block_with_blue_feature_box ' => array(
				'title'       => __( '3-Column block with blue feature box ', 'mednet-block-patterns' ),
				'description' => ( '3-column block with blue feature box' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $three_col_block_with_blue_feature_box,
				'keywords'    => array( 'column', 'list' ),
			),
			'mednet-block-patterns/blue_feature_blocks '  => array(
				'title'       => __( 'Blue Feature Blocks ', 'mednet-block-patterns' ),
				'description' => ( 'Blue Feature Blocks' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $blue_feature_blocks,
				'keywords'    => array( 'column' ),
			),
			'mednet-block-patterns/announcement_feed_small ' => array(
				'title'       => __( 'Announcement Feed (Small)', 'mednet-block-patterns' ),
				'description' => ( 'Announcement Feed (Small)' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_feed_small,
				'keywords'    => array( 'query' ),
			),
			'mednet-block-patterns/$all_announcements_page' => array(
				'title'       => __( 'All Announcements Page', 'mednet-block-patterns' ),
				'description' => ( 'All Announcements Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $all_announcements_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$what_is_new_page'     => array(
				'title'       => __( 'What Is New Page', 'mednet-block-patterns' ),
				'description' => ( 'What Is New Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $what_is_new_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$ubc_broadcast_page'   => array(
				'title'       => __( 'UBC Broadcast Page', 'mednet-block-patterns' ),
				'description' => ( 'UBC Broadcast Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $ubc_broadcast_page,
				'keywords'    => array( 'page' ),
			),
		);

		foreach ( $patterns as $slug => $props ) {
			register_block_pattern( $slug, $props );
		}
	}
}

add_action( 'init', 'mednet_register_block_patterns' );
