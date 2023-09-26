<?php  
define('cl_ROOT', get_stylesheet_directory().'/');
define('cl_URL', get_stylesheet_directory_uri() .'/');
define('cl_ADMIN', admin_url());
define('cl_BlogUrl', get_bloginfo('url'));

require_once('wp_bootstrap_navwalker.php');

require_once( cl_ROOT . '/lib/cl_enqueue_scripts.php' );

require_once( cl_ROOT . '/lib/cl_theme_init.php' );

require_once( cl_ROOT . '/lib/cl_meta_fields.php' );

require_once( cl_ROOT . '/lib/cl_functions.php');

require_once( cl_ROOT . '/lib/cl_taxonomy_terms.php');

require_once( cl_ROOT . 'theme-update-checker/theme-update-checker.php');

// require 'theme-update-checker/theme-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/Hadeer-Mamdouh/Cleaning',
	__FILE__,
	'cleaning'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');

$theme = wp_get_theme();
$update_version = $theme->update;
//var_dump($update_version);


function cleaning_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'dl-menu',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}


function services_change_cat_object() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['category']->labels;
    $labels->name = 'Services';
    $labels->singular_name = 'Services';
    $labels->add_new = 'Add Services';
    $labels->add_new_item = 'Add Services';
    $labels->edit_item = 'Edit Services';
    $labels->new_item = 'Services';
    $labels->view_item = 'View Services';
    $labels->search_items = 'Search Servicess';
    $labels->not_found = 'No Servicess found';
    $labels->not_found_in_trash = 'No Servicess found in Trash';
    $labels->all_items = 'All Servicess';
    $labels->menu_name = 'Services';
    $labels->name_admin_bar = 'Services';
}
add_action( 'init', 'services_change_cat_object' );


function webp_upload_mimes( $existing_mimes ) {
	// add webp to the list of mime types
	$existing_mimes['webp'] = 'image/webp';
	$existing_mimes['svg'] = 'image/svg';

	// return the array back to the function with our added mime type
	return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );


//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

/*Add Footer Widget*/
function cl_widgets_about() {

  register_sidebar( array(
    'name'          => 'First Footer Column',
    'id'            => 'first_footer',
    'before_widget' => '<div class="logo">',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'cl_widgets_about' );

function cl_widgets_info() {

  register_sidebar( array(
    'name'          => 'Second Footer Column',
    'id'            => 'second_footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
));
}
add_action( 'widgets_init', 'cl_widgets_info' );

function cl_widgets_link() {

  register_sidebar( array(
    'name'          => 'Third Footer Column',
    'id'            => 'third_footer',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
));
}
add_action( 'widgets_init', 'cl_widgets_link' );

function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count مشاهدة ";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
// Remove jQuery Migrate Script from header and Load jQuery from Google API
function crunchify_stop_loading_wp_embed_and_jquery() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}
add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');


function wp_dereg_script_comment_reply(){wp_deregister_script( 'comment-reply' );}
add_action('init','wp_dereg_script_comment_reply');
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
