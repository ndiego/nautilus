<?php
/**
 * Title: Home Template
 * Slug: nautilus/template-home
 * Inserter: no
 * Template Types: home, front-page
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"720px","wideSize":"920px"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
    <!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"wp-block-heading","fontSize":"xxxxx-large"} -->
    <h1 class="wp-block-heading alignwide has-xxxxx-large-font-size" id="hi-there" style="margin-top:var(--wp--preset--spacing--xx-large);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><meta charset="utf-8">Hi there<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color">.</mark></h1>
    <!-- /wp:heading -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p>Welcome to my site. I am a passionate Developer and contributor to various open-source projects, including WordPress. In addition, I have experience in plugin development and digital marketing.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>This site is dedicated to my current projects and interests in web development and digital marketing. Feel free to explore and learn more about my work.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"neutral-300","className":"is-style-waves"} -->
    <hr class="wp-block-separator has-text-color has-neutral-300-color has-alpha-channel-opacity has-neutral-300-background-color has-background is-style-waves" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)"/>
    <!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|large","bottom":"0","left":"var:preset|spacing|large"}}},"layout":{"inherit":false,"contentSize":"720px","type":"constrained","wideSize":"920px"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--large);padding-bottom:0;padding-left:var(--wp--preset--spacing--large)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-xxx-large-font-size">Recent articles</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">Periodic content on WordPress development, tutorials, personal project updates, and other useful resources.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)">
                <!-- wp:button -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link wp-element-button" href="https://nickdiego.com/writing/">All articles</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:spacer {"height":"var:preset|spacing|large"} -->
            <div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom">
            <!-- wp:query {"queryId":4,"query":{"perPage":"1","pages":"1","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"layout":{"type":"default"}} -->
                    <!-- wp:pattern {"slug":"nautilus/hover-card-query"} /-->
                <!-- /wp:post-template -->

                <!-- wp:pattern {"slug":"nautilus/hidden-query-no-results"} /-->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"var:preset|spacing|large"} -->
    <div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:group {"metadata":{"name":"Main Query"},"align":"wide","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0">
        <!-- wp:query {"queryId":7,"query":{"perPage":"4","pages":"0","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"is-style-2x-gap"} -->
        <div class="wp-block-query alignwide is-style-2x-gap">
            <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:pattern {"slug":"nautilus/hover-card-query"} /-->
            <!-- /wp:post-template -->

            <!-- wp:pattern {"slug":"nautilus/hidden-query-no-results"} /-->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"neutral-300","className":"is-style-waves"} -->
    <hr class="wp-block-separator has-text-color has-neutral-300-color has-alpha-channel-opacity has-neutral-300-background-color has-background is-style-waves" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)"/>
    <!-- /wp:separator -->

    <!-- wp:pattern {"slug":"nautilus/subscribe-card"} /-->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->