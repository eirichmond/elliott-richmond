<?php
/**
 * Title: single
 * Slug: elliott-richmond/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"600px","wideSize":"1000vw"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:post-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal","layout":{"type":"constrained","contentSize":"","wideSize":"1000vw"}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"primary","fontSize":"xsmall","fontFamily":"questrial","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-primary-color has-text-color has-questrial-font-family has-xsmall-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"68px"} -->
<div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"className":"comments-title","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"medium"} -->
<h1 class="wp-block-heading comments-title has-medium-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e('Comments', 'elliott-richmond');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium","layout":{"type":"constrained","justifyContent":"center","contentSize":"800px","wideSize":"100vw"}} -->
<main class="wp-block-group has-medium-font-size" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-left:0"><!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|30"}},"fontSize":"normal","layout":{"type":"flex"}} -->
<div class="wp-block-group has-normal-font-size" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /-->

<!-- wp:comment-edit-link {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /-->

<!-- wp:comment-reply-link {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination --></div>
<!-- /wp:comments -->

<!-- wp:post-comments-form {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->