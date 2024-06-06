<?php
/**
 * Title: Single Template
 * Slug: nautilus/template-single
 * Inserter: no
 * Template Types: attachment, page, single, singular
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Post Title + Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-large","margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"contentSize":"720px","wideSize":"960px","type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"},"fontSize":"x-small"} -->
        <div class="wp-block-group has-x-small-font-size" style="font-style:normal;font-weight:500">
            <!-- wp:post-terms {"term":"category"} /-->

            <!-- wp:paragraph {"textColor":"neutral-300","fontSize":"tiny"} -->
            <p class="has-neutral-300-color has-text-color has-tiny-font-size">|</p>
            <!-- /wp:paragraph -->

            <!-- wp:post-date {"format":"F j, Y","className":"no-flex-shrink"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-title {"level":1} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:post-featured-image {"align":"wide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Post Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
</main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"After Post Meta"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
        <!-- wp:post-terms {"term":"category","separator":"","className":"is-style-outline","fontSize":"x-small"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0.5px","textTransform":"uppercase"},"spacing":{"margin":{"top":"2px"}}},"textColor":"primary-light","fontSize":"x-small","fontFamily":"primary"} -->
            <p class="has-primary-light-color has-text-color has-primary-font-family has-x-small-font-size" style="margin-top:2px;font-style:normal;font-weight:500;letter-spacing:0.5px;text-transform:uppercase">Sharing:</p>
            <!-- /wp:paragraph -->

            <!-- wp:outermost/social-sharing {"iconColor":"primary","iconColorValue":"#0F172A","size":"has-small-icon-size","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"className":"is-style-logos-only"} -->
            <ul class="wp-block-outermost-social-sharing has-small-icon-size has-icon-color is-style-logos-only">
                <!-- wp:outermost/social-sharing-link {"service":"facebook"} /-->
                <!-- wp:outermost/social-sharing-link {"service":"twitter"} /-->
                <!-- wp:outermost/social-sharing-link {"service":"linkedin","label":""} /-->
            </ul>
            <!-- /wp:outermost/social-sharing -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"nautilus/subscribe-card"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xxx-large)">
    <!-- wp:pattern {"slug":"nautilus/comments"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Recent Posts"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xxx-large);margin-bottom:var(--wp--preset--spacing--xxx-large)">
    <!-- wp:query {"queryId":7,"query":{"perPage":"3","pages":"1","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null},"align":"wide","className":"is-style-2x-gap","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide is-style-2x-gap">
        <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"align":"wide"} -->
            <h2 class="wp-block-heading alignwide" id="h-latest-articles">Latest articles</h2>
            <!-- /wp:heading -->

            <!-- wp:outermost/icon-block {"iconName":"wordpress-heading","iconColor":"secondary","iconColorValue":"#0B8082","className":"items-justified-undefined"} -->
            <div class="wp-block-outermost-icon-block items-justified-undefined"><div class="icon-container has-icon-color has-secondary-color" style="color:#0B8082;width:48px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 5V18.5911L12 13.8473L18 18.5911V5H6Z"></path></svg></div></div>
            <!-- /wp:outermost/icon-block -->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:pattern {"slug":"nautilus/hover-card-query"} /-->
        <!-- /wp:post-template -->

        <!-- wp:pattern {"slug":"nautilus/query-no-results"} /-->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->