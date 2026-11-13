<?php
/**
 * Title: Talks & Speaking
 * Slug: meridian/talks-grid
 * Categories: meridian-content
 * Keywords: talks, speaking, video, keynote, podcast
 * Description: Two-column grid of talk cards, each with a video embed placeholder, title and summary.
 *
 * @package Meridian
 */

$meridian_talks = array(
	array(
		'title'   => __( 'Scaling a Startup Without Burning Out', 'meridian' ),
		'summary' => __( 'Event name — a short description of the talk and who it was for.', 'meridian' ),
	),
	array(
		'title'   => __( 'From Corporate Leader to Coach', 'meridian' ),
		'summary' => __( 'Podcast or interview name — what you discussed and the key takeaway.', 'meridian' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Talks & Speaking', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"meridian-accent-rule","backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background meridian-accent-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns"><?php foreach ( $meridian_talks as $meridian_talk ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"meridian-card","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"neutral-200","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group meridian-card has-border-color has-neutral-200-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px"><!-- wp:embed {"type":"video","providerNameSlug":"youtube","responsive":true} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)"><!-- wp:heading {"level":3,"fontSize":"md"} -->
<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html( $meridian_talk['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"neutral-600","fontSize":"sm"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size"><?php echo esc_html( $meridian_talk['summary'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
