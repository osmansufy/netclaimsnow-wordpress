<?php
/**
 * Plugin Name: Carbon Fields
 * Description: WordPress developer-friendly custom fields for post types, taxonomy terms, users, comments, widgets, options, navigation menus and more.
 * Version: 3.1.18
 * Author: htmlburger
 * Author URI: https://htmlburger.com/
 * Plugin URI: http://carbonfields.net/
 * License: GPL2
 * Requires at least: 4.0
 * Tested up to: 5.3
 * Text Domain: carbon-fields
 * Domain Path: /languages
 */

define( 'Carbon_Fields_Plugin\PLUGIN_FILE', __FILE__ );

define( 'Carbon_Fields_Plugin\RELATIVE_PLUGIN_FILE', basename( dirname( \Carbon_Fields_Plugin\PLUGIN_FILE ) ) . '/' . basename( \Carbon_Fields_Plugin\PLUGIN_FILE ) );

add_action( 'after_setup_theme', 'carbon_fields_boot_plugin' );
function carbon_fields_boot_plugin() {
	if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
		require( __DIR__ . '/vendor/autoload.php' );
	}
	\Carbon_Fields\Carbon_Fields::boot();

	if ( is_admin() ) {
		\Carbon_Fields_Plugin\Libraries\Plugin_Update_Warning\Plugin_Update_Warning::boot();
	}
}
require __DIR__.'/page/theme-options-field.php';
require __DIR__.'/page/blog-page-cf.php';

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_page_options' );
function crb_attach_page_options() {
    Container::make( 'post_meta', __( 'Custom Data' ) )
	->where( 'post_id', '=', get_option( 'page_on_front' ) )
		->add_tab( __( 'Banner' ), array(
			Field::make( 'rich_text', 'banner-info', __( 'Banner Content' ) ),
			Field::make( 'file', 'bg_video', __( 'Background Video' ) )
	->set_type( array( 'video' ) )
	->set_value_type( 'url' )
		) )
		->add_tab( __( 'About' ), array(
			Field::make( 'text', 'about_sub', __( 'About Subtitle' ) ),
			Field::make( 'rich_text', 'about_content', __( 'About Details' ) ),
			Field::make( 'text', 'button_link', __( 'Button link' ) ),
			Field::make( 'text', 'button_text', __( 'Button Text' ) ),

		
		) )
		->add_tab( __( 'Team' ), array(
			Field::make( 'complex', 'teams', __( 'Team Member' ) )
			->add_fields( array(
				Field::make( 'text', 'member_name', __( 'Name' ) ),
				Field::make( 'text', 'member_designation', __( 'Designation' ) ),
				Field::make( 'textarea', 'member_bio', __( 'Information' ) ),
				Field::make( 'image', 'mb_image', __( 'Image' ) )
                ->set_value_type( 'url' )

			) )
		
		
		) );
	
 
}