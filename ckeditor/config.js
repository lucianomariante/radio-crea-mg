/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = '../../ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = '../../ckfinder/ckfinder.html?Type=Images';
    config.filebrowserFlashBrowseUrl = '../../ckfinder/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.height = 200;        // 500 pixels.
	config.width = 464;        // 500 pixels.
	config.removeDialogTabs = 'image:advanced;image:advanced';
};
