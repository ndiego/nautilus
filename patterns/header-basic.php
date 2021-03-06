<?php
/**
 * Title: Basic header with no background color.
 * Slug: nautilus/header-basic
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-default flex-shrink-0","style":{"color":{"duotone":["#0F172A","#F9FAFB"]}}} /-->
			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayBackgroundColor":"neutral-100","overlayTextColor":"primary","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small"} -->
			<!-- wp:page-list /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
