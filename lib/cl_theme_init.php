<?php 
function cleaning_register_custom_menu(){

    add_theme_support('post-thumbnails');
    register_nav_menus(array(

        'bootstrap-menu'     => 'Navigation Bar',
       /* 'company-menu'       => 'Company Menu',
        'links-menu'         => 'Links Menu',*/

    ));

    $label = array(

            'name'                  => _x( 'sliders', 'Homepage sliders', 'cleaning' ),

            'singular_name'         => _x( 'slider', 'Post type singular name', 'cleaning' ),

            'menu_name'             => _x( 'sliders', 'Admin Menu text', 'cleaning' ),

            'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'cleaning' ),

            'add_new'               => __( 'Add New slider', 'cleaning' ),

            'add_new_item'          => __( 'Add New slider', 'cleaning' ),

            'new_item'              => __( 'New slider', 'cleaning' ),

            'edit_item'             => __( 'Edit slider', 'cleaning' ),

            'view_item'             => __( 'View slider', 'cleaning' ),

            'all_items'             => __( 'All sliders', 'cleaning' ),

            'search_items'          => __( 'Search slider', 'cleaning' ),

            'parent_item_colon'     => __( 'Parent slider:', 'cleaning' ),

            'not_found'             => __( 'No slider found.', 'cleaning' ),

            'not_found_in_trash'    => __( 'No slider found in Trash.', 'cleaning' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page sliders.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-slides',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'sliders' ),

            'show_in_rest'       => true

        );

    register_post_type( 'sliders', $arg );

        $label = array(

            'name'                  => _x( 'cleints', 'Homepage cleints', 'cleaning' ),

            'singular_name'         => _x( 'cleint', 'Post type singular name', 'cleaning' ),

            'menu_name'             => _x( 'cleints', 'Admin Menu text', 'cleaning' ),

            'name_admin_bar'        => _x( 'cleint', 'Add New on Toolbar', 'cleaning' ),

            'add_new'               => __( 'Add New cleint', 'cleaning' ),

            'add_new_item'          => __( 'Add New cleint', 'cleaning' ),

            'new_item'              => __( 'New cleint', 'cleaning' ),

            'edit_item'             => __( 'Edit cleint', 'cleaning' ),

            'view_item'             => __( 'View cleint', 'cleaning' ),

            'all_items'             => __( 'All cleints', 'cleaning' ),

            'search_items'          => __( 'Search cleint', 'cleaning' ),

            'parent_item_colon'     => __( 'Parent cleint:', 'cleaning' ),

            'not_found'             => __( 'No cleint found.', 'cleaning' ),

            'not_found_in_trash'    => __( 'No cleint found in Trash.', 'cleaning' ),

        );     

        $arg = array(

            'labels'             => $label,

            'description'        => 'Home Page cleints.',

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => 6,

            'menu_icon'          => 'dashicons-businessperson',

            'supports'           => array( 'title','editor', 'thumbnail' ),

            'rewrite'            => array( 'slug' => 'cleints' ),

            'show_in_rest'       => true

        );

    register_post_type( 'cleints', $arg );




        $labels = array(

        'name'                  => _x( 'questions', 'Homepage questions', 'cleaning' ),

        'singular_name'         => _x( 'question', 'Post type singular name', 'cleaning' ),

        'menu_name'             => _x( 'questions', 'Admin Menu text', 'cleaning' ),

        'name_admin_bar'        => _x( 'question', 'Add New on Toolbar', 'cleaning' ),

        'add_new'               => __( 'Add New question', 'cleaning' ),

        'add_new_item'          => __( 'Add New question', 'cleaning' ),

        'new_item'              => __( 'New question', 'cleaning' ),

        'edit_item'             => __( 'Edit question', 'cleaning' ),

        'view_item'             => __( 'View question', 'cleaning' ),

        'all_items'             => __( 'All questions', 'cleaning' ),

        'search_items'          => __( 'Search questions', 'cleaning' ),

        'parent_item_colon'     => __( 'Parent questions:', 'cleaning' ),

        'not_found'             => __( 'No questions found.', 'cleaning' ),

        'not_found_in_trash'    => __( 'No questions found in Trash.', 'cleaning' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Home Page questions.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-editor-help',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'questions' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'questions', $args );




        $labels = array(

        'name'                  => _x( 'review', 'Client\'s Reviews', 'cleaning' ),

        'singular_name'         => _x( 'review', 'Post type singular name', 'cleaning' ),

        'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'cleaning' ),

        'name_admin_bar'        => _x( 'review', 'Add New on Toolbar', 'cleaning' ),

        'add_new'               => __( 'Add New Review', 'cleaning' ),

        'add_new_item'          => __( 'Add New Review', 'cleaning' ),

        'new_item'              => __( 'New Review', 'cleaning' ),

        'edit_item'             => __( 'Edit Review', 'cleaning' ),

        'view_item'             => __( 'View Review', 'cleaning' ),

        'all_items'             => __( 'All Reviews', 'cleaning' ),

        'search_items'          => __( 'Search Review', 'cleaning' ),

        'parent_item_colon'     => __( 'Parent Review:', 'cleaning' ),

        'not_found'             => __( 'No Reviews found.', 'cleaning' ),

        'not_found_in_trash'    => __( 'No Reviews found in Trash.', 'cleaning' )

    );     

    $args = array(

        'labels'             => $labels,

        'description'        => 'Services Reviews.',

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 7,

        'menu_icon'          => 'dashicons-testimonial',

        'supports'           => array( 'title','editor', 'thumbnail' ),

        'rewrite'            => array( 'slug' => 'review' ),

        'show_in_rest'       => true

    );

      
    register_post_type( 'review', $args );



    /*-----------------------------------------------------------------------------------------------*/
}

add_action('init','cleaning_register_custom_menu');

/* create my custom menu pages */

function cl_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'cleaning Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        cl_URL.'assets/img/favicon.webp',

        2

    );   

    add_submenu_page(

        'content-area',

        'Home options',

        'Home Page Options',

        'manage_options',

        'home-page-content',

        'home_page_content_callback'

    );   
    add_submenu_page(

        'content-area',

        'About options',

        'About Page Options',

        'manage_options',

        'about-page-content',

        'about_page_content_callback'

    ); 
    add_submenu_page(

        'content-area',

        'Contact options',

        'Contact Page Options',

        'manage_options',

        'contact-page-content',

        'contact_page_content_callback'

    );
}

add_action( 'admin_menu', 'cl_register_custom_menu_pages' );

require_once ( cl_ROOT . 'cleaning_options/cleaning_option.php');
require_once ( cl_ROOT . 'cleaning_options/home_page_option.php');
require_once ( cl_ROOT . 'cleaning_options/about_page_option.php');
require_once ( cl_ROOT . 'cleaning_options/contact_page_option.php');

add_filter( 'rwmb_meta_boxes', 'sh_add_gallery_images_to_portfolio' );

function sh_add_gallery_images_to_portfolio( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Gallery Images', 'cleaning' ),
        'post_types' => array('post'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Upload Images'),
                'id'   => "thumbnail_id",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
    

}

add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo() { ?>
    <style type="text/css">
        body{
            background:#c5c5d8!important; 
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('cl_logo_img'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        .login form{
            background: rgba(3, 3, 4, .9)!important;
            border-radius: .5rem;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: rgba(3, 3, 4, .9)!important;
            border-color: rgba(3, 3, 4, .9)!important;
        }
        .wp-core-ui p .button:hover{
            background-color: #c69923 !important;
            border-color: #c69923 !important;
            color: #fff;
        }
        #reg_passmail{color:#fff;}
    </style>
<?php }
