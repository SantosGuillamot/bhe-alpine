/**
 * WordPress dependencies
 */
 import { registerBlockType } from '@wordpress/blocks';
 
 // Register the block
 registerBlockType( 'bhe-alpine/interactive-parent', {
     edit: function () {
         return <p> Hello world (from the editor)</p>;
     },
     save: function () {
         return <p> Hola mundo (from the frontend) </p>;
     },
 } );