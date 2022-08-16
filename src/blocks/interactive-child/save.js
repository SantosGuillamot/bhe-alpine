import { useBlockProps } from '@wordpress/block-editor';

const Save = () => {
    const blockProps = useBlockProps.save();

    return (
        <div {...blockProps} x-data>
            <p>Alpine Context - "counter": <span x-text="count"></span></p>
        </div>
    );
};

export default Save;