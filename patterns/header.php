<?php
/**
 * Title: Header with light background.
 * Slug: nautilus/header
 * Categories: header
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default","style":{"color":{"duotone":["#0F172A","#F9FAFB"]}}} /-->
			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"primary-light","overlayBackgroundColor":"primary","overlayTextColor":"neutral","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"},"fontSize":"small","isResponsive":true} -->
			<!-- wp:page-list /-->
		<!-- /wp:navigation -->

		<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0F172A","size":"has-normal-icon-size","className":"is-style-logos-only hide-on-tablet","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only hide-on-tablet">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
