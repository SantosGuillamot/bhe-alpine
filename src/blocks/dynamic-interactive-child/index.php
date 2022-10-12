<?php

function render_block_dynamic_interactive_child($attributes, $content, $block)
{
    $post = get_post();
    $date   = $post->post_date;
    $wrapper_attributes = get_block_wrapper_attributes(array('class' => $align_class_name));

    return sprintf(
        '<div 
            x-data
            %1$s
        >
            <p>Post Date: %2$s</p>
            <p>Counter: <span x-text="count"></span></p>
        </div>',
        $wrapper_attributes,
        $date
    );
}
