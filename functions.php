<?php
/**
 * Fixora theme setup.
 *
 * @package Fixora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FIXORA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function fixora_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'fixora' ),
			'footer'  => esc_html__( 'Footer', 'fixora' ),
		)
	);

	load_theme_textdomain( 'fixora', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fixora_setup' );

/**
 * Footer widget area.
 */
function fixora_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'fixora' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'fixora' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'fixora_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function fixora_enqueue_assets() {
	wp_enqueue_style( 'fixora-style', get_stylesheet_uri(), array(), FIXORA_VERSION );
	wp_enqueue_script( 'fixora-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), FIXORA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'fixora_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function fixora_enqueue_editor_assets() {
	wp_enqueue_style( 'fixora-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), FIXORA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'fixora_enqueue_editor_assets' );

/**
 * Register the Fixora pattern category.
 */
function fixora_register_pattern_category() {
	register_block_pattern_category(
		'fixora',
		array( 'label' => esc_html__( 'Fixora', 'fixora' ) )
	);
}
add_action( 'init', 'fixora_register_pattern_category' );

/**
 * Custom block styles.
 */
function fixora_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'ember-outline', 'label' => esc_html__( 'Ember Outline', 'fixora' ) ) );
	register_block_style( 'core/group', array( 'name' => 'service-card', 'label' => esc_html__( 'Service Card', 'fixora' ) ) );
	register_block_style( 'core/image', array( 'name' => 'soft-frame', 'label' => esc_html__( 'Soft Frame', 'fixora' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'ember-rule', 'label' => esc_html__( 'Ember Rule', 'fixora' ) ) );
}
add_action( 'init', 'fixora_register_block_styles' );

/**
 * Custom excerpt length.
 */
function fixora_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'fixora_excerpt_length' );

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function fixora_icon( $name ) {
	$icons = array(
		'wrench'    => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
		'snowflake' => '<path d="M12 2v20M4 6l16 12M20 6L4 18M12 6l-2-2m2 2l2-2m-2 14l-2 2m2-2l2 2"/>',
		'bolt'      => '<path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/>',
		'phone'     => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'      => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'       => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'     => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
		'shield'    => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
		'star'      => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
		'check'     => '<path d="M20 6L9 17l-5-5"/>',
		'truck'     => '<rect x="1" y="5" width="14" height="11" rx="1"/><path d="M15 9h4l4 4v3h-8z"/><circle cx="6" cy="18.5" r="2"/><circle cx="18" cy="18.5" r="2"/>',
		'flame'     => '<path d="M12 22c4.4 0 8-3.6 8-8 0-3.5-2.5-6.5-5-8.5C14 4 13 2.5 13 1c-3 2-5 4.5-5.5 7C5.7 9 4 11.4 4 14c0 4.4 3.6 8 8 8z"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
