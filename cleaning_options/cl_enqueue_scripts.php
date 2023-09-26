<?php
function cleaning_add_styles_scripts() {

	wp_enqueue_style('cleaning-animate', cl_URL.'assets/css/animate.min.css');

	wp_enqueue_style('cleaning-bootstrap', cl_URL.'assets/css/bootstrap.min.css');

	wp_enqueue_style('cleaning-elegant', cl_URL.'assets/css/elegant-line-icons.css');

	wp_enqueue_style('cleaning-fontawesome', cl_URL.'assets/css/fontawesome.min.css');

	wp_enqueue_style('cleaning-magnific', cl_URL.'assets/css/magnific-popup.css');

	wp_enqueue_style('cleaning-main', cl_URL.'assets/css/main.css');

	wp_enqueue_style('cleaning-nice-select', cl_URL.'assets/css/nice-select.css');

	wp_enqueue_style('cleaning-odometer', cl_URL.'assets/css/odometer.min.css');

	wp_enqueue_style('cleaning-slick', cl_URL.'assets/css/slick.min.css');

	wp_enqueue_style('cleaning-slider', cl_URL.'assets/css/slider.css');

	wp_enqueue_style('cleaning-themify', cl_URL.'assets/css/themify-icons.css');

	wp_deregister_script('jquery');

	wp_register_script('jquery', cl_URL.'assets/js/vendor/jquery-1.12.4.min.js', false, '', false); 

	wp_enqueue_script('jquery');

	wp_enqueue_script('cleaning-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-headroom', cl_URL.'assets/js/vendor/headroom.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-ajaxchimp', cl_URL.'assets/js/vendor/jquery.ajaxchimp.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-magnific', cl_URL.'assets/js/vendor/jquery.magnific-popup.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-YTPlayer', cl_URL.'assets/js/vendor/jquery.mb.YTPlayer.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-nice-select', cl_URL.'assets/js/vendor/jquery.nice-select.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-smoothscroll', cl_URL.'assets/js/vendor/jquery.smoothscroll.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-modernizr', cl_URL.'assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-odometer', cl_URL.'assets/js/vendor/odometer.min.js', array('jquery'), false, true);

	

	wp_enqueue_script('cleaning-simpleParallax', cl_URL.'assets/js/vendor/simpleParallax.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-slick', cl_URL.'assets/js/vendor/slick.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-waypoints', cl_URL.'assets/js/vendor/waypoints.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-wow', cl_URL.'assets/js/vendor/wow.min.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-appointment', cl_URL.'assets/js/appointment.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-contact', cl_URL.'assets/js/contact.js', array('jquery'), false, true);

	wp_enqueue_script('cleaning-main', cl_URL.'assets/js/main.js', array('jquery'), false, true);
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

