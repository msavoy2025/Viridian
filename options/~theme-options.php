<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
	->set_page_file( 'crbn-theme-options.php' )

	->add_tab( __( 'Header', 'crb' ), array(
		Field::make( 'image', 'header_logo_dark', __( 'Dark Logo', 'crb' ) ),
		Field::make( 'image', 'header_logo_light', __( 'Light Logo', 'crb' ) ),
	) )

	->add_tab( __( 'Footer', 'crb' ), array(
		Field::make( 'separator', 'btn_separator_footer', __( 'Company Info', 'crb' ) ),
		Field::make( 'rich_text', 'footer_company_contact', __( 'Contact Block', 'crb' ) ),
		Field::make( 'text', 'footer_para', __( 'Paragraph Block', 'crb' ) ),
		Field::make( 'text', 'footer_btn_link', __( 'Button Link', 'crb' ) ),
		Field::make( 'text', 'footer_btn_txt', __( 'Button Text', 'crb' ) ),
	) )
	->add_tab( __( 'Stats', 'crb' ), array(
		Field::make( 'text', 'stats_num1', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt1', __( 'Text', 'crb' ) ), 

		Field::make( 'text', 'stats_num2', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt2', __( 'Text', 'crb' ) ), 

		Field::make( 'text', 'stats_num3', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt3', __( 'Text', 'crb' ) ), 
	) )
	->add_tab( __( 'Principles', 'crb' ), array(
		Field::make( 'complex', 'crb_principles', __( 'Guiding Principles', 'crb' ) )
			->set_width( 100 )
			->set_max(6)
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'rich_text', 'princ_text', __( 'Description', 'crb' ) )
					->set_width( 100 ),
			) ), 
	) )
	->add_tab( __( 'Misc', 'crb' ), array(
		Field::make( 'text', 'crb_google_maps_api_key', __( 'Google Maps API Key', 'crb' ) )
			->help_text( sprintf(
				__( 'You can generate your own key, by visiting %s and clicking on the "GET A KEY" button there.', 'crb' ),
				sprintf(
					'<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">%s</a>',
					_x( 'Get API Key', 'Google Maps Docs', 'crb' )
				)
			) ),
		Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script', 'crb' ) ),
		Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script', 'crb' ) ),
	) );


