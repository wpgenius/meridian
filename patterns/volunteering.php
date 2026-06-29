<?php
/**
 * Volunteering pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/volunteering',
	array(
		'title'       => __( 'Volunteering & Causes', 'meridian' ),
		'description' => __( 'A section highlighting volunteering activities and causes.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"volunteering-section","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group volunteering-section">

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"neutral-900"} -->
<h2 class="wp-block-heading has-neutral-900-color has-text-color has-3-xl-font-size" style="font-weight:700">Volunteering</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"var:preset|color|primary"},"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
<hr class="wp-block-separator has-primary-background-color has-background" style="width:60px"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"volunteering-item","style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group volunteering-item has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg","textColor":"neutral-900"} -->
<h3 class="wp-block-heading has-neutral-900-color has-text-color has-lg-font-size" style="font-weight:600">Entrepreneurship Mentor</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"secondary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-secondary-color has-text-color has-xs-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em">Education &amp; Economic Empowerment</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"sm","textColor":"primary","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:500">Growth Catalyst Program &mdash; Community Learning Network &amp; Career Pathways Foundation</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size">Mentored 8 self-funded entrepreneurs under the Entrepreneurship Development Program. 2 of the 8 candidates grew their revenue by 1.5x in 6 months. Conducted business basics sessions to help program candidates run small businesses in a formal and structured manner.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
	)
);
