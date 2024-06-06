<?php
/**
 * Title: Index Template
 * Slug: nautilus/template-index
 * Inserter: no
 * Template Types: archive, author, category, date, home, front-page, tag, taxonomy
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"inherit":false,"contentSize":"720px","wideSize":"920px","type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)">
        <!-- wp:query-title {"type":"archive"} /-->
        <!-- wp:term-description {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-light"}}}},"textColor":"primary-light"} /-->
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
            <!-- wp:query-pagination-previous {"label":"Newer articles","fontSize":"small"} /-->
            <!-- wp:query-pagination-next {"label":"Older articles","fontSize":"small"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->