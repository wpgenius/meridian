<?php
/**
 * Title: Volunteering & Causes
 * Slug: meridian/volunteering
 * Categories: meridian-content
 * Keywords: volunteering, causes, mentoring, community, nonprofit
 * Description: Highlight card for a volunteering role with its cause, organization and impact.
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Volunteering', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"meridian-accent-rule","backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background meridian-accent-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"meridian-accent-card meridian-accent-card--secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group meridian-accent-card meridian-accent-card--secondary has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Entrepreneurship Mentor', 'meridian' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Education & Economic Empowerment', 'meridian' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"primary","fontSize":"sm"} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:500"><?php esc_html_e( 'Organization or program name', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"neutral-700","fontSize":"sm"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size"><?php esc_html_e( 'Describe what you did, who you supported and the difference it made. Numbers help: people mentored, hours given, results achieved.', 'meridian' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
