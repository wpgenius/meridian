<?php
/**
 * Meridian functions and definitions.
 *
 * @package meridian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MRDN_VERSION', '1.0.0' );

/**
 * Sets up theme defaults and registers support for WordPress features.
 */
function mrdn_setup() {
	load_theme_textdomain( 'meridian', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Navigation', 'meridian' ),
			'footer'  => esc_html__( 'Footer Navigation', 'meridian' ),
			'social'  => esc_html__( 'Social Links', 'meridian' ),
		)
	);
}
add_action( 'after_setup_theme', 'mrdn_setup' );

/**
 * Enqueue theme styles.
 * Fonts are declared in theme.json fontFace entries — no separate PHP enqueue needed.
 */
function mrdn_enqueue_assets() {
	wp_enqueue_style(
		'meridian-style',
		get_stylesheet_uri(),
		array(),
		MRDN_VERSION
	);

	wp_enqueue_style(
		'meridian-global',
		get_template_directory_uri() . '/assets/css/global.css',
		array( 'meridian-style' ),
		MRDN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'mrdn_enqueue_assets' );

/**
 * Enqueue editor styles.
 */
function mrdn_editor_styles() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'mrdn_editor_styles' );

/**
 * Register block patterns categories.
 */
function mrdn_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category(
		'mrdn-patterns',
		array( 'label' => esc_html__( 'Meridian', 'meridian' ) )
	);

	register_block_pattern_category(
		'mrdn-hero',
		array( 'label' => esc_html__( 'Meridian: Hero & Bio', 'meridian' ) )
	);

	register_block_pattern_category(
		'mrdn-content',
		array( 'label' => esc_html__( 'Meridian: Content', 'meridian' ) )
	);
}
add_action( 'init', 'mrdn_register_pattern_categories' );

/**
 * Set the content width.
 */
function mrdn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mrdn_content_width', 760 );
}
add_action( 'after_setup_theme', 'mrdn_content_width', 0 );
