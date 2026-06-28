<?php
/**
 * Hero Bio pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/hero-bio',
	array(
		'title'       => __( 'Hero Bio', 'meridian' ),
		'description' => __( 'Full profile hero section with photo, name, headline, bio, and CTA.', 'meridian' ),
		'categories'  => array( 'mrdn-hero' ),
		'content'     => '<!-- wp:group {"className":"hero-bio","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group hero-bio has-white-background-color has-background">

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"280px","verticalAlignment":"top"} -->
<div class="wp-block-column" style="flex-basis:280px">

<!-- wp:image {"width":"200px","height":"200px","scale":"cover","className":"hero-bio__avatar","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image hero-bio__avatar" style="width:200px;height:200px"><img src="" alt="" style="border-radius:50%;object-fit:cover;width:200px;height:200px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column">

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800"}},"fontSize":"4xl","textColor":"neutral-900"} -->
<h1 class="wp-block-heading has-neutral-900-color has-text-color has-4-xl-font-size" style="font-weight:800">Your Name</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"xl","textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color has-xl-font-size" style="font-weight:600">Leadership Coach &amp; Executive Consultant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"md","textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color has-md-font-size">Helping founders, CXOs, and mid-career leaders build resilience, clarity, and peak performance by integrating 20+ years of corporate leadership expertise with practical mind-body strategies.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Work With Me</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Read My Story</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
	)
);
