<?php
/**
 * Meridian functions and definitions.
 *
 * @package Meridian
 */

if ( ! function_exists( 'meridian_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 *
	 * Block themes get most theme supports automatically, so only the
	 * opinionated core block styles and the shared stylesheet are added here.
	 */
	function meridian_setup() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'assets/css/theme.css' );
	}
endif;
add_action( 'after_setup_theme', 'meridian_setup' );

if ( ! function_exists( 'meridian_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function meridian_enqueue_styles() {
		wp_enqueue_style(
			'meridian-style',
			get_template_directory_uri() . '/assets/css/theme.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'meridian_enqueue_styles' );

if ( ! function_exists( 'meridian_register_pattern_categories' ) ) :
	/**
	 * Registers the block pattern categories used by the theme's patterns.
	 */
	function meridian_register_pattern_categories() {
		register_block_pattern_category(
			'meridian-hero',
			array(
				'label'       => _x( 'Meridian: Hero & Bio', 'Block pattern category', 'meridian' ),
				'description' => __( 'Profile introductions and hero sections.', 'meridian' ),
			)
		);

		register_block_pattern_category(
			'meridian-content',
			array(
				'label'       => _x( 'Meridian: Content', 'Block pattern category', 'meridian' ),
				'description' => __( 'Sections for experience, expertise, talks, publications and more.', 'meridian' ),
			)
		);
	}
endif;
add_action( 'init', 'meridian_register_pattern_categories' );
