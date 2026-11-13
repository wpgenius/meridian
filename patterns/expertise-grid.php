<?php
/**
 * Title: Expertise Grid
 * Slug: meridian/expertise-grid
 * Categories: meridian-content
 * Keywords: skills, services, expertise, grid, cards
 * Description: Section heading followed by three cards describing areas of expertise.
 *
 * @package Meridian
 */

$meridian_cards = array(
	array(
		'title' => __( 'Executive Leadership', 'meridian' ),
		'text'  => __( 'Strategic planning, organizational design and cross-functional team leadership for growing companies.', 'meridian' ),
	),
	array(
		'title' => __( 'Resilience Coaching', 'meridian' ),
		'text'  => __( 'Building clarity, emotional intelligence and sustainable habits that prevent burnout.', 'meridian' ),
	),
	array(
		'title' => __( 'Product & Delivery', 'meridian' ),
		'text'  => __( 'End-to-end product development, agile delivery and client account management.', 'meridian' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Areas of Expertise', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"meridian-accent-rule","backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background meridian-accent-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><?php foreach ( $meridian_cards as $meridian_card ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"meridian-card","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"white","borderColor":"neutral-200","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group meridian-card has-border-color has-neutral-200-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"md"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-md-font-size"><?php echo esc_html( $meridian_card['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"neutral-600","fontSize":"sm"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size"><?php echo esc_html( $meridian_card['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
