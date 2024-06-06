<?php
/**
 * Title: Search Template
 * Slug: nautilus/template-search
 * Inserter: no
 * Template Types: search
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"inherit":false,"contentSize":"720px","wideSize":"920px","type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)">
        <!-- wp:query-title {"type":"search"} /-->
        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search posts","width":"100%","widthUnit":"px","buttonText":"Search","buttonPosition":"no-button","style":{"border":{"width":"1px"},"typography":{"lineHeight":"2"}},"borderColor":"neutral-300"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":"0","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"is-style-2x-gap"} -->
    <div class="wp-block-query alignwide is-style-2x-gap">
        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2},"fontSize":"medium"} -->
            <!-- wp:pattern {"slug":"nautilus/hover-card-query"} /-->
        <!-- /wp:post-template -->

        <!-- wp:pattern {"slug":"nautilus/query-no-results"} /-->

        <!-- wp:spacer {"height":"3rem"} -->
        <div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"label":"Newer Articles","fontSize":"small"} /-->
            <!-- wp:query-pagination-next {"label":"Older Articles","fontSize":"small"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->