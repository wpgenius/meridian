<?php
/**
 * Talks Grid pattern.
 *
 * @package meridian
 */

register_block_pattern(
	'meridian/talks-grid',
	array(
		'title'       => __( 'Talks & Speaking', 'meridian' ),
		'description' => __( 'A grid of embedded video talks and speaking appearances.', 'meridian' ),
		'categories'  => array( 'mrdn-content' ),
		'content'     => '<!-- wp:group {"className":"talks-section","style":{"spacing":{"blockGap":"var:preset|spacing|8","padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group talks-section">

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"700"}},"fontSize":"3xl","textColor":"neutral-900"} -->
<h2 class="wp-block-heading has-neutral-900-color has-text-color has-3-xl-font-size" style="font-weight:700">Talks &amp; Speaking</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"var:preset|color|primary"},"layout":{"selfStretch":"fixed","flexSize":"60px"}}} -->
<hr class="wp-block-separator has-primary-background-color has-background" style="width:60px"/>
<!-- /wp:separator -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"talk-card","style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"blockGap":"var:preset|spacing|4"},"overflow":"hidden"},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group talk-card has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200);overflow:hidden">
<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=dQw4w9WgXcQ
</div></figure>
<!-- /wp:embed -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding:var(--wp--preset--spacing--4)">
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm","textColor":"neutral-900"} -->
<h4 class="wp-block-heading has-neutral-900-color has-text-color has-sm-font-size" style="font-weight:600">Navigating Startups &amp; Scaling Success</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-xs-font-size">Koffee Conversation @ TEIF &mdash; A fireside discussion on startup leadership and scaling strategies.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"talk-card","style":{"border":{"radius":"8px","color":"var:preset|color|neutral-200","width":"1px","style":"solid"},"spacing":{"blockGap":"var:preset|spacing|4"},"overflow":"hidden"},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group talk-card has-white-background-color has-background" style="border-radius:8px;border:1px solid var(--wp--preset--color--neutral-200);overflow:hidden">
<!-- wp:embed {"url":"https://www.youtube.com/watch?v=dQw4w9WgXcQ","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://www.youtube.com/watch?v=dQw4w9WgXcQ
</div></figure>
<!-- /wp:embed -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding:var(--wp--preset--spacing--4)">
<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"sm","textColor":"neutral-900"} -->
<h4 class="wp-block-heading has-neutral-900-color has-text-color has-sm-font-size" style="font-weight:600">From Corporate Success to Transformational Leadership</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"xs","textColor":"neutral-600"} -->
<p class="has-neutral-600-color has-text-color has-xs-font-size">A real lived experience interview about the transition from corporate executive to transformational leadership coach.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
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
