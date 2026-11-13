<?php
/**
 * Title: Work With Me Call to Action
 * Slug: meridian/call-to-action
 * Categories: meridian-content, call-to-action
 * Keywords: cta, contact, hire, booking, coaching
 * Description: Centered call-to-action panel inviting visitors to book a call or view your work.
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|8","right":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"},"border":{"radius":"12px"}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--8)"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color"><?php esc_html_e( 'Ready to Perform at Your Peak?', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"md"} -->
<p class="has-text-align-center has-md-font-size"><?php esc_html_e( 'Available for executive coaching, keynote speaking and consulting engagements. Let’s talk about what you want to achieve.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Book a Discovery Call', 'meridian' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color wp-element-button"><?php esc_html_e( 'View My Work', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
