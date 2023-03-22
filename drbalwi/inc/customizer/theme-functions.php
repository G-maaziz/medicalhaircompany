<?php



/**
 * Include Theme Customizer
 *
 * @since v1.0
 */
$theme_customizer = get_template_directory() . '/inc/customizer/customizer.php';
if (is_readable($theme_customizer)) {
	require_once $theme_customizer;
}




/**
 * General Theme Settings
 *
 * @since v1.0
 */
if (!function_exists('elit_setup_theme')) :
	function elit_setup_theme()
	{

		// Make theme available for translation: Translations can be filed in the /languages/ directory.
		load_theme_textdomain('elit', get_template_directory() . '/languages');

		// Theme Support.
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		));

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');
		// Add support for full and wide align images.
		add_theme_support('align-wide');
		// Add support for editor styles.
		add_theme_support('editor-styles');
		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Default Attachment Display Settings.
		update_option('image_default_align', 'none');
		update_option('image_default_link_type', 'none');
		update_option('image_default_size', 'large');

		// Custom CSS-Styles of Wordpress Gallery.
		add_filter('use_default_gallery_style', '__return_false');
	}
	add_action('after_setup_theme', 'elit_setup_theme');
endif;


/**
 * Fire the wp_body_open action.
 *
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 *
 * @since v2.2
 */
if (!function_exists('wp_body_open')) :
	function wp_body_open()
	{
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since v2.2
		 */
		do_action('wp_body_open');
	}
endif;


/**
 * Add new User fields to Userprofile
 *
 * @since v1.0
 */
if (!function_exists('elit_add_user_fields')) :
	function elit_add_user_fields($fields)
	{
		// Add new fields.
		$fields['facebook_profile'] = 'Facebook URL';
		$fields['twitter_profile']  = 'Twitter URL';
		$fields['linkedin_profile'] = 'LinkedIn URL';
		$fields['xing_profile']     = 'Xing URL';
		$fields['github_profile']   = 'GitHub URL';

		return $fields;
	}
	add_filter('user_contactmethods', 'elit_add_user_fields'); // get_user_meta( $user->ID, 'facebook_profile', true );
endif;


/**
 * Test if a page is a blog page
 * if ( is_blog() ) { ... }
 *
 * @since v1.0
 */
function is_blog()
{
	global $post;
	$posttype = get_post_type($post);

	return ((is_archive() || is_author() || is_category() || is_home() || is_single() || (is_tag() && ('post' === $posttype))) ? true : false);
}


/**
 * Init Widget areas in Sidebar
 *
 * @since v1.0
 */
function elit_widgets_init()
{
	// Area 1.
	register_sidebar(
		array(
			'name'          => 'Primary Widget Area (Sidebar)',
			'id'            => 'primary_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Area 2.
	register_sidebar(
		array(
			'name'          => 'Secondary Widget Area (Header Navigation)',
			'id'            => 'secondary_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'Top Header ',
			'id'            => 'top_widget_area',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Area #1',
			'id'            => 'widget_area',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Area #2',
			'id'            => 'widget_area2',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Area #3',
			'id'            => 'widget_area3',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Area #4',
			'id'            => 'widget_area4',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);



	/*************** */
	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Bottom Area #1',
			'id'            => 'widget_area_bottom',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Bottom Area #2',
			'id'            => 'widget_area_bottom2',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Bottom Area #3',
			'id'            => 'widget_area_bottom3',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	// Area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Bottom Area #4',
			'id'            => 'widget_area_bottom4',
			'before_widget' => '<div class="widget %1$s %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action('widgets_init', 'elit_widgets_init');

/**
 * Nav menus
 *
 * @since v1.0
 */
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'main-menu'   => 'Main Navigation Menu',
			'footer-menu' => 'Footer Menu',
		)
	);
}

/*************admin_scripts *********************/

function elit_admin_scripts()
{
	/*wp_enqueue_script('elit-admin-scripts', get_template_directory_uri() . '/assets/js/admin_js.js', array(), null, true);
	wp_localize_script('elit-admin-scripts', 'script_vars', array(
		'elit_ajax_url' => admin_url('admin-ajax.php'),
	));*/
}
add_action('admin_head', 'elit_admin_scripts');



/**
 * Loading All CSS Stylesheets and Javascript Files
 *
 * @since v1.0
 */
define('upload_path', wp_upload_dir()['basedir']);
define('upload_url', wp_upload_dir()['baseurl']);

if (!is_dir(upload_path . '/elit_assets')) {
	wp_mkdir_p(upload_path . '/elit_assets');
}
function clear_advert_main_transient()
{
	$screen = get_current_screen();
	if (strpos($screen->id, "theme-general-settings") == true) {

		$myfile = fopen(upload_path . "/elit_assets/custom.css", "w");



		fwrite(
			$myfile,
			get_field('css_code', 'option')
		);


		fclose($myfile);

		/**************** */
		$myfile = fopen(upload_path . "/elit_assets/custom.js", "w");
		$vars = array(
			'<script>',
			'</script>',
			"<script type='text/javascript'>"
		);
		$val = array(
			'',
			'',
			''
		);
		$content = str_replace($vars, $val, get_field('js_code', 'option'));
		fwrite(
			$myfile,
			$content
		);

		fclose($myfile);
	}
}
add_action('acf/save_post', 'clear_advert_main_transient', 20);



/**
 * @since 4.1
 */
add_action('wp_enqueue_scripts', 'elit_font_loader');

function elit_font_loader()
{
	wp_enqueue_style('load_font',  get_template_directory_uri() . '/assets/fonts/OpenSans-Light.woff2', array(), null);
	wp_enqueue_style('load_font2', get_template_directory_uri() . '/assets/fonts/OpenSans-Regular.woff2', array(), null);
	wp_enqueue_style('load_font3', get_template_directory_uri() . '/assets/fonts/OpenSans-Bold.woff2', array(), null);
	wp_enqueue_style('load_font4', get_template_directory_uri() . '/assets/fonts/OpenSans-ExtraBold.woff2', array(), null);
}

add_filter('style_loader_tag', 'elit_style_loader_tag', 10, 2);

function elit_style_loader_tag($html, $handle)
{
	if ($handle === 'load_font' || $handle === 'load_font2' || $handle === 'load_font3' || $handle === 'load_font4')
	{
		return str_replace("rel='stylesheet'",
			"rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html);
	}
	return $html;
}



/**
 * @since 1.0
 * 
 * 
 * @since 4.1
 * No more jQuery
 */

function elit_scripts_loader()
{
	$theme_version = wp_get_theme()->get('Version');

	// Remove gutenberg stuff from the frontend
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );


	$blank = is_page_template("blank-page.php");
	if(function_exists("get_field"))
	{
		if(get_field("blank-page") === true)
		{
			$blank = true;
		}
	}
	global $template;
	if(basename($template) == "search.php")
		$blank = false;

	if(!$blank)
	{
		wp_enqueue_style('Elit_global', get_template_directory_uri() . '/assets/css/combine.min.css', array(), $theme_version, 'all');
		wp_enqueue_style('mhc_global', get_template_directory_uri() . '/assets/blocks/mhc/mhc.css', array(), $theme_version, 'all');
		wp_enqueue_script('mainjs_theme', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true);
	}

	// Deregister jQuery (if any plugin tries to enqueue it)
	if (!is_admin() && !is_page('Blog') && !is_page("Kontakt"))
		wp_deregister_script('jquery');

}
add_action('wp_enqueue_scripts', 'elit_scripts_loader');
add_action('enqueue_block_editor_assets', 'elit_scripts_loader', 10, 0);


/**
 * @since 4.1
 */
function elit_defer_scripts($tag, $handle, $src)
{
	$defer = array(
		'mainjs_theme',
		'embla-script',
	);

	if(in_array($handle, $defer))
	{
		return '<script src="' . $src . '" defer type="text/javascript"></script>' . "\n";
	}
	
	return $tag;
} 
add_filter( 'script_loader_tag', 'elit_defer_scripts', 10, 3 );


/*********************** */

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Mobile Header',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/***********************/


/**
 * Some cleanup
 * >> Disable REST API
 * >> remove generator meta tag
 * >> ...
 * 
 * @since 4.1
 */
add_filter( 'rest_authentication_errors', function($result)
{
	if($result === true || is_wp_error($result))
	{
		return $result;
	}
	if(!is_user_logged_in())
	{
		return new WP_Error(
			'rest_not_logged_in',
			'You are not currently logged in.',
			array('status' => 401)
		);
	}
	
	return $result;
});

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
add_action('widgets_init', 'remove_recent_comments_style');
function remove_recent_comments_style()
{
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action( 'wp_footer', 'deregister_scripts' );
function deregister_scripts()
{
	wp_deregister_script( 'wp-embed' );
}
add_action('gform_pre_print_scripts', 'remove_that_shit_action', 99);
function remove_that_shit_action(){
	remove_action('gform_pre_print_scripts', 'output_hooks_javascript', 55);
}


/********************************/

/**
 * Mobile nav - profile box
 * @since 4.1
 */
add_filter( 'wp_nav_menu_items', 'add_profile_to_nav', 10, 2);

function add_profile_to_nav($items, $args)
{
	$show_mobile_profile = get_field("mobile_nav_profile", "option");
	$profilebox = get_field("profile_box", "option");

	if($show_mobile_profile)
	{
		$items .= '
		<li>
			<div class="nav_profile">
				<img src="' . $profilebox["photo"]['url'] . '" alt="' . $profilebox["photo"]['alt'] . '" width="' . $profilebox["photo"]['width'] . '" height="' . $profilebox["photo"]['height'] . '">
				<div class="nav_title">' . $profilebox["title"] . '</div>
				<div class="nav_subtitle">' . $profilebox["subtitle"] . '</div>
			</div>
		</li>
		';
	}

	return $items;
}

//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    // $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];

	unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['comment'] );
    // unset( $fields['url'] );
    unset( $fields['cookies'] );

    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    // $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    return $fields;
}

/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function ea_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="Kommentar"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'ea_comment_textarea_placeholder' );

/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Name*"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="E-Mail*"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );
