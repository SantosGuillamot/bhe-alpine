/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';
import './style.scss';

// Register the block
registerBlockType('bhe-alpine/interactive-child', {
    edit: Edit,
    save: Save,
});