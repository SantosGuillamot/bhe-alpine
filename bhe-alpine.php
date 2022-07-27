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
}
add_action('init', 'bhe_alpine_init');

add_filter( 'enqueue_alpine', function( $content ) {
	wp_enqueue_script( 'AlpineJS' );
    return $content;
});