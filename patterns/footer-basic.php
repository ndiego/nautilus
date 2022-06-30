<?php
/**
 * Title: Basic footer with no background color.
 * Slug: nautilus/footer-basic
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1296
 */

?>
<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"3rem"} -->
	<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:separator {"color":"neutral-300","align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-background has-neutral-300-background-color has-neutral-300-color is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"3rem"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:3rem">
		<!-- wp:paragraph {"textColor":"primary-light","fontSize":"small"} -->
		<p class="has-primary-font-family has-primary-light-color has-text-color has-small-font-size">© 2022 Outermost, LLC.</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"nowrap"},"fontSize":"small"} -->
			<!-- wp:navigation-link {"label":"Terms","url":"#"} /-->
			<!-- wp:navigation-link {"label":"Privacy","url":"#"} /-->
			<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0F172A","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":"0.5rem"}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"service":"facebook","url":"#"} /-->
				<!-- wp:social-link {"service":"twitter","url":"#"} /-->
				<!-- wp:social-link {"service":"linkedin","url":"#"} /-->
			</ul>
			<!-- /wp:social-links -->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->