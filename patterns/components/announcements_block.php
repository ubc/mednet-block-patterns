<!-- wp:group {"className":"announcements-block"} -->
<div class="wp-block-group announcements-block">
    <!-- wp:heading -->
    <h2>WHAT’S NEW</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"announcement_block"} -->
    <div class="wp-block-columns announcement_block">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis: 50%">
            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:query {"queryId":20,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"featured-announcement"} -->
                <div class="wp-block-query featured-announcement">
                    <!-- wp:post-template -->
                    <!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium","align":"wide"} /-->

                    <!-- wp:post-title {"level":3,"isLink":true,"style":{"color":{"text":"#0055b7"}}} /-->

                    <!-- wp:post-excerpt {"moreText":"\u003cbr\u003e"} /-->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"announcement_block_btn"} -->
            <div class="wp-block-buttons announcement_block_btn">
                <!-- wp:button {"className":"is-style-blue-btn"} -->
                <div class="wp-block-button is-style-blue-btn">
                    <a class="wp-block-button__link">See What’s New</a>
                </div>
                <!-- /wp:button -->
                </div>
            <!-- /wp:buttons -->
            </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis: 50%">
            <!-- wp:query {"queryId":30,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"className":"announcements-list"} -->
            <div class="wp-block-query announcements-list">
                <!-- wp:post-template -->
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"verticalAlignment":"top","width":"65%"} -->
                    <div
                        class="wp-block-column is-vertically-aligned-top"
                        style="flex-basis: 65%"
                    >
                        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"170px","sizeSlug":"medium"} /-->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"top","width":"35%"} -->
                    <div
                        class="wp-block-column is-vertically-aligned-top"
                        style="flex-basis: 35%"
                    >
                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"100"}}} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
