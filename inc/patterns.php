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
			'mednet-block-patterns/alert-banner'           => array(
				'title'       => __( 'Alert banner', 'mednet-block-patterns' ),
				'description' => ( 'Alert banner' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $alert_banner,
				'keywords'    => array( 'banner', 'alert' ),
			),
			'mednet-block-patterns/$announcements_block '  => array(
				'title'       => __( 'Announcements Block ', 'mednet-block-patterns' ),
				'description' => ( 'Announcements Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcements_block,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/$announcement_card_large' => array(
				'title'       => __( 'Announcement Card (Large)', 'mednet-block-patterns' ),
				'description' => ( 'Large Announcement Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_card_large,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/$announcement_card_small' => array(
				'title'       => __( 'Announcement Card (Small)', 'mednet-block-patterns' ),
				'description' => ( 'small Announcement Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_card_small,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/content_card '          => array(
				'title'       => __( 'Content Card ', 'mednet-block-patterns' ),
				'description' => ( 'Content Card' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $content_card,
				'keywords'    => array( 'image', 'card' ),
			),
			'mednet-block-patterns/content_card_with_overlay ' => array(
				'title'       => __( 'Content Card With Overlay ', 'mednet-block-patterns' ),
				'description' => ( 'Content Card With Overlay' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $content_card_with_overlay,
				'keywords'    => array( 'image', 'card' ),
			),
			'mednet-block-patterns/three_col_block_with_blue_feature_box' => array(
				'title'       => __( '3-Column block with blue feature box', 'mednet-block-patterns' ),
				'description' => ( '3-column block with blue feature box' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $three_col_block_with_blue_feature_box,
				'keywords'    => array( 'column', 'list' ),
			),
			'mednet-block-patterns/blue_feature_blocks'    => array(
				'title'       => __( 'Blue Feature Blocks ', 'mednet-block-patterns' ),
				'description' => ( 'Blue Feature Blocks' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $blue_feature_blocks,
				'keywords'    => array( 'column' ),
			),
			'mednet-block-patterns/announcement_feed_small' => array(
				'title'       => __( 'Announcement Feed (Small)', 'mednet-block-patterns' ),
				'description' => ( 'Announcement Feed (Small)' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $announcement_feed_small,
				'keywords'    => array( 'query' ),
			),
			'mednet-block-patterns/quick_link_list'        => array(
				'title'       => __( 'Quick Link List', 'mednet-block-patterns' ),
				'description' => ( 'Quick Link List' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $quick_link_list,
				'keywords'    => array( 'link', 'list' ),
			),
			'mednet-block-patterns/featured_resource'      => array(
				'title'       => __( 'Featured Resource', 'mednet-block-patterns' ),
				'description' => ( 'Featured Resource' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $featured_resource,
				'keywords'    => array( 'text' ),
			),
			'mednet-block-patterns/events_list'            => array(
				'title'       => __( 'Events List', 'mednet-block-patterns' ),
				'description' => ( 'Events List' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $events_list,
				'keywords'    => array( 'text', 'events' ),
			),
			'mednet-block-patterns/spotlight_cards'        => array(
				'title'       => __( 'Spotlight Cards  ', 'mednet-block-patterns' ),
				'description' => ( 'Spotlight Cards' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $spotlight_cards,
				'keywords'    => array( 'query', 'spotlight' ),
			),
			'mednet-block-patterns/contact_block'          => array(
				'title'       => __( 'Contact Block', 'mednet-block-patterns' ),
				'description' => ( 'Contact Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $contact_block,
				'keywords'    => array( 'card' ),
			),
			'mednet-block-patterns/accordion_block'        => array(
				'title'       => __( 'Accordion Block', 'mednet-block-patterns' ),
				'description' => ( 'Accordion Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $accordion_block,
				'keywords'    => array( 'accordion' ),
			),
			'mednet-block-patterns/table_option_1'         => array(
				'title'       => __( 'Table Option 1', 'mednet-block-patterns' ),
				'description' => ( 'Table Option 1' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $table_option_1,
				'keywords'    => array( 'table' ),
			),
			'mednet-block-patterns/table_option_2'         => array(
				'title'       => __( 'Table Option 2  ', 'mednet-block-patterns' ),
				'description' => ( 'Table Option 2' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $table_option_2,
				'keywords'    => array( 'table' ),
			),
			'mednet-block-patterns/video_block'            => array(
				'title'       => __( 'Video Block', 'mednet-block-patterns' ),
				'description' => ( 'Video Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $video_block,
				'keywords'    => array( 'table' ),
			),
			'mednet-block-patterns/navigation_list_with_icons' => array(
				'title'       => __( 'Navigation List With Icons', 'mednet-block-patterns' ),
				'description' => ( 'Navigation List With Icons' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $navigation_list_with_icons,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/pathways_feature_block' => array(
				'title'       => __( 'Pathways Feature Block', 'mednet-block-patterns' ),
				'description' => ( 'Pathways Feature Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $pathways_feature_block,
				'keywords'    => array( 'block', 'image' ),
			),
			'mednet-block-patterns/quick_links_one_col '   => array(
				'title'       => __( 'Quick Links One Column', 'mednet-block-patterns' ),
				'description' => ( 'Quick Links One Column' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $quick_links_one_col,
				'keywords'    => array( 'block', 'image' ),
			),
			'mednet-block-patterns/quick_links_two_columns' => array(
				'title'       => __( 'Quick Links Two Column', 'mednet-block-patterns' ),
				'description' => ( 'Quick Links Two Column' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $quick_links_two_columns,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/quick_links_three_columns' => array(
				'title'       => __( 'Quick Links Three Column', 'mednet-block-patterns' ),
				'description' => ( 'Quick Links Three Column' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $quick_links_three_columns,
				'keywords'    => array( 'list' ),
			),
			'mednet-block-patterns/sidebar_block'          => array(
				'title'       => __( 'Sidebar Block', 'mednet-block-patterns' ),
				'description' => ( 'Sidebar Block' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $sidebar_block,
				'keywords'    => array( 'block' ),
			),
			'mednet-block-patterns/pathway_pages'          => array(
				'title'       => __( 'Pathway Pages', 'mednet-block-patterns' ),
				'description' => ( 'Pathway Pages' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $pathway_pages,
				'keywords'    => array( 'columns' ),
			),
			'mednet-block-patterns/overview_pages'         => array(
				'title'       => __( 'Overview Pages', 'mednet-block-patterns' ),
				'description' => ( 'Overview Pages' ),
				'categories'  => array( 'MedNet_Components' ),
				'content'     => $overview_pages,
				'keywords'    => array( 'columns' ),
			),
			'mednet-block-patterns/$all_announcements_page' => array(
				'title'       => __( 'All Announcements Page', 'mednet-block-patterns' ),
				'description' => ( 'All Announcements Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $all_announcements_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$what_is_new_page'      => array(
				'title'       => __( 'What Is New Page', 'mednet-block-patterns' ),
				'description' => ( 'What Is New Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $what_is_new_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$ubc_broadcast_page'    => array(
				'title'       => __( 'UBC Broadcast Page', 'mednet-block-patterns' ),
				'description' => ( 'UBC Broadcast Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $ubc_broadcast_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$welcome_to_mednet_page' => array(
				'title'       => __( 'Welcome To MedNet Page', 'mednet-block-patterns' ),
				'description' => ( 'Welcome To MedNet Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $welcome_to_mednet_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$room_booking_page'     => array(
				'title'       => __( 'Room Booking Page', 'mednet-block-patterns' ),
				'description' => ( 'Room Booking Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $room_booking_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$icon_page'             => array(
				'title'       => __( 'Icon Page ', 'mednet-block-patterns' ),
				'description' => ( 'Icon Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $icon_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$educational_activity_form_page' => array(
				'title'       => __( 'Educational Activity Form & Resources page', 'mednet-block-patterns' ),
				'description' => ( 'Educational Activity Form & Resources Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $educational_activity_form_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$services_resources_page' => array(
				'title'       => __( 'Services & Resources Page', 'mednet-block-patterns' ),
				'description' => ( 'Services & Resources Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $services_resources_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$facilities_page'       => array(
				'title'       => __( 'Facilities Page', 'mednet-block-patterns' ),
				'description' => ( 'Facilities Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $facilities_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$staff_spotlight_page'  => array(
				'title'       => __( 'Staff Spotlight Page', 'mednet-block-patterns' ),
				'description' => ( 'Staff Spotlight Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $staff_spotlight_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$spotlight_title_with_big_bio_photo_page' => array(
				'title'       => __( 'Spotlight Title With Big Bio Photo Page', 'mednet-block-patterns' ),
				'description' => ( 'Spotlight Title With Big Bio Photo Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $spotlight_title_with_big_bio_photo_page,
				'keywords'    => array( 'page' ),
			),
			'mednet-block-patterns/$spotlight_title_with_side_by_side_bio_page' => array(
				'title'       => __( 'Spotlight Title With Side By Side Bio Page', 'mednet-block-patterns' ),
				'description' => ( 'Spotlight Title With Side By Side Bio Page' ),
				'categories'  => array( 'MedNet_Page_Pattern' ),
				'content'     => $spotlight_title_with_side_by_side_bio_page,
				'keywords'    => array( 'page' ),
			),
		);

		foreach ( $patterns as $slug => $props ) {
			register_block_pattern( $slug, $props );
		}
	}
}

add_action( 'init', 'mednet_register_block_patterns' );
