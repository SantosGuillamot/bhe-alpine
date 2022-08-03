import { InnerBlocks, useBlockProps, RichText } from '@wordpress/block-editor';

const Edit = ({ attributes, setAttributes }) => {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <RichText
                tagName="h4"
                className="title"
                value={attributes.title}
                onChange={(content) => setAttributes({ title: content })}
                placeholder="This will be passed through context to child blocks"
            />
            <InnerBlocks />
        </div>
    )
};

export default Edit;