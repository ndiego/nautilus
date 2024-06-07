<?php
/**
 * Title: Header with no background color.
 * Slug: nautilus/header
 * Categories: header
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"},"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"has-hover-no-duotone"} -->
		<div class="wp-block-group has-hover-no-duotone">
			<!-- wp:site-logo {"width":60,"align":"center","className":"is-style-rounded"} /-->
			<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayBackgroundColor":"primary","overlayTextColor":"neutral","layout":{"type":"flex","orientation":"horizontal"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->