<?php
/**
 * Expertise Grid pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/expertise-grid',
	array(
		'title'       => __( 'Expertise Grid', 'meridian' ),
		'description' => __( 'A responsive grid of skill and expertise areas.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"expertise-section","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group expertise-section">

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"neutral-900"} -->
<h2 class="wp-block-heading has-neutral-900-color has-text-color has-3-xl-font-size" style="font-weight:700">Areas of Expertise</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"var:preset|color|primary"}},"className":"is-style-wide","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide" style="width:60px"/>
<!-- /wp:separator -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"md","textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-md-font-size" style="font-weight:600">Executive Leadership</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size">Strategic planning, organizational design, cross-functional team leadership, and operational excellence for high-growth companies.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"md","textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-md-font-size" style="font-weight:600">Resilience Coaching</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size">Building mental clarity, emotional intelligence, and sustainable habits that prevent burnout while maximizing peak performance.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"md","textColor":"primary"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-md-font-size" style="font-weight:600">Product &amp; Delivery</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size">End-to-end product development, agile delivery, and client account management across diverse industries with 100% on-time delivery track record.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
	)
);
