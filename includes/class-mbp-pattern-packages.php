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
			'mednet-block-patterns/one-column-layout'      => array(
				'slug'          => 'one-column-layout',
				'pattern_class' => 'mbp-pattern-one-column-layout',
				'title'         => __( 'One column page layout', 'mednet-block-patterns' ),
				'description'   => __( 'Large font with a wide horizontal rule separator.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Layouts' ),
				'keywords'      => array( 'standard', 'normal', 'simple', 'layout' ),
				'viewportWidth' => 900,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/layouts/one_column.php',
				'blockTypes'    => array( 'core/group', 'core/post-content' ),
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
				'blockTypes'    => array( 'core/group', 'core/post-content' ),
			),
			'mednet-block-patterns/pathway-layout'         => array(
				'slug'          => 'pathway-layout',
				'pattern_class' => 'mbp-pattern-pathway-page-layout',
				'title'         => __( 'Pathway page layout', 'mednet-block-patterns' ),
				'description'   => __( 'Title with intro text and a grid of links with descriptions', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Layouts' ),
				'keywords'      => array( 'section', 'pathway', 'homepage', 'simple', 'layout' ),
				'viewportWidth' => 900,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/layouts/pathway_page.php',
				'blockTypes'    => array( 'core/group', 'core/post-content' ),
			),
			'mednet-block-patterns/intro-text'             => array(
				'slug'          => 'intro-text',
				'pattern_class' => 'mbp-pattern-intro-text',
				'title'         => __( 'Introduction paragraph', 'mednet-block-patterns' ),
				'description'   => __( 'Large font with a wide horizontal rule separator.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Text' ),
				'keywords'      => array( 'intro', 'big' ),
				'viewportWidth' => 300,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/text/intro_text.php',
				'blockTypes'    => array( 'core/paragraph', 'core/separator' ),
			),
			'mednet-block-patterns/sidebar-block'          => array(
				'slug'          => 'sidebar-block',
				'pattern_class' => 'mbp-pattern-sidebar-block',
				'title'         => __( 'Sidebar Block', 'mednet-block-patterns' ),
				'description'   => __( 'Full width group with a header and content. No background.', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Text' ),
				'keywords'      => array( 'sidebar', 'group' ),
				'viewportWidth' => 300,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/text/sidebar_block.php',
				'blockTypes'    => array( 'core/group', 'core/column', 'core/columns', 'core/paragraph', 'core/separator' ),
			),
			'mednet-block-patterns/announcements_block'    => array(
				'slug'          => 'announcements_block',
				'pattern_class' => 'mbp-pattern-announcements_block',
				'title'         => __( 'Announcements Block', 'mednet-block-patterns' ),
				'description'   => __( 'Announcements Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Query_Pattern' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/query/announcements_block.php',
				'blockTypes'    => array( 'core/query' ),
			),
			'mednet-block-patterns/announcement-card-large' => array(
				'slug'          => 'announcement-card-large',
				'pattern_class' => 'mbp-pattern-announcement-card-large',
				'title'         => __( 'Announcement Card (Large)', 'mednet-block-patterns' ),
				'description'   => __( 'Large Announcement Card', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Query_Pattern' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 700,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/query/announcement_card_large.php',
				'blockTypes'    => array( 'core/query' ),
			),
			'mednet-block-patterns/announcement-list'      => array(
				'slug'          => 'announcement-list',
				'pattern_class' => 'mbp-pattern-announcement-list',
				'title'         => __( 'Announcements list', 'mednet-block-patterns' ),
				'description'   => __( 'Announcements in a list. Query', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Query_Pattern' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 300,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/query/announcement_list.php',
				'blockTypes'    => array( 'core/query' ),
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
			'mednet-block-patterns/three_col_content'      => array(
				'slug'          => 'three_col_content',
				'pattern_class' => 'mbp-pattern-three_col_content',
				'title'         => __( '3-Column content with styleable block', 'mednet-block-patterns' ),
				'description'   => __( 'multi-column layout. List, text and sidebar block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'column', 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/three_col_content.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/blue-feature-blocks'    => array(
				'slug'          => 'blue-feature-blocks',
				'pattern_class' => 'mbp-pattern-blue-feature-blocks',
				'title'         => __( 'Blue Feature Blocks ', 'mednet-block-patterns' ),
				'description'   => __( 'Blue Feature Blocks', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'column' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/blue_feature_blocks.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/announcement-feed'      => array(
				'slug'          => 'announcement-feed',
				'pattern_class' => 'mbp-pattern-announcement-feed',
				'title'         => __( 'Announcement Feed', 'mednet-block-patterns' ),
				'description'   => __( 'Announcement Feed', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Query_Pattern' ),
				'keywords'      => array( 'query' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/query/announcement_feed.php',
				'blockTypes'    => array( 'core/query' ),
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
			'mednet-block-patterns/quicklinks-two-col'     => array(
				'slug'          => 'quicklinks-two-col',
				'pattern_class' => 'mbp-pattern-quicklinks-two-col',
				'title'         => __( 'Quick Links Two Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Two Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Links_Lists' ),
				'keywords'      => array( 'quicklinks', 'list', 'list with title', 'link list' ),
				'viewportWidth' => 782,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/lists-links/quicklinks_two_columns.php',
				'blockTypes'    => array( 'core/list' ),
			),
			'mednet-block-patterns/quicklinks-three-columns' => array(
				'slug'          => 'quicklinks-three-columns',
				'pattern_class' => 'mbp-pattern-quicklinks-three-columns',
				'title'         => __( 'Quick Links Three Column', 'mednet-block-patterns' ),
				'description'   => __( 'Quick Links Three Column', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Links_Lists' ),
				'keywords'      => array( 'quicklinks', 'list', 'list with title', 'link list' ),
				'viewportWidth' => 782,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/lists-links/quicklinks_three_columns.php',
				'blockTypes'    => array( 'core/list' ),
			),
			'mednet-block-patterns/featured-resource'      => array(
				'slug'          => 'featured-resource',
				'pattern_class' => 'mbp-pattern-featured-resource',
				'title'         => __( 'Featured Resource', 'mednet-block-patterns' ),
				'description'   => __( 'Featured Resource', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text' ),
				'viewportWidth' => 500,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/featured_resource.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/events-list'            => array(
				'slug'          => 'events-list',
				'pattern_class' => 'mbp-pattern-events-list',
				'title'         => __( 'Events List', 'mednet-block-patterns' ),
				'description'   => __( 'Events List', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text', 'events' ),
				'viewportWidth' => 700,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/events_list.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/events-list-item'       => array(
				'slug'          => 'events-list-item',
				'pattern_class' => 'mbp-pattern-events-list-item',
				'title'         => __( 'Events List Item', 'mednet-block-patterns' ),
				'description'   => __( 'Events List Item', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'text', 'events', 'list item', 'date', 'title' ),
				'viewportWidth' => 500,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/event_list_item.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/spotlight-cards'        => array(
				'slug'          => 'spotlight-cards',
				'pattern_class' => 'mbp-pattern-spotlight-cards',
				'title'         => __( 'Spotlight Cards  ', 'mednet-block-patterns' ),
				'description'   => __( 'Spotlight Cards', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'query', 'spotlight' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/spotlight_cards.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/contact-block'          => array(
				'slug'          => 'contact-block',
				'pattern_class' => 'mbp-pattern-contact-block',
				'title'         => __( 'Contact Block', 'mednet-block-patterns' ),
				'description'   => __( 'Contact Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'card' ),
				'viewportWidth' => 700,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/contact_block.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/accordion_block'        => array(
				'slug'          => 'accordion_block',
				'pattern_class' => 'mbp-pattern-accordion_block',
				'title'         => __( 'Accordion Block', 'mednet-block-patterns' ),
				'description'   => __( 'Accordion Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Widgets' ),
				'keywords'      => array( 'accordion' ),
				'viewportWidth' => 900,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/widgets/accordion_block.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/video-block'            => array(
				'slug'          => 'video-block',
				'pattern_class' => 'mbp-pattern-video-block',
				'title'         => __( 'Video Block', 'mednet-block-patterns' ),
				'description'   => __( 'Video Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'table' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/video_block.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/navigation-list-with-icons' => array(
				'slug'          => 'navigation-list-with-icons',
				'pattern_class' => 'mbp-pattern-navigation-list-with-icons',
				'title'         => __( 'Navigation List With Icons', 'mednet-block-patterns' ),
				'description'   => __( 'Navigation List With Icons', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'list' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/navigation_list_with_icons.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/pathways-feature-block' => array(
				'slug'          => 'pathways-feature-block',
				'pattern_class' => 'mbp-pattern-pathways-feature-block',
				'title'         => __( 'Pathways Feature Block', 'mednet-block-patterns' ),
				'description'   => __( 'Pathways Feature Block', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'block', 'image' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/pathways_feature_block.php',
				'blockTypes'    => array( '' ),
				'inserter'      => false,
			),
			'mednet-block-patterns/demo-sidebar-block'     => array(
				'slug'          => 'demo-sidebar-block',
				'pattern_class' => 'mbp-pattern-demo-sidebar-block',
				'title'         => __( 'Demo Sidebar Blocks', 'mednet-block-patterns' ),
				'description'   => __( 'Three different Sidebar Blocks', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Demo_Pattern' ),
				'keywords'      => array( 'demo' ),
				'viewportWidth' => 400,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/demo/sidebar_blocks.php',
				'blockTypes'    => array( '' ),
				'inserter'      => false,
			),
			'mednet-block-patterns/pathway-page-grid'      => array(
				'slug'          => 'pathway-page-grid',
				'pattern_class' => 'mbp-pattern-pathway-page-grid',
				'title'         => __( 'Pathway page content grid', 'mednet-block-patterns' ),
				'description'   => __( 'Title links with descriptions arranged in a grid', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Components' ),
				'keywords'      => array( 'grid', 'links' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/components/pathway_page_grid.php',
				'blockTypes'    => array( 'core/paragraph' ),
			),
			'mednet-block-patterns/announcements-post'     => array(
				'slug'          => 'announcements-post',
				'pattern_class' => 'mbp-pattern-announcements-post',
				'title'         => __( 'Announcement Post', 'mednet-block-patterns' ),
				'description'   => __( 'Announcement Post', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/announcements_post.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/announcements-post_footer' => array(
				'slug'          => 'announcements-post_footer',
				'pattern_class' => 'mbp-pattern-announcements-post_footer',
				'title'         => __( 'Announcement Post Footer', 'mednet-block-patterns' ),
				'description'   => __( 'Show related posts', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern', 'MedNet_Query_Pattern' ),
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
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/one-on-one-spotlight-post' => array(
				'slug'          => 'one-on-one-spotlight-post',
				'pattern_class' => 'one-on-one-spotlight-post',
				'title'         => __( 'One-on-One post', 'mednet-block-patterns' ),
				'description'   => __( 'Inline photo, sidebar query to category', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Post_Pattern' ),
				'keywords'      => array( 'post', 'one on one', 'spotlight', 'profile', 'column' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/posts/one_on_one_spotlight.php',
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
			'mednet-block-patterns/pathway-page'           => array(
				'slug'          => 'pathway-page',
				'pattern_class' => 'mbp-pattern-pathway-page',
				'title'         => __( 'Pathway Page', 'mednet-block-patterns' ),
				'description'   => __( '2nd level navigation page, no images', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/pathway_page.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/icon-page'              => array(
				'slug'          => 'icon-page',
				'pattern_class' => 'mbp-pattern-icon-page',
				'title'         => __( 'Icon Page', 'mednet-block-patterns' ),
				'description'   => __( 'Icon Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/icon_page.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/all-announcements-page' => array(
				'slug'          => 'all-announcements-page',
				'pattern_class' => 'mbp-pattern-all-announcements-page',
				'title'         => __( 'All Announcements Page', 'mednet-block-patterns' ),
				'description'   => __( 'All Announcements Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'Page', 'Announcements', 'Query' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/all_announcements_page.php',
				'blockTypes'    => array( 'core/query' ),
			),
			'mednet-block-patterns/what-is-new-page'       => array(
				'slug'          => 'what-is-new-page',
				'pattern_class' => 'mbp-pattern-what-is-new-page',
				'title'         => __( 'What\'s New Page', 'mednet-block-patterns' ),
				'description'   => __( 'What\'s New Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Page_Pattern' ),
				'keywords'      => array( 'page' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/what_is_new_page.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/faculty-staff-spotlight-page' => array(
				'slug'          => 'faculty-staff-spotlight-page',
				'pattern_class' => 'mbp-pattern-faculty-staff-spotlight-page',
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
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/pages/news_and_honours_section.php',
				'blockTypes'    => array( '' ),
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
			'mednet-block-patterns/two-column-page'        => array(
				'slug'          => 'two-column-page',
				'pattern_class' => 'mbp-pattern-two-column-page',
				'title'         => __( 'Demo example of a Two column content page', 'mednet-block-patterns' ),
				'description'   => __( 'Educational Activity Form & Resources Page', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Demo_Pattern' ),
				'keywords'      => array( 'demo' ),
				'viewportWidth' => 1200,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/demo/two_column_page.php',
				'blockTypes'    => array( '' ),
			),
			'mednet-block-patterns/alert-banner'           => array(
				'slug'          => 'alert-banner',
				'pattern_class' => 'mbp-pattern-alert-banner',
				'title'         => __( 'Alert banner', 'mednet-block-patterns' ),
				'description'   => __( 'Alert banner', 'mbp-block-patterns' ),
				'categories'    => array( 'MedNet_Widgets' ),
				'keywords'      => array( 'banner', 'alert' ),
				'viewportWidth' => 500,
				'file_content'  => MBP_PLUGIN_DIR . 'patterns/widgets/alert_banner.php',
				'blockTypes'    => array( '' ),
			),

		);

		return $block_patterns;

	}
}
