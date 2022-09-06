<?php
/**
 * Title: Header with no background color.
 * Slug: nautilus/header
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"},"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"has-hover-no-duotone"} -->
		<div class="wp-block-group has-hover-no-duotone">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-rounded","style":{"color":{"duotone":["#000217","#F9FAFB"]}}} /-->
			<!-- wp:site-title {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.5px"}},"textColor":"primary"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayBackgroundColor":"primary","overlayTextColor":"primary-lighter","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->