<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

$link_target_options = array(
	'_self'  => 'the same window',
	'_blank' => 'a new tab'
);

//Home Subheader
Container::make( 'post_meta', __( 'Subheader', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'image', 'subheader_bg', __( 'Background Image', 'crb' ) ),
		Field::make( 'text', 'subheader_textsm', __( 'Small Text', 'crb' ) ),	  
		Field::make( 'text', 'subheader_textla', __( 'Large Text', 'crb' ) ),
		Field::make( 'color', 'subheader_background_color', 'Background Background' )
			->set_palette( array( '#000' ) )
			->set_width( 50 ),
		Field::make( 'text', 'subheader_overlay', __( 'Overlay', 'crb' ) )
			->set_width( 50 ),

	) );

//Home About Section
Container::make( 'post_meta', __( 'About Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'text', 'about_title', __( 'Large Text', 'crb' ) ),	  
		Field::make( 'rich_text', 'about_text', __( 'Paragraph Text', 'crb' ) ),
		Field::make( 'image', 'about_img', __( 'Image', 'crb' ) ),	   	  
	) );
	
//Home Stats Section
Container::make( 'post_meta', __( 'Stats Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'separator', 'stats_sep_0', __( 'Text Columns Section', 'crb' ) ),
		Field::make( 'rich_text', 'stats_left_text', __( 'Left Column Text', 'crb' ) ),
		Field::make( 'rich_text', 'stats_right_text', __( 'Right Column Text', 'crb' ) ),
		Field::make( 'separator', 'stats_sep_1', __( 'Problem Inner Section', 'crb' ) ),
		Field::make( 'text', 'prob_title', __( 'Title', 'crb' ) ),	  
		Field::make( 'text', 'prob_text', __( 'Text', 'crb' ) ),
	   	Field::make( 'separator', 'stats_sep_2', __( 'Solution Inner Section', 'crb' ) ), 
		Field::make( 'text', 'solution_title', __( 'Title', 'crb' ) ),	  
		Field::make( 'text', 'solution_text', __( 'Text', 'crb' ) ),
		Field::make( 'separator', 'stats_sep_3', __( 'Large Paragraph', 'crb' ) ), 
		Field::make( 'text', 'stats_large_txt', __( 'Title', 'crb' ) ), 
		Field::make( 'separator', 'stats_sep_4', __( 'Stats Intro & Numbers', 'crb' ) ), 
		Field::make( 'text', 'stats_intro', __( 'Stats Intro', 'crb' ) ),    
		Field::make( 'separator', 'stats_sep_5', __( 'Number 1', 'crb' ) ), 
		Field::make( 'text', 'stats_num1', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt1', __( 'Text', 'crb' ) ), 
		Field::make( 'separator', 'stats_sep_6', __( 'Number 2', 'crb' ) ), 
		Field::make( 'text', 'stats_num2', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt2', __( 'Text', 'crb' ) ), 
		Field::make( 'separator', 'stats_sep_7', __( 'Number 3', 'crb' ) ), 
		Field::make( 'text', 'stats_num3', __( 'Number', 'crb' ) ), 
		Field::make( 'text', 'stats_numtxt3', __( 'Text', 'crb' ) ), 
	) );	

//Home Process Section
Container::make( 'post_meta', __( 'Processes Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'text', 'pir_flex_left', __( 'Left Text Block', 'crb' ) ),	  
		Field::make( 'text', 'pir_flex_right', __( 'Right Text Block', 'crb' ) ),
		Field::make( 'text', 'pir_larger', __( 'Larger Text Block', 'crb' ) ),
		Field::make( 'text', 'pir_largest', __( 'Text Before Processes', 'crb' ) ),
		Field::make( 'complex', 'crb_processes', __( 'Process Steps', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Process', 'crb' ),
				'plural_name'   => __( 'Processes', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'image', 'process_bg', __( 'Background Image', 'crb' ) )
					->set_width( 33 ),
				Field::make( 'text', 'process_num', __( 'Step Number', 'crb' ) )
					->set_width( 33 ),
				Field::make( 'text', 'process_title', __( 'Title', 'crb' ) )
					->set_width( 33 ),
				Field::make( 'text', 'process_subtitle', __( 'Subtitle', 'crb' ) )
					->set_width( 100 ),	
				Field::make( 'rich_text', 'process_copy', __( 'Description', 'crb' ) )
					->set_width( 100 ),			
				Field::make( 'color', 'background_color', 'Background Background' )
					->set_palette( array( '#000' ) )
					->set_width( 50 ),
				Field::make( 'text', 'overlay', __( 'Overlay', 'crb' ) )
					->set_width( 50 ),
			) )
			->set_header_template( '<%- process_title %>' ),
	) );		

//Home Case Studies
Container::make( 'post_meta', __( 'Settings', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'text', 'cs_home_title', __( 'Large Text', 'crb' ) ),	  
		Field::make( 'rich_text', 'cs_home_subtitle', __( 'Paragraph Text', 'crb' ) ),	   	  
	) );

//Home CTA Section
Container::make( 'post_meta', __( 'CTA Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'complex', 'crb_home_tabs', __( 'Tabs', 'crb' ) )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( [
				'singular_name' => __( 'Tab', 'crb' ),
				'plural_name'   => __( 'Tabs', 'crb' ),
			] )
			->add_fields( [
				Field::make( 'text', 'title', __( 'Title', 'crb' ) )
					->set_required(),
				Field::make( 'text', 'text', __( 'Text', 'crb' ) ),
				Field::make( 'text', 'btn_label', __( 'Button Label', 'crb' ) )
					->set_width( 50 ),
				Field::make( 'text', 'btn_url', __( 'Button URL', 'crb' ) )
					->set_width( 50 ),
			] )
			->set_header_template( '<%- title %>' )
			->set_max( 4 ),
	) );	

//Case Studies
Container::make( 'post_meta', __( 'Settings', 'crb' ) )
	->where( 'post_type', '=', 'case' )
	->add_fields( array(
		Field::make( 'image', 'cs_hero', __( 'Hero Image', 'crb' ) ),
		Field::make( 'text', 'cs_location', __( 'Location', 'crb' ) ),
		Field::make( 'text', 'crb_facts_title', __( 'Facts Title', 'crb' ) ),
		Field::make( 'complex', 'crb_facts', __( 'Quick Facts', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'rich_text', 'fact_title', __( 'Title', 'crb' ) )
					->set_width( 50 ),
				Field::make( 'rich_text', 'fact_copy', __( 'Description', 'crb' ) )
					->set_width( 50 ),
	
			) )
			->set_header_template( '<%- fact_title %>' ),
		Field::make( 'text', 'crb_team_title', __( 'Transaction Title', 'crb' ) ),
		Field::make( 'complex', 'crb_team', __( 'Transaction', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'rich_text', 'team_title', __( 'Title', 'crb' ) )
					->set_width( 50 ),
				Field::make( 'rich_text', 'team_copy', __( 'Description', 'crb' ) )
					->set_width( 50 ),
	
			) )
			->set_header_template( '<%- team_title %>' ),
		Field::make( 'complex', 'crb_gallery', __( 'Gallery', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-horizontal' )
			->setup_labels( array(
				'singular_name' => __( 'Image', 'crb' ),
				'plural_name'   => __( 'Images', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'image', 'gallery_img', __( 'Image', 'crb' ) )
					->set_width( 50 ),
			) ),
		Field::make( 'complex', 'crb_details', __( 'Details', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-horizontal' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'image', 'detail_arrow', __( 'Image', 'crb' ) )
					->set_width( 100 ),
				Field::make( 'text', 'detail_title', __( 'Title', 'crb' ) )
					->set_width( 100 ),
				Field::make( 'rich_text', 'detail_copy', __( 'Description', 'crb' ) )
					->set_width( 100 ),
	
			) )
			->set_header_template( '<%- detail_title %>' ),
		Field::make( 'text', 'crb_related_title', __( 'Related Case Studies Title', 'crb' ) ),
		Field::make( 'color', 'crb_background_color', 'Background Background' )
			->set_palette( array( '#000' ) )
			->set_width( 50 ),
		Field::make( 'text', 'crb_overlay', __( 'Overlay', 'crb' ) )
			->set_width( 50 ),
	) );	
	
//Home Case Studies
Container::make( 'post_meta', __( 'Settings', 'crb' ) )
	->where( 'post_template', '=', 'templates/contact.php' )
	->add_fields( array(
		Field::make( 'image', 'contact_image', __( 'Image', 'crb' ) ),	
		Field::make( 'text', 'contact_text', __( 'Text Block', 'crb' ) ),	  
		Field::make( 'rich_text', 'contact_info', __( 'Contact Info', 'crb' ) ),   	  
	) );
	
//Leadership
Container::make( 'post_meta', __( 'Intro', 'crb' ) )
	->where( 'post_template', '=', 'templates/leadership.php' )
	->add_fields( array(
		Field::make( 'text', 'lead_intro_text_left', __( 'Text Block Left', 'crb' ) ),	  
		Field::make( 'text', 'lead_intro_text_right', __( 'Text Block Right', 'crb' ) ), 
		Field::make( 'text', 'lead_intro_text_large', __( 'Larger Text', 'crb' ) ),   	  
	) );	

Container::make( 'post_meta', __( 'Solutions', 'crb' ) )
	->where( 'post_template', '=', 'templates/leadership.php' )
	->add_fields( array(
		Field::make( 'image', 'lead_sol_bg', __( 'Background Image', 'crb' ) ),	
		Field::make( 'rich_text', 'lead_sol_title', __( 'Title', 'crb' ) ),	  
		Field::make( 'text', 'lead_sol_copy', __( 'Description', 'crb' ) ),
		Field::make( 'text', 'lead_sol_start', __( 'Year Started', 'crb' ) ),
		Field::make( 'text', 'lead_sol_proj', __( 'Projected Capitalization', 'crb' ) ),
		Field::make( 'color', 'lead_sol_background_color', 'Background Background' )
			->set_palette( array( '#000' ) )
			->set_width( 50 ),
		Field::make( 'text', 'lead_sol_overlay', __( 'Overlay', 'crb' ) )
			->set_width( 50 ),	  
	) );		

Container::make( 'post_meta', __( 'Video', 'crb' ) )
	->where( 'post_template', '=', 'templates/leadership.php' )
	->add_fields( array(
		Field::make( 'text', 'lead_video_title', __( 'Title', 'crb' ) ),
		Field::make( 'image', 'lead_video_bg', __( 'Background Image', 'crb' ) ),
		Field::make( 'oembed', 'lead_video', __( 'Video URL', 'crb' ) ),
		Field::make( 'rich_text', 'lead_video_info', __( 'Video Info', 'crb' ) ), 	  
	) );
	
Container::make( 'post_meta', __( 'Principles', 'crb' ) )
	->where( 'post_template', '=', 'templates/leadership.php' )
	->add_fields( array(
		Field::make( 'text', 'lead_princ_title', __( 'Title', 'crb' ) ),
		Field::make( 'text', 'lead_large_copy', __( 'Large Text Block', 'crb' ) ),
		Field::make( 'text', 'lead_small_copy_left', __( 'Left Text Block', 'crb' ) ),
		Field::make( 'text', 'lead_small_copy_right', __( 'Right Text Block', 'crb' ) ),
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
	) );
	
Container::make( 'post_meta', __( 'Team', 'crb' ) )
	->where( 'post_template', '=', 'templates/leadership.php' )
	->add_fields( array(
		Field::make( 'text', 'team_intro_title', __( 'Title', 'crb' ) ),
		Field::make( 'text', 'team_intro_subtitle', __( 'Description', 'crb' ) ),
		Field::make( 'complex', 'crb_founders', __( 'Founders', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-horizontal' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'image', 'founder_img', __( 'Image', 'crb' ) ),
				Field::make( 'text', 'founder_status', __( 'Status', 'crb' ) ),
				Field::make( 'text', 'founder_name', __( 'Name', 'crb' ) ),
				Field::make( 'text', 'founder_description', __( 'Description', 'crb' ) ),
			) ), 
		Field::make( 'complex', 'crb_employees', __( 'Team', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'image', 'emp_img', __( 'Image', 'crb' ) ),
				Field::make( 'text', 'emp_name', __( 'Name', 'crb' ) ),
				Field::make( 'text', 'emp_role', __( 'Role', 'crb' ) ),
				Field::make( 'text', 'emp_location', __( 'Location', 'crb' ) ),
				Field::make( 'rich_text', 'emp_copy', __( 'Description', 'crb' ) ),
			) )
			->set_header_template( '<%- emp_name %>' ),	
	) );

//Risk Management and Liability Transfer
Container::make( 'post_meta', __( 'Intro', 'crb' ) )
	->where( 'post_template', '=', 'templates/risk.php' )
	->add_fields( array(
		Field::make( 'rich_text', 'risk_intro_text_left', __( 'Text Block Left', 'crb' ) ),	  
		Field::make( 'rich_text', 'risk_intro_text_right', __( 'Text Block Right', 'crb' ) ), 
		Field::make( 'text', 'risk_intro_text_large', __( 'Larger Text', 'crb' ) ),	  
	) );
	
Container::make( 'post_meta', __( 'Steps Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/risk.php' )
	->add_fields( array(
		Field::make( 'image', 'risk_steps_image', __( 'Full Width Image', 'crb' ) ),	  
		Field::make( 'text', 'risk_steps_title', __( 'Intro Title', 'crb' ) ), 
		Field::make( 'rich_text', 'risk_step_1', __( 'Step 1', 'crb' ) ),
		Field::make( 'rich_text', 'risk_step_2', __( 'Step 2', 'crb' ) ),
		Field::make( 'rich_text', 'risk_step_3', __( 'Step 3', 'crb' ) ),	  
		Field::make( 'rich_text', 'risk_step_4', __( 'Step 4', 'crb' ) ),
		Field::make( 'image', 'risk_flow', __( 'Flowchart Image', 'crb' ) ),
	) );

Container::make( 'post_meta', __( 'Policy Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/risk.php' )
	->add_fields( array(
		Field::make( 'image', 'risk_policy_img', __( 'Image', 'crb' ) ),	  
		Field::make( 'text', 'risk_policy_title', __( 'Intro Description', 'crb' ) ), 
		Field::make( 'rich_text', 'risk_policy_subtitle', __( 'Sub Description', 'crb' ) ),
		Field::make( 'rich_text', 'risk_policy_commitment', __( 'Step 2', 'crb' ) ),
		Field::make( 'rich_text', 'risk_policy_expectations', __( 'Step 2', 'crb' ) ),
	) );
	
//Capabilities Pages
Container::make( 'post_meta', __( 'Intro', 'crb' ) )
	->where( 'post_template', '=', 'templates/sellers.php' )
	->or_where( 'post_template', '=', 'templates/buyers.php' )
	->or_where( 'post_template', '=', 'templates/community.php' )
	->or_where( 'post_template', '=', 'templates/capital.php' )
	->add_fields( array(	  
		Field::make( 'text', 'cap_intro_left', __( 'Left Flex Block', 'crb' ) ), 
		Field::make( 'text', 'cap_intro_right', __( 'Right Flex Block', 'crb' ) ),
		Field::make( 'text', 'cap_intro_large', __( 'Large Text Block', 'crb' ) ),
		Field::make( 'image', 'cap_intro_img', __( 'Image', 'crb' ) ),
		Field::make( 'text', 'cap_intro_textsep', __( 'Text Section Separator', 'crb' ) ),
		Field::make( 'checkbox', 'cap_intro_check_stats', 'Stat Choice' )
			->set_width(50)
			->set_option_value( 'no' )
			->set_help_text('Leave unchecked for the three in one line of stats, check for the single statistic'),
		Field::make( 'checkbox', 'cap_intro_check_content', 'Content Choice' )
			->set_width(50)
			->set_option_value( 'no' )
			->set_help_text('Leave unchecked for single rich text box, check if you would like two column'),
		Field::make( 'rich_text', 'cap_intro_single_stat', __( 'Single Statistic', 'crb' ) )
			->set_conditional_logic( array(
				array(
					'field'   => 'cap_intro_check_stats',
					'value'   => true,
					'compare' => '=',
				)
			) ),	
		Field::make( 'rich_text', 'cap_intro_content_1', __( 'Single Content Block', 'crb' ) )
			->set_conditional_logic( array(
				array(
					'field'   => 'cap_intro_check_content',
					'value'   => false,
					'compare' => '=',
				)
			) ),
		Field::make( 'separator', 'cap_intro_sep', __( 'Two Column Block', 'crb' ) )
			->set_conditional_logic( array(
				array(
					'field'   => 'cap_intro_check_content',
					'value'   => true,
					'compare' => '=',
				)
			) ),
		Field::make( 'rich_text', 'cap_intro_content_2', __( 'Left Content Block', 'crb' ) )
			->set_width(50)
			->set_conditional_logic( array(
				array(
					'field'   => 'cap_intro_check_content',
					'value'   => true,
					'compare' => '=',
				)
			) ),
		Field::make( 'rich_text', 'cap_intro_content_3', __( 'Right Content Block', 'crb' ) )
			->set_width(50)
			->set_conditional_logic( array(
				array(
					'field'   => 'cap_intro_check_content',
					'value'   => true,
					'compare' => '=',
				)
			) ),
) );	

//Buyers Under Intro
Container::make( 'post_meta', __( 'Under Intro Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/buyers.php' )
	->add_fields( array(	   
		Field::make( 'text', 'bui_left', __( 'Left Block', 'crb' ) ), 
		Field::make( 'rich_text', 'bui_flex', __( 'Right Block', 'crb' ) ),
	) );

//Buyers Why Section
Container::make( 'post_meta', __( 'Why Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/buyers.php' )
	->add_fields( array(	   
		Field::make( 'text', 'buyers_why_left_2', __( 'Left Block', 'crb' ) ), 
		Field::make( 'text', 'buyers_why_right_2', __( 'Right Block', 'crb' ) ),
	) );
	
//Buyers/Community Icons Section
Container::make( 'post_meta', __( 'Icons Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/buyers.php' )
	->or_where( 'post_template', '=', 'templates/community.php' )
	->or_where( 'post_template', '=', 'templates/capital.php' )
	->or_where( 'post_template', '=', 'templates/sellers.php' )
	->add_fields( array(	   

		Field::make( 'text', 'buyers_icon_copy', __( 'Right Text Block', 'crb' ) ),
		Field::make( 'complex', 'crb_buyers', __( 'Icons', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Entry', 'crb' ),
				'plural_name'   => __( 'Entries', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'text', 'buyers_name', __( 'Name', 'crb' ) ),
				Field::make( 'image', 'buyers_img', __( 'Image', 'crb' ) ),
			) )
			->set_header_template( '<%- buyers_name %>' ),
	) );
	
//Community Under Intro Section
Container::make( 'post_meta', __( 'Under Intro Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/community.php' )
	->add_fields( array(	   
		Field::make( 'text', 'cui_left', __( 'Left Block', 'crb' ) ), 
		Field::make( 'text', 'cui_right', __( 'Right Block', 'crb' ) ),
		Field::make( 'image', 'cui_image', __( 'Image', 'crb' ) ),
	) );	

//Community Principles Section
Container::make( 'post_meta', __( 'Principles Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/community.php' )
	->add_fields( array(	   
		Field::make( 'separator', 'cp_sep_1', __( 'Left Side'), 'crb' ),
		Field::make( 'text', 'cp_left_title', __( 'Opening Text Block', 'crb' ) ), 
		Field::make( 'rich_text', 'cpl_left', __( 'Lower Left Block', 'crb' ) ),
		Field::make( 'rich_text', 'cpl_right', __( 'Lower Right Block', 'crb' ) ),  
		Field::make( 'separator', 'cp_sep_2', __( 'Right Side'), 'crb' ),
		Field::make( 'rich_text', 'cp_right_open', __( 'Opening Text Block', 'crb' ) ),
	) );
	
//Community Policy Section
Container::make( 'post_meta', __( 'Environment Policy Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/community.php' )
	->add_fields( array(	   
		Field::make( 'rich_text', 'comm_commitment', __( 'Commitment'), 'crb' ),
		Field::make( 'rich_text', 'comm_expectations', __( 'Expectations', 'crb' ) ), 
	) );
	
//Community Brownfield Section
Container::make( 'post_meta', __( 'Brownfield Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/community.php' )
	->add_fields( array(	   
		Field::make( 'text', 'comm_brown', __( 'Text Block'), 'crb' ),
		Field::make( 'image', 'comm_brown_img', __( 'Image', 'crb' ) ), 
	) );
	
//Community Problem/Solution Section
Container::make( 'post_meta', __( 'Problem/Solution Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/community.php' )
	->add_fields( array(	   
		Field::make( 'text', 'comm_problem_title', __( 'Problem Title'), 'crb' ),
		Field::make( 'text', 'comm_problem', __( 'Problem Block'), 'crb' ),
		Field::make( 'text', 'comm_solution_title', __( 'Solution Title'), 'crb' ),
		Field::make( 'text', 'comm_solution', __( 'Solution Block'), 'crb' ),
	) );	

//Capital Under Intro Section
Container::make( 'post_meta', __( 'Under Intro Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/capital.php' )
	->add_fields( array(	   
		Field::make( 'text', 'cui_title', __( 'Title'), 'crb' ),
		Field::make( 'text', 'cui_subtitle', __( 'Subtitle'), 'crb' ),
		Field::make( 'rich_text', 'cui_left', __( 'Lower Left Block'), 'crb' ),
		Field::make( 'rich_text', 'cui_right', __( 'Lower Right Block'), 'crb' ),
		Field::make( 'image', 'cui_image', __( 'Image'), 'crb' ),
	) );

//Capital Testimonials Section
Container::make( 'post_meta', __( 'Testimonials Section', 'crb' ) )
    ->where( 'post_template', 'IN', [ 'templates/capital.php', 'templates/buyers.php', 'templates/community.php','templates/sellers.php'  ] )
	->add_fields( array(	   
		Field::make( 'association', 'crb_testimonials', __( 'Selected Testimonials', 'crb' ) )
			->set_types( array(
				array(
					'type'      => 'post',
					'post_type' => 'testimonial'
				)
			) ),
	) );
	
//Capital Video Section
Container::make( 'post_meta', __( 'Video Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/capital.php' )
	->add_fields( array(	   
		Field::make( 'image', 'cap_vid_cover', __( 'Background Image'), 'crb' ),
		Field::make( 'text', 'cap_vid_title', __( 'Title', 'crb' ) ),
		Field::make( 'oembed', 'cap_video', __( 'Video URL', 'crb' ) ),
	) );	

//Sellers Under Intro Section
Container::make( 'post_meta', __( 'Under Intro Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/sellers.php' )
	->add_fields( array(	   
		Field::make( 'text', 'sui_title', __( 'Title'), 'crb' ),
		Field::make( 'text', 'sui_under_image', __( 'Under Image'), 'crb' ),
		Field::make( 'text', 'sui_left', __( 'Lower Left Block'), 'crb' ),
		Field::make( 'rich_text', 'sui_right', __( 'Lower Right Block'), 'crb' ),
		Field::make( 'image', 'sellers_flowchart', __( 'Flowchart Image'), 'crb' )
			->set_width( 50 ),
		Field::make( 'file', 'video', __( 'Video', 'crb' ) )
			->set_type( array( 'video' ) )
			->set_width( 50 ),
	) );

//Sellers Steps
Container::make( 'post_meta', __( 'Steps Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/sellers.php' )
	->add_fields( array(	  
		Field::make( 'text', 'sellers_steps_title', __( 'Intro Title', 'crb' ) ), 
		Field::make( 'rich_text', 'sellers_step_1', __( 'Step 1', 'crb' ) ),
		Field::make( 'rich_text', 'sellers_step_2', __( 'Step 2', 'crb' ) ),
		Field::make( 'rich_text', 'sellers_step_3', __( 'Step 3', 'crb' ) ),	  
		Field::make( 'rich_text', 'sellers_step_4', __( 'Step 4', 'crb' ) ),
	) );

//Testimonials
Container::make( 'post_meta', __( 'Settings', 'crb' ) )
	->where( 'post_type', '=', 'testimonial' )
	->add_fields( array(	  
		Field::make( 'text', 'test_position', __( 'Position', 'crb' ) ), 
	) );

//CTA Section
Container::make( 'post_meta', __( 'CTA', 'crb' ) )
	->where( 'post_template', '=', 'templates/risk.php' )
	->or_where( 'post_template', '=', 'templates/buyers.php')
	->or_where( 'post_template', '=', 'templates/community.php')
	->or_where( 'post_template', '=', 'templates/capital.php')
	->or_where( 'post_template', '=', 'templates/sellers.php')
	->add_fields( array(	  
		Field::make( 'text', 'cta_title', __( 'Title', 'crb' ) ), 
		Field::make( 'text', 'cta_subtitle', __( 'Subtitle', 'crb' ) ),
	) );	
