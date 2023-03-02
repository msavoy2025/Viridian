<?php
/* Login Page Changes */
//Testing Git Updates
function my_login_logo() { ?>
	<style type="text/css">
		body {
		  background: #B7B6A5 !important;
		}

		.login form {
		  background: #B7B6A5 !important;
		  border:none !important;
		  box-shadow: none !important;
		}

		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_green.svg);
			margin-top:100px;
				width:436.75px;
				background-size: contain;
				background-repeat: no-repeat;
			  padding-bottom: 30px;
		}

		#login {
			width: 436.75px !important;
			padding: 2% 0 0 !important;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Script/CSS addons */
function style_scripts() {
	wp_enqueue_style( 'stylish', get_stylesheet_directory_uri() . '/style.css', false, 1.0, null);
	wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/css/bundle.min.css', array(), microtime(), 'all' );
	wp_enqueue_script( '_themename-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), microtime(), true );
	
}
add_action( 'wp_enqueue_scripts', 'style_scripts' );

//Script Deferring
/*add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
function wsds_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'stylish',
		'_themename-stylesheet',
		'_themename-scripts',
		'header_scripts',

	);

	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	
	return $tag;
} */


//CSS Deferring
/*function custom_use_print_block_library( $html, $handle ) {
  $handles = array( 'stylish', 'wp-block-library' );
  if ( in_array( $handle, $handles ) ) {
	$html = str_replace( 'media=\'all\'', 'media=\'print\' onload="this.onload=null;this.media=\'all\'"', $html );
  }
  return $html;
}
add_filter( 'style_loader_tag', 'custom_use_print_block_library', 10, 2 );
*/

// featured image for posts/pages
add_theme_support( 'post-thumbnails' );

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

	 $new_filetypes = array();
	 $new_filetypes['svg'] = 'image/svg';
	 $file_types = array_merge($file_types, $new_filetypes );

	 return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

add_filter( 'gform_confirmation_anchor', '__return_false' );

//navigation Header menu

function header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'header_menu' );

//add div for nav sub menu
class Walker_Nav_Pointers extends Walker_Nav_Menu
{
	function start_lvl( &$output, $depth = 0, $args = array() )
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"sub-menu-wrap\">\n";
		$output .= "\n<ul class=\"sub-menu\">\n";
	}
	function end_lvl( &$output, $depth = 0, $args = array() )
	{
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</div>\n".($depth ? "$indent</ul>\n" : "");
	}
}

//navigation Footer menu

function footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Links' ));
}
add_action( 'init', 'footer_menu' );

//carbon fields setup
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options() {
  # Attach fields
  include_once( 'options/theme-options.php' );
  include_once( 'options/post-meta.php' );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

// File Type SVG
add_filter( 'upload_mimes', 'crb_mime_types' );
function crb_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';

  return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'crb_check_filetype', 10, 4 );
function crb_check_filetype( $data, $file, $filename, $mimes ) {
  $filetype = wp_check_filetype( $filename, $mimes );

  return [
	'ext'             => $filetype['ext'],
	'type'            => $filetype['type'],
	'proper_filename' => $data['proper_filename']
  ];
}

/**
 * Hide Editor From Templates
 */
function app_hide_editor() {
	$post_id = false;

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} else if ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}

	$post_id = intval( $post_id );

	if ( ! $post_id ) {
		return;
	}

	$current_template = get_page_template_slug( $post_id );
	$exclude_on       = [
		'templates/front-page.php',
		'templates/capital.php',
	];

	if ( in_array( $current_template, $exclude_on ) ) {
		remove_post_type_support( 'page', 'editor' );
	}
}
add_action( 'admin_init', 'app_hide_editor' );

add_filter( 'register_post_type_args', 'app_remove_gutenberg_on_pages', 10, 2 );
function app_remove_gutenberg_on_pages( $args, $post_type ) {
	if ( $post_type !== 'page' ) {
		return $args;
	}

	$args['show_in_rest'] = false;

	return $args;
}