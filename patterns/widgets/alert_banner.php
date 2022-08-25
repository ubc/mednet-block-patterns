<!-- wp:group {"className":"alert-banner"} -->
<div class="wp-block-group alert-banner">
    <!-- wp:columns {"isStackedOnMobile":false,"className":"no-margin"} -->
    <div class="wp-block-columns is-not-stacked-on-mobile no-margin">
        <!-- wp:column {"verticalAlignment":"center","width":"30px"} -->
        <div
            class="wp-block-column is-vertically-aligned-center"
            style="flex-basis: 30px"
        >
            <!-- wp:paragraph {"lock":{"move":true,"remove":true} "className":"circle-icon"} -->
            <p class="circle-icon">!</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis: 100%">
            <!-- wp:paragraph {"placeholder":"Alert Message: Display a notification for the user. User can close the notification."} -->
            <p></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"25px"} -->
        <div
            class="wp-block-column is-vertically-aligned-top"
            style="flex-basis: 25px"
        >
            <!-- wp:paragraph -->
            <p><span class="closebtn" onclick="closeAlert()">×</span></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
