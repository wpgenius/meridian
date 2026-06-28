<?php
/**
 * Newsletter CTA pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/newsletter-cta',
	array(
		'title'       => __( 'Newsletter CTA', 'meridian' ),
		'description' => __( 'Full-width email subscribe call-to-action section.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"newsletter-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"},"blockGap":"var:preset|spacing|6"},"border":{"radius":"12px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group newsletter-cta has-primary-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-3-xl-font-size" style="font-weight:700">Never Miss a Post</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","fontSize":"md","textColor":"white","style":{"color":{"opacity":0.85}}} -->
<p class="has-text-align-center has-white-color has-text-color has-md-font-size">Get weekly insights on leadership, resilience, and peak performance delivered straight to your inbox.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="mrdn-subscribe-form-wrap" style="max-width:420px;margin:0 auto">
	<form action="#" method="post" class="mrdn-subscribe-form mrdn-subscribe-form--cta">
		<label for="mrdn-cta-email" class="screen-reader-text"><?php esc_html_e( 'Your email address', 'meridian' ); ?></label>
		<input type="email" id="mrdn-cta-email" name="email" placeholder="<?php esc_attr_e( 'Your best email address', 'meridian' ); ?>" required autocomplete="email" />
		<button type="submit"><?php esc_html_e( 'Subscribe Free', 'meridian' ); ?></button>
	</form>
	<p class="mrdn-subscribe-privacy"><?php esc_html_e( 'No spam, ever. Unsubscribe anytime.', 'meridian' ); ?></p>
</div>
<!-- /wp:html -->

</div>
<!-- /wp:group -->',
	)
);
