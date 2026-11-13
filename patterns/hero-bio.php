<?php
/**
 * Title: Hero Bio
 * Slug: meridian/hero-bio
 * Categories: meridian-hero
 * Keywords: hero, bio, profile, about, introduction
 * Description: Profile introduction with photo, name, headline, short bio and call-to-action buttons.
 *
 * @package Meridian
 */

?>
<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(160deg,rgb(245,243,239) 0%,rgb(255,255,255) 55%)"},"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:12px;background:linear-gradient(160deg,rgb(245,243,239) 0%,rgb(255,255,255) 55%);padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"220px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:220px"><!-- wp:image {"width":"200px","height":"200px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/avatar-placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Profile photo', 'meridian' ); ?>" style="object-fit:cover;width:200px;height:200px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"fontSize":"4xl"} -->
<h1 class="wp-block-heading has-4-xl-font-size"><?php esc_html_e( 'Your Name', 'meridian' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"xl"} -->
<p class="has-primary-color has-text-color has-xl-font-size" style="font-weight:600"><?php esc_html_e( 'Leadership Coach & Executive Consultant', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"neutral-700","fontSize":"md"} -->
<p class="has-neutral-700-color has-text-color has-md-font-size"><?php esc_html_e( 'Write two or three sentences about who you help, how you help them, and what makes your approach different. Keep it clear and personal.', 'meridian' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Work With Me', 'meridian' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read My Story', 'meridian' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
