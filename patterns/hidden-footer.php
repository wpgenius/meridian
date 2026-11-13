<?php
/**
 * Title: Footer
 * Slug: meridian/hidden-footer
 * Inserter: no
 *
 * @package Meridian
 */

?>
<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|8"},"border":{"top":{"color":"var:preset|color|neutral-200","width":"1px","style":"solid"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group site-footer has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--neutral-200);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36} /-->

<!-- wp:site-title {"level":0,"fontSize":"md"} /--></div>
<!-- /wp:group -->

<!-- wp:site-tagline {"textColor":"neutral-600","fontSize":"sm"} /-->

<!-- wp:social-links {"iconColor":"neutral-600","iconColorValue":"#4b5563","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|4"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"neutral-600","fontSize":"xs","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-neutral-600-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Navigation', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"fontSize":"sm"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"neutral-600","fontSize":"xs","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-neutral-600-color has-text-color has-inter-font-family has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'Work With Me', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"neutral-600","fontSize":"sm"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size"><?php esc_html_e( 'Available for coaching, keynotes and consulting engagements.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"sm"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-sm-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'Book a Discovery Call', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"neutral-200","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-200-color has-alpha-channel-opacity has-neutral-200-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontWeight":"400"}},"textColor":"neutral-600","fontSize":"xs"} /-->

<!-- wp:paragraph {"textColor":"neutral-600","fontSize":"xs"} -->
<p class="has-neutral-600-color has-text-color has-xs-font-size">
<?php
printf(
	/* translators: %s: link to WordPress.org */
	esc_html__( 'Proudly powered by %s', 'meridian' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'meridian' ) ) . '" rel="nofollow">WordPress</a>'
);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
