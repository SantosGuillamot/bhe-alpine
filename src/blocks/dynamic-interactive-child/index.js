/**
 * WordPress dependencies
 */
import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import './style.scss';

// Register the block
registerBlockType('bhe-alpine/dynamic-interactive-child', {
    edit: Edit,
});