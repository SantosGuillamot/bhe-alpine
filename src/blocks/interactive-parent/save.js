import { useBlockProps, InnerBlocks, RichText } from '@wordpress/block-editor';

const Save = ({ attributes }) => {
    const blockProps = useBlockProps.save();

    return (
        <div
            x-data={`{open: false, count: ${attributes.counter}, bold: false}`}
            x-bind:style="bold && 'font-weight:900'"
            {...blockProps}
        >
            <RichText.Content tagName="h2" value={attributes.title} />
            <button x-on:click="open = ! open">Show</button>
            <button x-on:click="bold = ! bold">Bold</button>
            <button x-on:click="count++" x-text="count"></button>
            <template x-if="open">
                <InnerBlocks.Content />
            </template>
        </div>
    )
};

export default Save;