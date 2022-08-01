import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

const Save = ({ attributes }) => {
    const blockProps = useBlockProps.save();

    return (
        <div {...blockProps}>
            <p className="title">{attributes.title}</p>
            <InnerBlocks.Content />
        </div>
    )
};

export default Save;