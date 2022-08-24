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
			'mednet-block-patterns/intro-text'             => array(
				'slug'          => 'intro-text',
				'pattern_class' => 'mbp-pattern-intro-text',
				'title'         => __( 'Introduction paragraph', 'mednet-block-patterns' ),
				'description'   => __( 'Large font with a wide horizontal rule separator.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Text' ),
				'keywords'      => array( 'intro', 'big' ),
				'viewportWidth' => 300,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/text/intro-text.php',
				'blockTypes'    => array( 'core/paragraph', 'core/separator' ),
			),
			'mednet-block-patterns/sidebar-block-default'  => array(
				'slug'          => 'sidebar-block-default',
				'pattern_class' => 'mbp-pattern-sidebar-block-default',
				'title'         => __( 'Sidebar Block', 'mednet-block-patterns' ),
				'description'   => __( 'Full width group with a header and content. No background.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Text' ),
				'keywords'      => array( 'sidebar', 'group' ),
				'viewportWidth' => 300,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/text/sidebar-block-default.php',
				'blockTypes'    => array( 'core/group', 'core/column', 'core/columns', 'core/paragraph', 'core/separator' ),
			),
			'mednet-block-patterns/one-column-layout'      => array(
				'slug'          => 'one-column-layout',
				'pattern_class' => 'mbp-pattern-one-column-layout',
				'title'         => __( 'One column page layout', 'mednet-block-patterns' ),
				'description'   => __( 'Large font with a wide horizontal rule separator.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Layouts' ),
				'keywords'      => array( 'standard', 'normal', 'simple', 'layout' ),
				'viewportWidth' => 900,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/layouts/one_column.php',
				'blockTypes'    => array( 'core/group' ),
			),
			'mednet-block-patterns/two-column-layout'      => array(
				'slug'          => 'two-column-layout',
				'pattern_class' => 'mbp-pattern-two-column-layout',
				'title'         => __( 'two column page layout', 'mednet-block-patterns' ),
				'description'   => __( 'Large font with a wide horizontal rule separator.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Layouts' ),
				'keywords'      => array( 'standard', 'normal', 'simple', 'layout' ),
				'viewportWidth' => 900,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/layouts/two_column.php',
				'blockTypes'    => array( 'core/group' ),
			),
			'mednet-block-patterns/alert-banner'           => array(
				'slug'          => 'alert-banner',
				'pattern_class' => 'mbp-pattern-alert-banner',
				'title'         => __( 'Alert banner', 'mednet-block-patterns' ),
				'description'   => __( 'Alert banner', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'banner', 'alert' ),
				'viewportWidth' => 500,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/alert_banner.php',
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/quicklink_list'         => array(
				'slug'          => 'quicklink_list',
				'pattern_class' => 'mbp-pattern-quicklink_list',
				'title'         => __( 'Quick Link List', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Link List', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Links_Lists' ),
				'keywords'      => array( 'quicklinks', 'list', 'list with title', 'link list' ),
				'viewportWidth' => 782,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/lists-links/quicklink_list.php',
				'blockTypes'    => array( 'core/list' ),
			),
			'mednet-block-patterns/quicklinks_two_columns' => array(
				'slug'          => 'quicklinks_two_columns',
				'pattern_class' => 'mbp-pattern-quicklinks_two_columns',
				'title'         => __( 'Quick Links Two Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Two Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Links_Lists' ),
				'keywords'      => array( 'quicklinks', 'list', 'list with title', 'link list' ),
				'viewportWidth' => 782,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/lists-links/quicklinks_two_columns.php',
				'blockTypes'    => array( 'core/list' ),
			),
			'mednet-block-patterns/quicklinks_three_columns' => array(
				'slug'          => 'quicklinks_three_columns',
				'pattern_class' => 'mbp-pattern-quicklinks_three_columns',
				'title'         => __( 'Quick Links Three Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Three Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Links_Lists' ),
				'keywords'      => array( 'quicklinks', 'list', 'list with title', 'link list' ),
				'viewportWidth' => 782,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/lists-links/quicklinks_three_columns.php',
				'blockTypes'    => array( 'core/list' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/events_list_item'       => array(
				'slug'          => 'events_list_item',
				'pattern_class' => 'mbp-pattern-events_list_item',
				'title'         => __( 'Events List Item', 'mednet-block-patterns' ),
				'description'   => __( 'Events List Item', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text', 'events', 'list item', 'date', 'title' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/event_list_item.php',
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/sidebar_block'          => array(
				'slug'          => 'sidebar_block',
				'pattern_class' => 'mbp-pattern-sidebar_block',
				'title'         => __( 'Demo Sidebar Blocks', 'mednet-block-patterns' ),
				'description'   => __( 'Three different Sidebar Blocks', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Demo_Pattern' ),
				'keywords'      => array( 'demo' ),
				'viewportWidth' => 400,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/demo/sidebar_blocks.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/pathway_page_grid'      => array(
				'slug'          => 'pathway_page_grid',
				'pattern_class' => 'mbp-pattern-pathway_page_grid',
				'title'         => __( 'Pathway page content grid', 'mednet-block-patterns' ),
				'description'   => __( 'Title links with descriptions arranged in a grid', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'grid', 'links' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/pathway_page_grid.php',
				'blockTypes'    => array( 'core/paragraph' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/spotlight_post'         => array(
				'slug'          => 'spotlight_post',
				'pattern_class' => 'mbp-pattern-spotlight_post',
				'title'         => __( 'Spotlight post', 'mednet-block-patterns' ),
				'description'   => __( 'Inline photo on spotlight post', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/spotlight_post.php',
				'blockTypes'    => array( 'core/paragraph', 'core/columns', 'core/image', 'core/query' ),
			),
			'mednet-block-patterns/one-on-one-spotlight-post' => array(
				'slug'          => 'one-on-one-spotlight-post',
				'pattern_class' => 'one-on-one-spotlight-post',
				'title'         => __( 'One-on-One post', 'mednet-block-patterns' ),
				'description'   => __( 'Inline photo, sidebar query to category', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post', 'one on one', 'spotlight', 'profile', 'column' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/one-on-one-spotlight.php',
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/all_announcements_page' => array(
				'slug'          => 'all_announcements_page',
				'pattern_class' => 'mbp-pattern-all_announcements_page',
				'title'         => __( 'All Announcements Page', 'mednet-block-patterns' ),
				'description'   => __( 'All Announcements Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'Page', 'Announcements', 'Query' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/all_announcements_page.php',
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/news-honours-section'   => array(
				'slug'          => 'news-honours-section',
				'pattern_class' => 'mbp-pattern-news-honours-section',
				'title'         => __( 'News and Honours section', 'mednet-block-patterns' ),
				'description'   => __( 'Part of the Homepage layout. A query showing news and honours content', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page', 'section', 'homepage' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/news-and-honours-section.php',
				'blockTypes'    => array( 'core/paragraph', 'core/columns', 'core/query', 'core/image' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/one_column_page'        => array(
				'slug'          => 'one_column_page',
				'pattern_class' => 'mbp-pattern-one_column_page',
				'title'         => __( 'Demo example of a Content Page', 'mednet-block-patterns' ),
				'description'   => __( 'One-Column Content Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Demo_Pattern' ),
				'keywords'      => array( 'demo' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/demo/one_column_page.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/two_column_page'        => array(
				'slug'          => 'two_column_page',
				'pattern_class' => 'mbp-pattern-two_column_page',
				'title'         => __( 'Demo example of a Two column content page', 'mednet-block-patterns' ),
				'description'   => __( 'Educational Activity Form & Resources Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Demo_Pattern' ),
				'keywords'      => array( 'demo' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/demo/two_column_page.php',
				'blockTypes'    => array( '' ),
			),

		);

		return $block_patterns;

	}
}
