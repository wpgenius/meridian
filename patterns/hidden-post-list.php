<?php
/**
 * Title: Post list
 * Slug: meridian/hidden-post-list
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|neutral-200","width":"1px","style":"solid"}},"spacing":{"padding":{"bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--neutral-200);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--6)"><!-- wp:post-featured-image {"isLink":true,"width":"140px","height":"100px","style":{"border":{"radius":"6px"},"layout":{"selfStretch":"fixed","flexSize":"140px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"primary","fontSize":"xs"} /-->

<!-- wp:post-date {"textColor":"neutral-600","fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"lg"} /-->

<!-- wp:post-excerpt {"moreText":"<?php echo esc_attr__( 'Read more', 'meridian' ); ?>","excerptLength":20,"textColor":"neutral-600","fontSize":"sm"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"meridian/hidden-no-results"} /-->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
