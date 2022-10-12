<?php

function render_block_dynamic_interactive_parent($attributes, $content, $block)
{
    $post = get_post();
    $title   = $post->post_title;
    $counter = $attributes['counter'];
    $wrapper_attributes = get_block_wrapper_attributes(array('class' => $align_class_name));
    $inner_blocks = $block->inner_blocks;
    $inner_blocks_html = '';
    foreach ($inner_blocks as $inner_block) {
        $inner_blocks_html .= $inner_block->render();
    }

    return sprintf(
        '<div 
            x-data="{open: false, count: %2$s, bold: false}"
            x-bind:style="bold && \'font-weight:900\'"
            %1$s
        >
            <h2>Post Title: %3$s</h2>
            <button x-on:click="open = ! open">Show</button>
            <button x-on:click="bold = ! bold">Bold</button>
            <button x-on:click="count++" x-text="count"></button>
            <template x-if="open">
                %4$s
            </template>
        </div>',
        $wrapper_attributes,
        $counter,
        $title,
        $inner_blocks_html
    );
}
