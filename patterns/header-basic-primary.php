<?php
/**
 * Title: Basic header with primary background color.
 * Slug: nautilus/header-basic-primary
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"backgroundColor":"primary","textColor":"neutral","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-neutral-color has-primary-background-color has-text-color has-background" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default flex-shrink-0","style":{"color":{"duotone":["#F9FAFB","#0F172A"]}}} /-->
			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|neutral"}}}},"textColor":"neutral"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"neutral-300","overlayBackgroundColor":"primary","overlayTextColor":"neutral-300","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small"} -->
			<!-- wp:page-list /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->