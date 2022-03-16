<?php
/**
 * Footer default - light
 *
 * @package Nautilus
 */

return array(
	'title'      => __( 'Footer with light background.', 'nautilus' ),
    'categories' => array( 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull" style="margin-top:3rem">
			<!-- wp:separator {"color":"neutral-300","align":"wide","className":"is-style-wide"} -->
			<hr class="wp-block-separator alignwide has-text-color has-background has-neutral-300-background-color has-neutral-300-color is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"3rem"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-bottom:3rem"><!-- wp:paragraph {"textColor":"primary-light","fontSize":"small"} -->
			<p class="has-primary-font-family has-primary-light-color has-text-color has-small-font-size">© 2022 Outermost, LLC.</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0F172A","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":"0.5rem"}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);