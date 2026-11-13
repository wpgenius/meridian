<?php
/**
 * Title: Experience Timeline
 * Slug: meridian/experience-timeline
 * Categories: meridian-content
 * Keywords: experience, career, timeline, resume, cv
 * Description: Vertical timeline of roles with dates, organization and a short summary.
 *
 * @package Meridian
 */

$meridian_roles = array(
	array(
		'role'    => __( 'Co-Founder & Chief Operating Officer', 'meridian' ),
		'dates'   => __( '2022 – Present', 'meridian' ),
		'company' => __( 'Company Name', 'meridian' ),
		'summary' => __( 'Describe your responsibilities and the results you delivered in this role. Focus on outcomes your audience cares about.', 'meridian' ),
	),
	array(
		'role'    => __( 'Chief Operating Officer', 'meridian' ),
		'dates'   => __( '2018 – 2022', 'meridian' ),
		'company' => __( 'Company Name', 'meridian' ),
		'summary' => __( 'Summarize the strategies you led, the teams you built and the improvements you made.', 'meridian' ),
	),
	array(
		'role'    => __( 'Head of Delivery', 'meridian' ),
		'dates'   => __( '2014 – 2018', 'meridian' ),
		'company' => __( 'Company Name', 'meridian' ),
		'summary' => __( 'Highlight key projects, clients or milestones from this part of your career.', 'meridian' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Experience', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"meridian-accent-rule","backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background meridian-accent-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"meridian-timeline","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group meridian-timeline"><?php foreach ( $meridian_roles as $meridian_role ) : ?><!-- wp:group {"className":"meridian-timeline__item","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group meridian-timeline__item"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size"><?php echo esc_html( $meridian_role['role'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"neutral-600","fontSize":"xs"} -->
<p class="has-neutral-600-color has-text-color has-xs-font-size" style="font-weight:500"><?php echo esc_html( $meridian_role['dates'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"sm"} -->
<p class="has-primary-color has-text-color has-sm-font-size" style="font-weight:600"><?php echo esc_html( $meridian_role['company'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"neutral-700","fontSize":"sm"} -->
<p class="has-neutral-700-color has-text-color has-sm-font-size"><?php echo esc_html( $meridian_role['summary'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
