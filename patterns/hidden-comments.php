<?php
/**
 * Title: Comments
 * Slug: nautilus/hidden-comments
 * Inserter: no
 */

?>
<!-- wp:comments -->
<div class="wp-block-comments">
	<!-- wp:comments-title {"textAlign":"left","showPostTitle":false,"showCommentsCount":false,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|large","left":"0"}}}} /-->

	<!-- wp:comment-template -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"width":"40px","style":{"spacing":[]}} -->
		<div class="wp-block-column" style="flex-basis:40px">
			<!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|neutral-300","width":"1px"}}}} -->
		<div class="wp-block-column" style="border-bottom-color:var(--wp--preset--color--neutral-300);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:comment-author-name {"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","fontFamily":"primary"} /-->
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex"},"fontSize":"x-small"} -->
			<div class="wp-block-group has-x-small-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:500">
				<!-- wp:comment-date {"isLink":false} /-->
				<!-- wp:comment-edit-link {"fontFamily":"primary"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:comment-content {"fontSize":"small"} /-->
			<!-- wp:comment-reply-link {"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- /wp:comment-template -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->