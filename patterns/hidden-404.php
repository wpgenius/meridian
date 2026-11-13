<?php
/**
 * Title: 404 content
 * Slug: meridian/hidden-404
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"8rem","fontWeight":"700","lineHeight":"1"}},"textColor":"neutral-200"} -->
<p class="has-text-align-center has-neutral-200-color has-text-color" style="font-size:8rem;font-weight:700;line-height:1">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"3xl"} -->
<h1 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php esc_html_e( 'Page not found', 'meridian' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"neutral-600","fontSize":"md"} -->
<p class="has-text-align-center has-neutral-600-color has-text-color has-md-font-size"><?php esc_html_e( 'The page you are looking for may have been moved or deleted. Try searching instead.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'meridian' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the site…', 'meridian' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'meridian' ); ?>","buttonUseIcon":true} /--></div>
<!-- /wp:group -->
