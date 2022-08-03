import { useBlockProps } from '@wordpress/block-editor';

const Edit = ({ context }) => (
    <div {...useBlockProps()}>
        <p>
            Block Context from interactive parent - "bhe-alpine/interactive-title":{' '}
            {context['bhe-alpine/interactive-title']}
        </p>
        <p>
            Block Context from non-interactive parent -
            "bhe/non-interactive-title": {context['bhe-alpine/non-interactive-title']}
        </p>
    </div>
);

export default Edit;