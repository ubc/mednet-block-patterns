<!-- wp:group {"style":{"color":{"background":"#f2f2f2"}},"className":"spotlight-cards full-bleed-gray"} -->
<div
    class="wp-block-group spotlight-cards full-bleed-gray has-background"
    style="background-color: #f2f2f2"
>
    <!-- wp:columns {"verticalAlignment":"center"} -->
    <div class="wp-block-columns are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
        <div
            class="wp-block-column is-vertically-aligned-center"
            style="flex-basis: 25%"
        >
            <!-- wp:image {"width":35,"height":38,"sizeSlug":"large","className":"spotlight-icon"} -->
            <figure class="wp-block-image size-large is-resized spotlight-icon">
                <img
                    src="/wp-content/plugins/mednet-block-patterns/includes/assets/images/svgs/Home_Icon-Spotlight.svg"
                    alt=""
                    width="35"
                    height="38"
                />
            </figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.9px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#002145"}},"fontSize":"larger"} -->
            <p
                class="has-text-color has-larger-font-size"
                style="
                    color: #002145;
                    font-style: normal;
                    font-weight: 500;
                    letter-spacing: 0.9px;
                    text-transform: uppercase;
                "
            >
                FACULTY &amp; STAFF SPOTLIGHT
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>
                Lorem ipsum sit amet, elit, do ut ero labore or one-on-one lorem
                ipsum dolor sit amet staff spotlight.
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
        <div
            class="wp-block-column is-vertically-aligned-center"
            style="flex-basis: 75%"
        >
            <!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[1]}},"displayLayout":{"type":"flex","columns":3}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:post-featured-image {"isLink":true,"width":"","height":"","sizeSlug":"medium_large"} /-->

                <!-- wp:group -->
                <div class="wp-block-group">
                    <!-- wp:post-terms {"term":"post_tag","style":{"color":{"text":"#002145"}},"fontSize":"small"} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.14px","fontStyle":"normal","fontWeight":"400"}}} /-->

                    <!-- wp:post-excerpt /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
