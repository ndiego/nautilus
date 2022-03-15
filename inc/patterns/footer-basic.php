<?php
/**
 * Footer default - light
 *
 * @package Nautilus
 */

return array(
	'title'      => __( 'Footer with light background.', 'nautilus' ),
    'categories' => array( 'footer' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
            <div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"4.5rem","bottom":"3rem"}}}} -->

			<!-- wp:separator {"color":"primary-light","align":"wide","className":"is-style-wide opacity-20"} -->
			<hr class="wp-block-separator alignwide has-text-color has-background has-primary-light-background-color has-primary-light-color is-style-wide opacity-20"/>
			<!-- /wp:separator -->

            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"3rem"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
            <div class="wp-block-group alignwide" style="padding-bottom:3rem"><!-- wp:paragraph {"textColor":"tertiary","className":"has-primary-font-family","fontSize":"small"} -->
            <p class="has-primary-font-family has-primary-light-color has-text-color has-small-font-size">© 2022 Outermost, LLC.</p>
            <!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0F172A","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":"0.5rem"}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"service":"facebook","url":"#"} /-->
			<!-- wp:social-link {"service":"twitter","url":"#"} /-->
			<!-- wp:social-link {"service":"linkedin","url":"#"} /--></ul>
			<!-- /wp:social-links --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
);