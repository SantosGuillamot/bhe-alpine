// This import is needed to ensure that the `wp.blockEditor` global is available
// by the time this component gets loaded. The `Title` component consumes the
// global but cannot import it because it shouldn't be loaded on the frontend of
// the site.
import '@wordpress/block-editor';

import { InnerBlocks, useBlockProps, RichText } from '@wordpress/block-editor';

const Edit = ({ attributes, setAttributes }) => {
    const blockProps = useBlockProps();

    return (
        <div {...blockProps}>
            <RichText
                tagName="h2"
                className="title"
                value={attributes.title}
                onChange={(content) => setAttributes({ title: content })}
                placeholder="This will be passed through context to child blocks"
            />
            <button>Show</button>
            <button onClick={() => setAttributes({ counter: attributes.counter + 1 })}>
                {attributes.counter}
            </button>
            <InnerBlocks />
        </div>
    )
};

export default Edit;