<?php
/**
 * Title: Footer with no background color.
 * Slug: nautilus/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--xxx-large);margin-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"},"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"primary-light","className":"has-primary-font-family","fontSize":"small"} -->
		<p class="has-primary-font-family has-primary-light-color has-text-color has-small-font-size">© 2022 Nautilus</p>
		<!-- /wp:paragraph -->
		<!-- wp:navigation {"textColor":"primary-light","overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"nowrap"},"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->