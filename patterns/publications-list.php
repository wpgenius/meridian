<?php
/**
 * Title: Publications List
 * Slug: meridian/publications-list
 * Categories: meridian-content
 * Keywords: books, articles, publications, writing
 * Description: Stacked list of books or articles with a type label, title, summary and link button.
 *
 * @package Meridian
 */

$meridian_publications = array(
	array(
		'type'    => __( 'Book', 'meridian' ),
		'title'   => __( 'Title of Your Book', 'meridian' ),
		'summary' => __( 'A one-sentence summary of the book and the reader it is written for.', 'meridian' ),
	),
	array(
		'type'    => __( 'Article', 'meridian' ),
		'title'   => __( 'Title of Your Article', 'meridian' ),
		'summary' => __( 'Where it was published and the main idea it explores.', 'meridian' ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Publications', 'meridian' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"meridian-accent-rule","backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background meridian-accent-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><?php foreach ( $meridian_publications as $meridian_publication ) : ?><!-- wp:group {"className":"meridian-accent-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group meridian-accent-card has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--6)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"neutral-600","fontSize":"xs"} -->
<p class="has-neutral-600-color has-text-color has-xs-font-size" style="font-weight:600;letter-spacing:0.06em;text-transform:uppercase"><?php echo esc_html( $meridian_publication['type'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"md"} -->
<h3 class="wp-block-heading has-md-font-size"><?php echo esc_html( $meridian_publication['title'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"neutral-600","fontSize":"sm"} -->
<p class="has-neutral-600-color has-text-color has-sm-font-size"><?php echo esc_html( $meridian_publication['summary'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--2)"><!-- wp:button {"className":"is-style-outline","fontSize":"xs"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-xs-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'Read more', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
