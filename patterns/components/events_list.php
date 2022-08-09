<!-- wp:group {"style":{"color":{"background":"#002145"}},"textColor":"white","className":"events_list full-bleed"} -->
<div
    class="wp-block-group events_list has-white-color has-text-color has-background full-bleed"
    style="background-color: #002145"
>
    <!-- wp:group {"className":"events-list-inside"} -->
    <div class="wp-block-group events-list-inside">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis: 33.33%">
                <!-- wp:image {"id":481,"width":58,"height":59,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                <figure
                    class="wp-block-image size-full is-resized is-style-default"
                >
                    <img
                        src="/wp-content/plugins/mednet-block-patterns/includes/assets/images/svgs/Home_Icon-Events.svg"
                        alt=""
                        class="wp-image-481"
                        width="58"
                        height="59"
                    />
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","letterSpacing":"0.9px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}}} -->
                <p
                    style="
                        font-size: 18px;
                        font-style: normal;
                        font-weight: 600;
                        text-transform: uppercase;
                        letter-spacing: 0.9px;
                    "
                >
                    EVENTS
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
                <p style="font-size: 16px">
                    Lorem ipsum dolor sit amet, elit, do tempor incididunt ut
                    ero labore et dolore aliqua or
                    <a href="/">submit an event</a>.
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"is-style-blue-btn"} -->
                    <div class="wp-block-button is-style-blue-btn">
                        <a
                            class="wp-block-button__link"
                            href="/"
                            target="_blank"
                            rel="noreferrer noopener"
                            >See All Events</a
                        >
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"66.66%","className":"event-list-column"} -->
            <div
                class="wp-block-column event-list-column"
                style="flex-basis: 66.66%"
            >
			<?php include 'event_list_item.php'; ?>
                <!-- wp:paragraph -->
                <p></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
