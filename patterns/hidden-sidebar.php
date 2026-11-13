<?php
/**
 * Title: Sidebar
 * Slug: meridian/hidden-sidebar
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:group {"tagName":"aside","className":"site-sidebar","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<aside class="wp-block-group site-sidebar" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":120,"className":"is-style-rounded"} /-->

<!-- wp:site-title {"level":0,"fontSize":"xl"} /-->

<!-- wp:site-tagline {"textColor":"neutral-600","fontSize":"sm"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"neutral-200","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-200-color has-alpha-channel-opacity has-neutral-200-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"textColor":"neutral-700","fontSize":"sm"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size"><?php esc_html_e( 'Introduce yourself in a few sentences: who you are, who you help and how. Edit this text in the Site Editor under Patterns › Template Parts › Sidebar.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"neutral-600","fontSize":"xs","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-neutral-600-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Connect', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"neutral-700","iconColorValue":"#374151","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|4"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
