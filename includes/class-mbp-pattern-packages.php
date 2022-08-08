<?php
/**
 * Pattern Packages
 *
 * @package     MBP
 * @since       1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * MBP_Pattern_Packages Class
 *
 * This class handles pattern packages
 *
 * @since 1.0.0
 */
class MBP_Pattern_Packages {

	/**
	 * Get things going
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// silence.
	}

	/**
	 * Define default pattern packages
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_page_patterns() {

		$block_patterns = array(
			'mednet-block-patterns/alert-banner'           => array(
				'slug'           => 'alert-banner',
				'pattern_class'  => 'mbp-pattern-alert-banner',
				'title'          => __( 'Alert banner', 'mednet-block-patterns' ),
				'description'    => __( 'Alert banner', 'mbp-block-patterns' ),
				'categories'     => array( 'MedNet_Components' ),
				'keywords'       => array( 'banner', 'alert' ),
				'viewportWidth'  => 1200,
				'file_content'   => MBP_PLUGIN_DIR . 'patterns/components/alert_banner.php',
				'viewportHeight' => 250,
			),
			'mednet-block-patterns/announcements_block'    => array(
				'slug'          => 'announcements_block',
				'pattern_class' => 'mbp-pattern-announcements_block',
				'title'         => __( 'Announcements Block', 'mednet-block-patterns' ),
				'description'   => __( 'Announcements Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/announcements_block.php',
			),
			'mednet-block-patterns/announcement_card_large' => array(
				'slug'          => 'announcement_card_large',
				'pattern_class' => 'mbp-pattern-announcement_card_large',
				'title'         => __( 'Announcement Card (Large)', 'mednet-block-patterns' ),
				'description'   => __( 'Large Announcement Card', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/announcement_card_large.php',
			),
			'mednet-block-patterns/announcement_card_small' => array(
				'slug'          => 'announcement_card_small',
				'pattern_class' => 'mbp-pattern-announcement_card_small',
				'title'         => __( 'Announcement Card (Small)', 'mednet-block-patterns' ),
				'description'   => __( 'small Announcement Card', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/announcement_card_small.php',
			),
			'mednet-block-patterns/content_card'           => array(
				'slug'          => 'content_card',
				'pattern_class' => 'mbp-pattern-content_card',
				'title'         => __( 'Content Card', 'mednet-block-patterns' ),
				'description'   => __( 'Content Card', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'image', 'card' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/content_card.php',
			),
			'mednet-block-patterns/content_card_with_overlay' => array(
				'slug'          => 'content_card_with_overlay',
				'pattern_class' => 'mbp-pattern-content_card_with_overlay',
				'title'         => __( 'Content Card With Overlay', 'mednet-block-patterns' ),
				'description'   => __( 'Content Card With Overlay', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'image', 'card' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/content_card_with_overlay.php',
			),
			'mednet-block-patterns/three_col_block_with_blue_feature_box' => array(
				'slug'          => 'three_col_block_with_blue_feature_box',
				'pattern_class' => 'mbp-pattern-three_col_block_with_blue_feature_box',
				'title'         => __( '3-Column block with blue feature box', 'mednet-block-patterns' ),
				'description'   => __( '3-column block with blue feature box', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'column', 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/three_col_block_with_blue_feature_box.php',
			),
			'mednet-block-patterns/blue_feature_blocks'    => array(
				'slug'          => 'blue_feature_blocks',
				'pattern_class' => 'mbp-pattern-blue_feature_blocks',
				'title'         => __( 'Blue Feature Blocks ', 'mednet-block-patterns' ),
				'description'   => __( 'Blue Feature Blocks', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'column' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/blue_feature_blocks.php',
			),
			'mednet-block-patterns/announcement_feed_small' => array(
				'slug'          => 'announcement_feed_small',
				'pattern_class' => 'mbp-pattern-announcement_feed_small',
				'title'         => __( 'Announcement Feed (Small)', 'mednet-block-patterns' ),
				'description'   => __( 'Announcement Feed (Small)', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'query' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/announcement_feed_small.php',
			),
			'mednet-block-patterns/quick_link_list'        => array(
				'slug'          => 'quick_link_list',
				'pattern_class' => 'mbp-pattern-quick_link_list',
				'title'         => __( 'Quick Link List', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Link List', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'quicklink', 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/quick_link_list.php',
			),
			'mednet-block-patterns/featured_resource'      => array(
				'slug'          => 'featured_resource',
				'pattern_class' => 'mbp-pattern-featured_resource',
				'title'         => __( 'Featured Resource', 'mednet-block-patterns' ),
				'description'   => __( 'Featured Resource', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/featured_resource.php',
			),
			'mednet-block-patterns/events_list'            => array(
				'slug'          => 'events_list',
				'pattern_class' => 'mbp-pattern-events_list',
				'title'         => __( 'Events List', 'mednet-block-patterns' ),
				'description'   => __( 'Events List', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text', 'events' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/events_list.php',
			),
			'mednet-block-patterns/spotlight_cards'        => array(
				'slug'          => 'spotlight_cards',
				'pattern_class' => 'mbp-pattern-spotlight_cards',
				'title'         => __( 'Spotlight Cards  ', 'mednet-block-patterns' ),
				'description'   => __( 'Spotlight Cards', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'query', 'spotlight' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/spotlight_cards.php',
			),
			'mednet-block-patterns/contact_block'          => array(
				'slug'          => 'contact_block',
				'pattern_class' => 'mbp-pattern-contact_block',
				'title'         => __( 'Contact Block', 'mednet-block-patterns' ),
				'description'   => __( 'Contact Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'card' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/contact_block.php',
			),
			'mednet-block-patterns/contact_block_1_4_width' => array(
				'slug'          => 'contact_block_1_4_width',
				'pattern_class' => 'mbp-pattern-contact_block_1_4_width',
				'title'         => __( 'Contact Block - 1/4 Width', 'mednet-block-patterns' ),
				'description'   => __( 'Contact Block - 1/4 Width', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'card' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/contact_block_1_4_width.php',
			),
			'mednet-block-patterns/accordion_block'        => array(
				'slug'          => 'accordion_block',
				'pattern_class' => 'mbp-pattern-accordion_block',
				'title'         => __( 'Accordion Block', 'mednet-block-patterns' ),
				'description'   => __( 'Accordion Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'accordion' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/accordion_block.php',
			),
			'mednet-block-patterns/table_option_1'         => array(
				'slug'          => 'table_option_1',
				'pattern_class' => 'mbp-pattern-table_option_1',
				'title'         => __( 'Table Option 1', 'mednet-block-patterns' ),
				'description'   => __( 'Table Option 1', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'table' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/table_option_1.php',
			),
			'mednet-block-patterns/table_option_2'         => array(
				'slug'          => 'table_option_2',
				'pattern_class' => 'mbp-pattern-table_option_2',
				'title'         => __( 'Table Option 2', 'mednet-block-patterns' ),
				'description'   => __( 'Table Option 2', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'table' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/table_option_2.php',
			),
			'mednet-block-patterns/video_block'            => array(
				'slug'          => 'video_block',
				'pattern_class' => 'mbp-pattern-video_block',
				'title'         => __( 'Video Block', 'mednet-block-patterns' ),
				'description'   => __( 'Video Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'table' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/video_block.php',
			),
			'mednet-block-patterns/navigation_list_with_icons' => array(
				'slug'          => 'navigation_list_with_icons',
				'pattern_class' => 'mbp-pattern-navigation_list_with_icons',
				'title'         => __( 'Navigation List With Icons', 'mednet-block-patterns' ),
				'description'   => __( 'Navigation List With Icons', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/navigation_list_with_icons.php',
			),
			'mednet-block-patterns/pathways_feature_block' => array(
				'slug'          => 'pathways_feature_block',
				'pattern_class' => 'mbp-pattern-pathways_feature_block',
				'title'         => __( 'Pathways Feature Block', 'mednet-block-patterns' ),
				'description'   => __( 'Pathways Feature Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'block', 'image' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/pathways_feature_block.php',
			),
			'mednet-block-patterns/quick_links_one_col'    => array(
				'slug'          => 'quick_links_one_col',
				'pattern_class' => 'mbp-pattern-quick_links_one_col',
				'title'         => __( 'Quick Links One Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links One Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'block', 'image' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/quick_links_one_col.php',
			),
			'mednet-block-patterns/quick_links_two_columns' => array(
				'slug'          => 'quick_links_two_columns',
				'pattern_class' => 'mbp-pattern-quick_links_two_columns',
				'title'         => __( 'Quick Links Two Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Two Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/quick_links_two_columns.php',
			),
			'mednet-block-patterns/quick_links_three_columns' => array(
				'slug'          => 'quick_links_three_columns',
				'pattern_class' => 'mbp-pattern-quick_links_three_columns',
				'title'         => __( 'Quick Links Three Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Three Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list', 'quicklinks', 'three column' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/quick_links_three_columns.php',
			),
			'mednet-block-patterns/sidebar_block'          => array(
				'slug'          => 'sidebar_block',
				'pattern_class' => 'mbp-pattern-sidebar_block',
				'title'         => __( 'Sidebar Block', 'mednet-block-patterns' ),
				'description'   => __( 'Sidebar Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'sidebar' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/sidebar_block.php',
			),
			'mednet-block-patterns/pathway_page_grid'      => array(
				'slug'          => 'pathway_page_grid',
				'pattern_class' => 'mbp-pattern-pathway_page_grid',
				'title'         => __( 'Pathway page content grid', 'mednet-block-patterns' ),
				'description'   => __( 'Title links with descriptions arranged in a grid', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'grid', 'links' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/pathway_page_grid.php',
			),
			'mednet-block-patterns/all_announcements_page' => array(
				'slug'          => 'all_announcements_page',
				'pattern_class' => 'mbp-pattern-all_announcements_page',
				'title'         => __( 'All Announcements Page', 'mednet-block-patterns' ),
				'description'   => __( 'All Announcements Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/all_announcements_page.php',
			),
			'mednet-block-patterns/what_is_new_page'       => array(
				'slug'          => 'what_is_new_page',
				'pattern_class' => 'mbp-pattern-what_is_new_page',
				'title'         => __( 'What\'s New Page', 'mednet-block-patterns' ),
				'description'   => __( 'What\'s New Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/what_is_new_page.php',
			),
			'mednet-block-patterns/announcements_post'     => array(
				'slug'          => 'announcements_post',
				'pattern_class' => 'mbp-pattern-announcements_post',
				'title'         => __( 'Announcement Post', 'mednet-block-patterns' ),
				'description'   => __( 'Announcement Post', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/announcements_post.php',
			),
			'mednet-block-patterns/announcements_post_footer' => array(
				'slug'          => 'announcements_post_footer',
				'pattern_class' => 'mbp-pattern-announcements_post_footer',
				'title'         => __( 'Announcement Post Footer', 'mednet-block-patterns' ),
				'description'   => __( 'Show related posts', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post', 'related posts' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/announcements_post_footer.php',
			),
			'mednet-block-patterns/homepage'               => array(
				'slug'          => 'homepage',
				'pattern_class' => 'mbp-pattern-homepage',
				'title'         => __( 'Homepage', 'mednet-block-patterns' ),
				'description'   => __( 'MedNet Homepage layout', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/homepage.php',
			),
			'mednet-block-patterns/one_column_page'        => array(
				'slug'          => 'one_column_page',
				'pattern_class' => 'mbp-pattern-one_column_page',
				'title'         => __( 'One-Column Content Page', 'mednet-block-patterns' ),
				'description'   => __( 'One-Column Content Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/one_column_page.php',
			),
			'mednet-block-patterns/icon_page'              => array(
				'slug'          => 'icon_page',
				'pattern_class' => 'mbp-pattern-icon_page',
				'title'         => __( 'Icon Page', 'mednet-block-patterns' ),
				'description'   => __( 'Icon Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/icon_page.php',
			),
			'mednet-block-patterns/two_column_page'        => array(
				'slug'          => 'two_column_page',
				'pattern_class' => 'mbp-pattern-two_column_page',
				'title'         => __( 'Two column content page', 'mednet-block-patterns' ),
				'description'   => __( 'Educational Activity Form & Resources Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/two_column_page.php',
			),
			'mednet-block-patterns/overview_page'          => array(
				'slug'          => 'overview_page',
				'pattern_class' => 'mbp-pattern-overview_page',
				'title'         => __( 'Overview Page', 'mednet-block-patterns' ),
				'description'   => __( 'Second level navigation page with images', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/overview_page.php',
			),
			'mednet-block-patterns/pathway_page'           => array(
				'slug'          => 'pathway_page',
				'pattern_class' => 'mbp-pattern-pathway_page',
				'title'         => __( 'Pathway Page', 'mednet-block-patterns' ),
				'description'   => __( '2nd level navigation page, no images', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/pathway_page.php',
			),
			'mednet-block-patterns/faculty_staff_spotlight_page' => array(
				'slug'          => 'faculty_staff_spotlight_page',
				'pattern_class' => 'mbp-pattern-faculty_staff_spotlight_page',
				'title'         => __( 'Faculty and Staff Spotlight Page', 'mednet-block-patterns' ),
				'description'   => __( 'Staff Spotlight Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/faculty_staff_spotlight_page.php',
			),
			'mednet-block-patterns/spotlight_post_full_width_photo' => array(
				'slug'          => 'spotlight_post_full_width_photo',
				'pattern_class' => 'mbp-pattern-spotlight_post_full_width_photo',
				'title'         => __( 'Spotlight post with full width photo', 'mednet-block-patterns' ),
				'description'   => __( 'Spotlight Title With Big Bio Photo Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/spotlight_post_full_width_photo.php',
			),
			'mednet-block-patterns/spotlight_post_inline_photo' => array(
				'slug'          => 'spotlight_post_inline_photo',
				'pattern_class' => 'mbp-pattern-spotlight_post_inline_photo',
				'title'         => __( 'Spotlight post with inline photo', 'mednet-block-patterns' ),
				'description'   => __( 'Inline photo on spotlight post', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/spotlight_post_inline_photo.php',
			),

		);

		return $block_patterns;

	}
}
