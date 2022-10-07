<!-- wp:group {"className":"news-honours-section"} -->
<div class="wp-block-group news-honours-section">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis: 25%">
            <!-- wp:heading {"level":4} -->
            <h4>NEWS &amp; HONOURS</h4>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>
                Read the latest updates, news and stories from across the
                faculty.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"className":"announcement-block-btn"} -->
            <div class="wp-block-buttons announcement-block-btn">
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
              <?php require MBP_PATTERNS_FOLDER . 'components/content_card_with_overlay.php'; ?>

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"28px","letterSpacing":"-0.14px"},"color":{"text":"#0055b7"}}} -->
                <p
                    class="has-text-color"
                    style="
                        color: #0055b7;
                        font-size: 28px;
                        letter-spacing: -0.14px;
                    "
                >
                    <a
                        href="https://mednet.med.ubc.ca/"
                        data-type="URL"
                        data-id="https://mednet.med.ubc.ca/"
                        target="_blank"
                        rel="noreferrer noopener"
                        >Transformation of Culture</a
                    >
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"color":{"text":"#002145"},"typography":{"fontSize":"16px"}}} -->
                <p
                    class="has-text-color"
                    style="color: #002145; font-size: 16px"
                >
                    Learn more about the Faculty’s commitment and actions
                    towards creating respectful and inclusive learning and work
                    environments
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis: 25%">
            <?php require MBP_PATTERNS_FOLDER . 'components/pathways_feature_block.php'; ?>
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
