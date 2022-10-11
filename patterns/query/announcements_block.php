<!-- wp:group {"className":"announcements-block"} -->
<div class="wp-block-group announcements-block">
    <!-- wp:heading {"placeholder":"Add a title"} -->
    <h2></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"announcement-block"} -->
    <div class="wp-block-columns announcement-block">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis: 50%">
            <!-- wp:group -->
            <div class="wp-block-group">
                <?php require MBP_PATTERNS_FOLDER . 'query/announcement_card_large.php'; ?>
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"announcement-block-btn"} -->
            <div class="wp-block-buttons announcement-block-btn">
                <!-- wp:button {"placeholder":"Set a link to view the category.","className":"is-style-blue-btn"} /-->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis: 50%">
            <?php require MBP_PATTERNS_FOLDER . 'query/announcement_list.php'; ?>
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
