<?php
/**
 * Header default - light
 *
 * @package Nautilus
 */

return array(
	'title'      => __( 'Header with light background.', 'nautilus' ),
    'categories' => array( 'header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default","style":{"color":{"duotone":["#0F172A","#F9FAFB"]}}} /-->

			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
			<!-- /wp:group -->

			<!-- wp:navigation {"overlayBackgroundColor":"neutral-100","overlayTextColor":"primary","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small"} -->
			<!-- wp:page-list /-->
			<!-- /wp:navigation -->
			</div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);
