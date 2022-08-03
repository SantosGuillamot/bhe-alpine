/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

// Register the block
registerBlockType('bhe-alpine/interactive-parent', {
    edit: Edit,
    save: Save,
});