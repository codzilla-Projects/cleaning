<?php
function cleaning_add_styles_scripts() {

	
    //wp_enqueue_style('cleaning-main-min', cl_URL.'assets/css/themify-icons.css');
    //wp_enqueue_style('cleaning-fontawesome-min', cl_URL.'assets/css/fontawesome.min.css');
   // wp_enqueue_script( 'load-css-async',  cl_URL.'assets/js/loadCSS.js', array(), '', false );
    if(is_front_page()){
        wp_deregister_style( 'newsletter' );
        wp_deregister_style( 'contact-form-7' );
        wp_dequeue_script('contact-form-7');
        wp_enqueue_style( 'cleaning-main', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'cleaning' ) ? wp_get_theme( 'cleaning' )->get( 'Version' ) : '' );

        $primaryColor = get_option('cl_primaryColor');
        $secondaryColor = get_option('cl_secondaryColor');
        $fontColor = get_option('cl_fontColor');
        $serviceDetailsBackground = get_option('cl_serviceDetailsBackgroun');
        $custom_css = "
		        :root {
		    --primaryColor   : {$primaryColor};
		    --secondaryColor : {$secondaryColor};
            --fontColor   : {$fontColor};
		    --serviceDetailsBackgroun : {$serviceDetailsBackground};
		 }"; 
        wp_add_inline_style( 'cleaning-main', $custom_css );
        
    
        //wp_enqueue_style('cleaning-main-min', cl_URL.'assets/css/style-preload.min.css');
    }
	wp_deregister_script('jquery');
  wp_enqueue_script('jquery-js', cl_URL.'assets/js/vendor/jquery-1.12.4.min.js');
    if(! is_front_page()){

	   wp_enqueue_style('cleaning-mainsub', cl_URL.'assets/css/xmain-sub.css');
       $primaryColor = get_option('cl_primaryColor');
        $secondaryColor = get_option('cl_secondaryColor');
        $fontColor = get_option('cl_fontColor');
        $serviceDetailsBackground = get_option('cl_serviceDetailsBackgroun');
        $custom_css = "
		        :root {
		    --primaryColor   : {$primaryColor};
		    --secondaryColor : {$secondaryColor};
            --fontColor   : {$fontColor};
		    --serviceDetailsBackgroun : {$serviceDetailsBackground};
		 }"; 
        wp_add_inline_style( 'cleaning-mainsub', $custom_css );
        
    }
    if( is_single()){
      wp_enqueue_style('cleaning-fancybox-css', cl_URL.'assets/css/jquery.fancybox.min.css');
      wp_enqueue_script('cleaning-fancybox-js', cl_URL.'assets/js/jquery.fancybox.js', array('jquery-js'), false, true);
      wp_enqueue_script('cl-fancybox-js', cl_URL.'assets/js/fancybox.min.js', array('jquery-js'), false, true);

    }
    if(wp_is_mobile()){
         wp_enqueue_style('cleaning-responsive', cl_URL.'assets/css/responsive.css');
         wp_enqueue_script('cleaning-mobile-menu', cl_URL.'assets/js/mobile-menu.js', array('jquery-js'), false, true);
    }

}

	add_action('wp_enqueue_scripts', 'cleaning_add_styles_scripts',9999999);

	function cl_admin_scripts_styles($hook) {
	//var_dump($hook);
	wp_enqueue_style( 'cl-main', cl_URL . 'assets/admin/css/main-style.css');
	wp_enqueue_script( 'cl-script', cl_URL .'assets/admin/js/script.js', array() ,false, true );
	$cl_pages = ['term.php','edit-tags.php','toplevel_page_content-area','cleaning-options_page_home-page-content','cleaning-options_page_about-page-content','cleaning-options_page_contact-page-content'];

	if( in_array($hook, $cl_pages) ) {
		wp_enqueue_style( 'cl-bootsrtap', cl_URL . 'assets/admin/css/bootstrap.min.css');
		wp_enqueue_style( 'cl-style', cl_URL . 'assets/admin/css/style.css');
		wp_enqueue_script('cl-bootsrtap',cl_URL .'assets/admin/js/bootstrap.min.js', array() ,false, true );
		wp_enqueue_script( 'cl-script', cl_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}


add_action('admin_enqueue_scripts', 'cl_admin_scripts_styles');
