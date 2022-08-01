/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';

// Register the block
registerBlockType('bhe-alpine/interactive-child', {
    edit: Edit,
    save: Save,
});