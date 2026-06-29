<?php
/**
 * Experience Timeline pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/experience-timeline',
	array(
		'title'       => __( 'Experience Timeline', 'meridian' ),
		'description' => __( 'A vertical timeline of professional experience entries.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"experience-section","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group experience-section">

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"neutral-900"} -->
<h2 class="wp-block-heading has-neutral-900-color has-text-color has-3-xl-font-size" style="font-weight:700">Experience</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"var:preset|color|primary"},"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
<hr class="wp-block-separator has-primary-background-color has-background" style="width:60px"/>
<!-- /wp:separator -->

<!-- wp:group {"className":"timeline","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group timeline">

<!-- wp:group {"className":"timeline-item","style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px","style":"solid"}},"spacing":{"padding":{"left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group timeline-item" style="border-left:3px solid var(--wp--preset--color--primary);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg","textColor":"neutral-900"} -->
<h3 class="wp-block-heading has-neutral-900-color has-text-color has-lg-font-size" style="font-weight:600">Co-Founder &amp; COO/CPO</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"neutral-400","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-neutral-400-color has-text-color has-xs-font-size" style="font-weight:500">2022 – Present</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:600">IntuiWell</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size">Co-founded a comprehensive personal and professional development company focused on peak performance for high performers. Built proprietary frameworks including the Mind-Body Momentum Map and Resilience Loops.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"timeline-item","style":{"border":{"left":{"color":"var:preset|color|neutral-200","width":"3px","style":"solid"}},"spacing":{"padding":{"left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group timeline-item" style="border-left:3px solid var(--wp--preset--color--neutral-200);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg","textColor":"neutral-900"} -->
<h3 class="wp-block-heading has-neutral-900-color has-text-color has-lg-font-size" style="font-weight:600">Chief Operating Officer</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"neutral-400","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-neutral-400-color has-text-color has-xs-font-size" style="font-weight:500">2018 – 2022</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:600">Mobifilia</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size">Spearheaded organization-wide strategies that significantly increased operational efficiency, improved client satisfaction, and boosted eNPS score. Streamlined processes and set benchmarks for operational excellence.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"timeline-item","style":{"border":{"left":{"color":"var:preset|color|neutral-200","width":"3px","style":"solid"}},"spacing":{"padding":{"left":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group timeline-item" style="border-left:3px solid var(--wp--preset--color--neutral-200);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"}},"fontSize":"lg","textColor":"neutral-900"} -->
<h3 class="wp-block-heading has-neutral-900-color has-text-color has-lg-font-size" style="font-weight:600">Head of Delivery</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"neutral-400","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-neutral-400-color has-text-color has-xs-font-size" style="font-weight:500">2014 – 2018</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"primary","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:600">Previous Company</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"sm","textColor":"neutral-700"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size">Managed client accounts across diverse industries, ensuring 100% project delivery. Directed product development that attracted $2M post-MVP investment. Drove business growth through productizing services.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
	)
);
