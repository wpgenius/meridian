<?php
/**
 * Publications List pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/publications-list',
	array(
		'title'       => __( 'Publications List', 'meridian' ),
		'description' => __( 'A styled list of books, articles, and publications.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"publications-section","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group publications-section">

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"neutral-900"} -->
<h2 class="wp-block-heading has-neutral-900-color has-text-color has-3-xl-font-size" style="font-weight:700">Publications</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"var:preset|color|primary"},"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
<hr class="wp-block-separator has-primary-background-color has-background" style="width:60px"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"publications-list","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group publications-list">

<!-- wp:group {"className":"publication-item","style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group publication-item has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs","textColor":"neutral-400"} -->
<p class="has-neutral-400-color has-text-color has-xs-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.06em">Book</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"md","textColor":"neutral-900"} -->
<h4 class="wp-block-heading has-neutral-900-color has-text-color has-md-font-size" style="font-weight:600">Smart Sugar Control: A Wellness Guide</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size">A Glycemic-Index Roadmap for Indian Meals — practical guidance for managing blood sugar through culturally relevant dietary choices.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"0.75rem"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="font-size:0.75rem">View on Amazon →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"publication-item","style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group publication-item has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|1"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"xs","textColor":"neutral-400"} -->
<p class="has-neutral-400-color has-text-color has-xs-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.06em">Book</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"md","textColor":"neutral-900"} -->
<h4 class="wp-block-heading has-neutral-900-color has-text-color has-md-font-size" style="font-weight:600">The Gut Reset</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size">A Practical Indian Roadmap to Bloating, Acidity, Constipation &amp; More — evidence-based strategies for digestive wellness using Indian dietary traditions.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"typography":{"fontSize":"0.75rem"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="font-size:0.75rem">View on Amazon →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
	)
);
