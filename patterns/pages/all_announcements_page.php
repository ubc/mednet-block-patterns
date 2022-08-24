<!-- wp:group {"className":"all_announcements_page"} -->
<div class="wp-block-group all_announcements_page">
  <!-- wp:paragraph {"fontSize":"medium"} -->
  <p class="has-medium-font-size">content</p>
  <!-- /wp:paragraph -->

  <!-- wp:separator {"style":{"color":{"background":"#e6e6e6"}},"className":"is-style-wide"} -->
  <hr
    class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide"
    style="background-color: #e6e6e6; color: #e6e6e6"
  />
  <!-- /wp:separator -->

  <!-- wp:ubc/tabs {"tabTitles":["All Announcements","Events","Funding \u0026amp; Awards","Appointment","Community"],"className":"all_announcements_tabs_block"} -->
  <section
    class="wp-block-ubc-tabs ubc-accordion-tabs all_announcements_tabs_block"
    data-selected-tab="0"
  >
    <ul class="ubc-accordion-tabs__tab-list" role="tablist">
      <li id="all-announcements" role="presentation">
        <a
          role="tab"
          id="all-announcements"
          aria-controls="section1 "
          aria-selected="true"
          class="ubc-accordion-tabs__tabs-trigger js-tabs-trigger"
          href="#section1"
          >All Announcements</a
        >
      </li>
      <li id="events" role="presentation">
        <a
          role="tab"
          id="events"
          aria-controls="section2 "
          aria-selected="false"
          class="ubc-accordion-tabs__tabs-trigger js-tabs-trigger"
          href="#section2"
          >Events</a
        >
      </li>
      <li id="funding-&amp;-awards" role="presentation">
        <a
          role="tab"
          id="funding-amp-awards"
          aria-controls="section3 "
          aria-selected="false"
          class="ubc-accordion-tabs__tabs-trigger js-tabs-trigger"
          href="#section3"
          >Funding &amp; Awards</a
        >
      </li>
      <li id="appointment" role="presentation">
        <a
          role="tab"
          id="appointment"
          aria-controls="section4 "
          aria-selected="false"
          class="ubc-accordion-tabs__tabs-trigger js-tabs-trigger"
          href="#section4"
          >Appointment</a
        >
      </li>
      <li id="community" role="presentation">
        <a
          role="tab"
          id="community"
          aria-controls="section5 "
          aria-selected="false"
          class="ubc-accordion-tabs__tabs-trigger js-tabs-trigger"
          href="#section5"
          >Community</a
        >
      </li>
    </ul>
    <!-- wp:ubc/tab {"index":0,"title":"All Announcements"} -->
    <section
      index="1"
      class="wp-block-ubc-tab ubc-accordion-tabs__tabs-panel js-tabs-panel active"
      id="section1"
      role="tabpanel"
      aria-labelledby="tab1"
    >
      <div
        class="ubc-accordion-tabs__accordion-trigger js-accordeon-trigger"
        aria-controls="section1"
        tabindex="0"
      >
        All Announcements
        <div class="ubc-accordion-tabs__accordion-trigger-icon">
          <span class="label--open">Open</span
          ><span class="label--close">Close</span
          ><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect
              class="vert"
              height="18"
              width="2"
              fill="currentColor"
              y="1"
              x="9"
            ></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div>
      </div>
      <div class="content">
        <!-- wp:query {"queryId":33,"query":{"perPage":"3","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3},"className":"announcement_feed_small"} -->
        <div class="wp-block-query announcement_feed_small">
          <!-- wp:post-template -->
          <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.18px"},"color":{"text":"#002145"}}} /-->

          <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} /-->
          <!-- /wp:post-template -->

          <!-- wp:query-pagination {"align":"center","className":"mednet_pagination_block"} -->
          <!-- wp:query-pagination-previous /-->

          <!-- wp:query-pagination-numbers /-->

          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->

          <!-- wp:query-no-results -->
          <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
          <p>No results found.</p>
          <!-- /wp:paragraph -->
          <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
      </div>
    </section>
    <!-- /wp:ubc/tab -->

    <!-- wp:ubc/tab {"index":1,"title":"Events"} -->
    <section
      index="2"
      class="wp-block-ubc-tab ubc-accordion-tabs__tabs-panel js-tabs-panel"
      id="section2"
      role="tabpanel"
      aria-labelledby="tab2"
    >
      <div
        class="ubc-accordion-tabs__accordion-trigger js-accordeon-trigger"
        aria-controls="section2"
        tabindex="0"
      >
        Events
        <div class="ubc-accordion-tabs__accordion-trigger-icon">
          <span class="label--open">Open</span
          ><span class="label--close">Close</span
          ><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect
              class="vert"
              height="18"
              width="2"
              fill="currentColor"
              y="1"
              x="9"
            ></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div>
      </div>
      <div class="content">
        <!-- wp:query {"queryId":33,"query":{"perPage":"3","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3},"className":"announcement_feed_small"} -->
        <div class="wp-block-query announcement_feed_small">
          <!-- wp:post-template -->
          <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.18px"},"color":{"text":"#002145"}}} /-->

          <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} /-->
          <!-- /wp:post-template -->

          <!-- wp:query-pagination {"align":"center","className":"mednet_pagination_block"} -->
          <!-- wp:query-pagination-previous /-->

          <!-- wp:query-pagination-numbers /-->

          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->

          <!-- wp:query-no-results -->
          <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
          <p>No results found.</p>
          <!-- /wp:paragraph -->
          <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
      </div>
    </section>
    <!-- /wp:ubc/tab -->

    <!-- wp:ubc/tab {"index":2,"title":"Funding \u0026amp; Awards"} -->
    <section
      index="3"
      class="wp-block-ubc-tab ubc-accordion-tabs__tabs-panel js-tabs-panel"
      id="section3"
      role="tabpanel"
      aria-labelledby="tab3"
    >
      <div
        class="ubc-accordion-tabs__accordion-trigger js-accordeon-trigger"
        aria-controls="section3"
        tabindex="0"
      >
        Funding &amp; Awards
        <div class="ubc-accordion-tabs__accordion-trigger-icon">
          <span class="label--open">Open</span
          ><span class="label--close">Close</span
          ><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect
              class="vert"
              height="18"
              width="2"
              fill="currentColor"
              y="1"
              x="9"
            ></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div>
      </div>
      <div class="content">
        <!-- wp:query {"queryId":33,"query":{"perPage":"3","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3},"className":"announcement_feed_small"} -->
        <div class="wp-block-query announcement_feed_small">
          <!-- wp:post-template -->
          <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.18px"},"color":{"text":"#002145"}}} /-->

          <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} /-->
          <!-- /wp:post-template -->

          <!-- wp:query-pagination {"align":"center","className":"mednet_pagination_block"} -->
          <!-- wp:query-pagination-previous /-->

          <!-- wp:query-pagination-numbers /-->

          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->

          <!-- wp:query-no-results -->
          <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
          <p>No results found.</p>
          <!-- /wp:paragraph -->
          <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
      </div>
    </section>
    <!-- /wp:ubc/tab -->

    <!-- wp:ubc/tab {"index":3,"title":"Appointment"} -->
    <section
      index="4"
      class="wp-block-ubc-tab ubc-accordion-tabs__tabs-panel js-tabs-panel"
      id="section4"
      role="tabpanel"
      aria-labelledby="tab4"
    >
      <div
        class="ubc-accordion-tabs__accordion-trigger js-accordeon-trigger"
        aria-controls="section4"
        tabindex="0"
      >
        Appointment
        <div class="ubc-accordion-tabs__accordion-trigger-icon">
          <span class="label--open">Open</span
          ><span class="label--close">Close</span
          ><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect
              class="vert"
              height="18"
              width="2"
              fill="currentColor"
              y="1"
              x="9"
            ></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div>
      </div>
      <div class="content">
        <!-- wp:query {"queryId":33,"query":{"perPage":"3","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3},"className":"announcement_feed_small"} -->
        <div class="wp-block-query announcement_feed_small">
          <!-- wp:post-template -->
          <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.18px"},"color":{"text":"#002145"}}} /-->

          <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} /-->
          <!-- /wp:post-template -->

          <!-- wp:query-pagination {"align":"center","className":"mednet_pagination_block"} -->
          <!-- wp:query-pagination-previous /-->

          <!-- wp:query-pagination-numbers /-->

          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->

          <!-- wp:query-no-results -->
          <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
          <p>No results found.</p>
          <!-- /wp:paragraph -->
          <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
      </div>
    </section>
    <!-- /wp:ubc/tab -->

    <!-- wp:ubc/tab {"index":4,"title":"Community"} -->
    <section
      index="5"
      class="wp-block-ubc-tab ubc-accordion-tabs__tabs-panel js-tabs-panel"
      id="section5"
      role="tabpanel"
      aria-labelledby="tab5"
    >
      <div
        class="ubc-accordion-tabs__accordion-trigger js-accordeon-trigger"
        aria-controls="section5"
        tabindex="0"
      >
        Community
        <div class="ubc-accordion-tabs__accordion-trigger-icon">
          <span class="label--open">Open</span
          ><span class="label--close">Close</span
          ><svg aria-hidden="true" focusable="false" viewBox="0 0 20 20">
            <rect
              class="vert"
              height="18"
              width="2"
              fill="currentColor"
              y="1"
              x="9"
            ></rect>
            <rect height="2" width="18" fill="currentColor" y="9" x="1"></rect>
          </svg>
        </div>
      </div>
      <div class="content">
        <!-- wp:query {"queryId":33,"query":{"perPage":"3","pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3},"className":"announcement_feed_small"} -->
        <div class="wp-block-query announcement_feed_small">
          <!-- wp:post-template -->
          <!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->

          <!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.18px"},"color":{"text":"#002145"}}} /-->

          <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"16px"},"color":{"text":"#002145"}}} /-->
          <!-- /wp:post-template -->

          <!-- wp:query-pagination {"align":"center","className":"mednet_pagination_block"} -->
          <!-- wp:query-pagination-previous /-->

          <!-- wp:query-pagination-numbers /-->

          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->

          <!-- wp:query-no-results -->
          <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
          <p>No results found.</p>
          <!-- /wp:paragraph -->
          <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
      </div>
    </section>
    <!-- /wp:ubc/tab -->
  </section>
  <!-- /wp:ubc/tabs -->
</div>
<!-- /wp:group -->
