<?php
/**
 * Header default - dark
 *
 * @package Nautilus
 */

return array(
	'title'      => __( 'Header with dark background.', 'nautilus' ),
    'categories' => array( 'header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
            <div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:1.5rem;padding-bottom:1.5rem">
            <!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
            <div class="wp-block-group alignwide">
            <!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
            <!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default","style":{"color":{"duotone":["#f9f9f9","#0C1C31"]}}} /-->
            <!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
            <!-- /wp:group -->

            <!-- wp:navigation {"textColor":"borders","overlayBackgroundColor":"primary","overlayTextColor":"background","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"},"fontSize":"small","isResponsive":true} -->
            <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
            <!-- /wp:navigation -->

            <!-- wp:social-links {"iconColor":"background","iconColorValue":"#f9f9f9","size":"has-normal-icon-size","className":"is-style-logos-only hide-on-tablet","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
            <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only hide-on-tablet">
            <!-- wp:social-link {"url":"#","service":"facebook"} /-->
            <!-- wp:social-link {"url":"#","service":"twitter"} /-->
            <!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
            <!-- /wp:social-links --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
);
