<?php
/**
 * Work With Me CTA pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/newsletter-cta',
	array(
		'title'       => __( 'Work With Me CTA', 'meridian' ),
		'description' => __( 'Full-width call-to-action section for coaching and consulting inquiries.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"work-with-me-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|6"},"border":{"radius":"12px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group work-with-me-cta has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-3-xl-font-size" style="font-weight:700">Ready to Perform at Your Peak?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","fontSize":"md","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-md-font-size">Available for executive coaching, keynote speaking, and strategic consulting engagements. Let\'s explore what\'s possible.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|4"}}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"var(--wp--preset--color--primary)"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="color:var(--wp--preset--color--primary);background-color:#ffffff">Book a Discovery Call</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"},"border":{"color":"rgba(255,255,255,0.6)","style":"solid","width":"1px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="color:#ffffff;border-color:rgba(255,255,255,0.6)">View My Work</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
	)
);
