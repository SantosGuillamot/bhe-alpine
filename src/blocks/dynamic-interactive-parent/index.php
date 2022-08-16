<?php

function render_block_dynamic_interactive_parent($attributes, $content, $block)
{
    return sprintf(
        '<h2>Hola</h2>'
    );
}

function register_block_dynamic_interactive_parent()
{
    register_block_type_from_metadata(
        __DIR__ . '/dynamic-interactive-parent',
        array(
            'render_callback' => 'render_block_dynamic_interactive_parent',
        )
    );
}
add_action('init', 'register_block_dynamic_interactive_parent');
