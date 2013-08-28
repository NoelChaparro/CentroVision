/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config . removePlugins =  'elementspath' ;
	config.width = '75%';
	config.height = '350';
	config.resize_maxHeight = 600;
	config.toolbarCanCollapse = true;
	config.toolbar = [
    { name: 'document', items: [ 'Print' ] },
    { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo' ] },
    { name: 'insert', items : ['Table' ] },
    { name: 'paragraph', items : ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock',] },
    { name: 'basicstyles', items: [ 'Bold', 'Italic','Underline' ] },
    { name: 'styles', items:['Font','FontSize'] }
    ];
};
