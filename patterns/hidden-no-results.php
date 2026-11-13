<?php
/**
 * Title: No results
 * Slug: meridian/hidden-no-results
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xl"} -->
<h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php esc_html_e( 'Nothing found', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"neutral-600","fontSize":"sm"} -->
<p class="has-text-align-center has-neutral-600-color has-text-color has-sm-font-size"><?php esc_html_e( 'Sorry, nothing matched. Try a different search.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'meridian' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search posts…', 'meridian' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'meridian' ); ?>","buttonUseIcon":true} /--></div>
<!-- /wp:group -->
