<?php

/*
Plugin Name: TinyMCE Block Formats Example
Description: Demonstrates the simplest way to edit the "Formats" pulldown in the TinyMCE Editor.
*/

/**
 * @see http://codex.wordpress.org/Plugin_API/Filter_Reference/tiny_mce_before_init
 * @see http://www.tinymce.com/wiki.php/Configuration:formats
 *
 * @author Tom Auger
 */

class MCEBlockFormats {
	public function __construct() {
		add_filter( 'tiny_mce_before_init', array( $this, 'change_mce_block_formats' ) );
	}

	public function change_mce_block_formats( $settings ){
		$settings['block_formats'] = 'Paragaph=p; Heading=h2; Subheading=h3; Minor Heading=h4';

		return $settings;
	}
}
$zg_mceblockformats_plugin = new MCEBlockFormats();