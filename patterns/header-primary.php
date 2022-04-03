<?php
/**
 * Title: Header with dark background.
 * Slug: nautilus/header-primary
 * Categories: header
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"backgroundColor":"primary","textColor":"neutral","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-neutral-color has-primary-background-color has-text-color has-background" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default","style":{"color":{"duotone":["#F9FAFB","#0F172A"]}}} /-->
			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral"}}}},"textColor":"neutral"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"neutral-300","overlayBackgroundColor":"primary","overlayTextColor":"neutral-300","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small"} -->
			<!-- wp:page-list /-->
		<!-- /wp:navigation -->

		<!-- wp:social-links {"iconColor":"neutral","iconColorValue":"#F9FAFB","size":"has-normal-icon-size","className":"is-style-logos-only hide-on-tablet","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
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
