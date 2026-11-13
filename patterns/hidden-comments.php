<?php
/**
 * Title: Comments
 * Slug: meridian/hidden-comments
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|12"}}}} -->
<div class="wp-block-comments" style="margin-top:var(--wp--preset--spacing--12)"><!-- wp:comments-title {"level":2,"fontSize":"2xl"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--6)"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm"} /-->

<!-- wp:comment-date {"textColor":"neutral-600","fontSize":"xs"} /-->

<!-- wp:comment-content {"fontSize":"sm"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-reply-link {"fontSize":"xs"} /-->

<!-- wp:comment-edit-link {"fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->
