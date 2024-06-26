<?php
/**
 * Title: 404 error content, but with tentacles.
 * Slug: nautilus/hidden-404-tentacles
 * Inserter: no
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"0px","bottom":"0px","left":"0px"},"blockGap":{"top":"4rem","left":"4rem"}}},"backgroundColor":"secondary","textColor":"neutral","layout":{"type":"constrained","contentSize":"720px","wideSize":"900px"}} -->
<div class="wp-block-group alignfull has-neutral-color has-secondary-background-color has-text-color has-background" style="padding-top:8rem;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:group -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"200"}},"fontSize":"xxxxx-large","fontFamily":"monospace"} -->
		<h1 class="has-monospace-font-family has-xxxxx-large-font-size" style="font-style:normal;font-weight:200;line-height:1">404</h1>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"has-primary-font-family","fontSize":"x-large"} -->
			<p class="has-text-align-left has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:600">Well this doesn't look right…</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"left","className":"has-primary-font-family","fontSize":"small"} -->
			<p class="has-text-align-left has-primary-font-family has-small-font-size">The page you're searching for no longer exists. Try one of these instead:</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size"><a class="wp-block-button__link">Home</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size"><a class="wp-block-button__link">About</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size"><a class="wp-block-button__link">Projects</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size"><a class="wp-block-button__link">Contact</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:image {"align":"wide","id":690,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404-tentacles.png" alt=""/></figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->
