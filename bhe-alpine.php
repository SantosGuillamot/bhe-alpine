<?php

/**
 * Plugin Name:       bhe-alpine
 * Version:           0.1.0
 * Requires at least: 6.0
 * Requires PHP:      5.6
 * Author:            Gutenberg Team
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bhe-alpine
 */
function bhe_alpine_init()
{
	wp_register_script(
		'AlpineJS',
		'https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js',
		array(),
		"3.10.3",
		true // Load it in the footer
	);

	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/interactive-child/'
	);
	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/interactive-parent/'
	);
	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/non-interactive-parent/'
	);
	// Dynamic blocks
	require_once __DIR__ . '/src/blocks/dynamic-interactive-parent/index.php';
	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/dynamic-interactive-parent/',
		array(
			'render_callback' => 'render_block_dynamic_interactive_parent'
		)
	);
	require_once __DIR__ . '/src/blocks/dynamic-interactive-child/index.php';
	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/dynamic-interactive-child/',
		array(
			'render_callback' => 'render_block_dynamic_interactive_child'
		)
	);
	require_once __DIR__ . '/src/blocks/dynamic-non-interactive-parent/index.php';
	register_block_type(
		plugin_dir_path(__FILE__) . 'build/blocks/dynamic-non-interactive-parent/',
		array(
			'render_callback' => 'render_block_dynamic_non_interactive_parent'
		)
	);
}
add_action('init', 'bhe_alpine_init');

add_filter('render_block_bhe-alpine/interactive-child', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

add_filter('render_block_bhe-alpine/interactive-parent', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

add_filter('render_block_bhe-alpine/non-interactive-parent', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

add_filter('render_block_bhe-alpine/dynamic-interactive-parent', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

add_filter('render_block_bhe-alpine/dynamic-interactive-child', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

add_filter('render_block_bhe-alpine/dynamic-non-interactive-parent', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});

// Add Alpine to the Editor
add_action('enqueue_block_editor_assets', function ($content) {
	wp_enqueue_script('AlpineJS');
	return $content;
});
