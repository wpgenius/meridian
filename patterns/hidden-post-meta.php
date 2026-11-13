<?php
/**
 * Title: Post meta and navigation
 * Slug: meridian/hidden-post-meta
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"padding":{"top":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|8"},"border":{"top":{"color":"var:preset|color|neutral-200","width":"1px","style":"solid"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--neutral-200);border-top-style:solid;border-top-width:1px;margin-top:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--6)"><!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_attr__( 'Tags: ', 'meridian' ); ?>","style":{"typography":{"fontWeight":"500"}},"textColor":"neutral-600","fontSize":"sm"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr__( 'Previous', 'meridian' ); ?>","showTitle":true,"arrow":"arrow","fontSize":"sm"} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":"<?php echo esc_attr__( 'Next', 'meridian' ); ?>","showTitle":true,"arrow":"arrow","fontSize":"sm"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
