<?php 
/*********************************

Add Link Meta Box To Slider

**********************************/

function cl_add_slider_data_meta() {

    add_meta_box( "slider_extra_data", "Additional Data" , "cl_slider_data_callback", array('sliders'), "normal" );
    add_meta_box( "services_extra_data", "Video Link" , "cl_services_video_callback", array('post'), "normal" );
    add_meta_box( "services_extra_info", "Additional Information" , "cl_services_data_callback", array('post'), "normal" );
    add_meta_box( "services_contact_data", "Contact Info" , "cl_services_contact_info_callback", array('post'), "normal" );
    add_meta_box( "review_extra_data", "Service Review" , "cl_review_dtat_callback", array('review'), "normal" );

}

add_action( 'add_meta_boxes', 'cl_add_slider_data_meta' );

/* Display the post meta box. */

function cl_slider_data_callback( $object, $box ) { 
    $cl_slider_small_title  = esc_attr( get_post_meta( $object->ID, 'cl_slider_small_title', true ) );
    $cl_slider_large_title  = esc_attr( get_post_meta( $object->ID, 'cl_slider_large_title', true ) );
    $cl_slider_link_text    = esc_attr( get_post_meta( $object->ID, 'cl_slider_link_text', true ) );
    $cl_slider_link_url     = esc_attr( get_post_meta( $object->ID, 'cl_slider_link_url', true ) );
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_slider_small_title"><?php _e('Small Title: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_slider_small_title" class="form-control w-100" value="<?php echo $cl_slider_small_title; ?>"><br>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_slider_large_title"><?php _e('Large Title: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_slider_large_title" class="form-control w-100" value="<?php echo $cl_slider_large_title; ?>"><br>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_slider_link_text"><?php _e('Link Text: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_slider_link_text" class="form-control w-100" value="<?php echo $cl_slider_link_text; ?>"><br>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_slider_link_url"><?php _e('Link URL: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_slider_link_url" class="form-control w-100" value="<?php echo $cl_slider_link_url; ?>"><br>
                </div>
            </div>
        </div>

    </div>
<?php

}


function cl_services_video_callback( $object, $box ) { 
    
    $cl_video_link_url     = esc_attr( get_post_meta( $object->ID, 'cl_video_link_url', true ) );
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_video_link_url"><?php _e('Link URL: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_video_link_url" class="form-control w-100" value="<?php echo $cl_video_link_url; ?>"><br>
                </div>
            </div>
        </div>

    </div>
<?php

}
/* Display the post meta box. */

function cl_services_data_callback( $object, $box ) { 
    $cl_service_price  = esc_attr( get_post_meta( $object->ID, 'cl_service_price', true ) );
    $cl_service_employment_type  = esc_attr( get_post_meta( $object->ID, 'cl_service_employment_type', true ) );
    $cl_service_duration    = esc_attr( get_post_meta( $object->ID, 'cl_service_duration', true ) );
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_service_price"><?php _e('Service Price: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_service_price" class="form-control w-100" value="<?php echo $cl_service_price; ?>"><br>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_service_employment_type"><?php _e('Employment Type: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_service_employment_type" class="form-control w-100" value="<?php echo $cl_service_employment_type; ?>"><br>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_service_duration"><?php _e('The average duration of the task: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="cl_service_duration" class="form-control w-100" value="<?php echo $cl_service_duration; ?>"><br>
                </div>
            </div>
        </div>
    </div>

<?php

}
/* Display the post meta box. */

function cl_services_contact_info_callback( $object, $box ) { 
    $hide_contact_details  = get_post_meta( $object->ID, 'hide_contact_details', true );
    $cl_service_phone  = esc_attr( get_post_meta( $object->ID, 'cl_service_phone', true ) );
    $cl_service_whatsapp  = esc_attr( get_post_meta( $object->ID, 'cl_service_whatsapp', true ) );
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="hide_contact_details"><?php _e('Hide Contact Details: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="checkbox" name="hide_contact_details" value="1" <?= $hide_contact_details == '1' ?'checked': ''; ?> ><br>
                </div>
            </div>
        </div>
    </div>

<div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_service_phone"><?php _e('Service Phone: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="number"  name="cl_service_phone" class="form-control w-100" value="<?php echo $cl_service_phone; ?>"><br>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_service_whatsapp"><?php _e('Service WhatsApp: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="number"  name="cl_service_whatsapp" class="form-control w-100" value="<?php echo $cl_service_whatsapp; ?>"><br>
                </div>
            </div>
        </div>
    </div>

<?php

}
function cl_review_dtat_callback( $object, $box ) { 
    
    $cl_review_service_name     = esc_attr( get_post_meta( $object->ID, 'cl_review_service_name', true ) );
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="cl_review_service_name"><?php _e('Service Name: ','cleaning'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <select class="form-control" id="cl_review_service_name" name="cl_review_service_name" >

                        <?php $args = array(
                            'post_type'       => 'post',
                            'post_status'     => 'publish',
                            'posts_per_page'  =>  -1,
                            'orderby'         => 'name',
                            'order'           => 'DESC'
                        );
                    
                         $services = get_posts( $args );  ?>
                         
				        <option >All Services</option>

				        <?php foreach($services as $service) : ?>

				            <option value="<?= $service->ID; ?>" <?php echo $service->ID == $cl_review_service_name ? 'selected' : ''; ?> > <?= $service->post_title; ?></option>

				        <?php endforeach; ?>

                    </select>
                    
                </div>
            </div>
        </div>

    </div>
<?php

}

add_action( 'save_post', 'cl_save_custom_meta', 10, 2 );

function cl_save_custom_meta($post_id){

    if( isset($_POST['cl_slider_small_title']) ){

        update_post_meta($post_id, 'cl_slider_small_title', $_POST['cl_slider_small_title']);

    }

    else

        delete_post_meta($post_id,'cl_slider_small_title');

    if( isset($_POST['cl_slider_large_title']) ){

        update_post_meta($post_id, 'cl_slider_large_title', $_POST['cl_slider_large_title']);

    }

    else

        delete_post_meta($post_id,'cl_slider_large_title');


    if( isset($_POST['cl_slider_link_text']) ){

        update_post_meta($post_id, 'cl_slider_link_text', $_POST['cl_slider_link_text']);

    }

    else

        delete_post_meta($post_id,'cl_slider_link_text');


    if( isset($_POST['cl_slider_link_url']) ){

        update_post_meta($post_id, 'cl_slider_link_url', $_POST['cl_slider_link_url']);

    }

    else

        delete_post_meta($post_id,'cl_slider_link_url');
    
    if( isset($_POST['cl_video_link_url']) ){

        update_post_meta($post_id, 'cl_video_link_url', $_POST['cl_video_link_url']);

    }

    else

        delete_post_meta($post_id,'cl_video_link_url');

    if( isset($_POST['cl_service_price']) ){

        update_post_meta($post_id, 'cl_service_price', $_POST['cl_service_price']);

    }

    else

        delete_post_meta($post_id,'cl_service_price');
    
    if( isset($_POST['cl_service_employment_type']) ){

        update_post_meta($post_id, 'cl_service_employment_type', $_POST['cl_service_employment_type']);

    }

    else

        delete_post_meta($post_id,'cl_service_employment_type');
    
    if( isset($_POST['cl_service_duration']) ){

        update_post_meta($post_id, 'cl_service_duration', $_POST['cl_service_duration']);

    }

    else

        delete_post_meta($post_id,'cl_service_duration');
    
    if( isset($_POST['cl_service_phone']) ){

        update_post_meta($post_id, 'cl_service_phone', $_POST['cl_service_phone']);

    }

    else

        delete_post_meta($post_id,'cl_service_phone');
    
    
    if( isset($_POST['cl_service_whatsapp']) ){

        update_post_meta($post_id, 'cl_service_whatsapp', $_POST['cl_service_whatsapp']);

    }

    else

        delete_post_meta($post_id,'cl_service_whatsapp');
        
    
    
    if( isset($_POST['cl_review_service_name']) ){

        update_post_meta($post_id, 'cl_review_service_name', $_POST['cl_review_service_name']);

    }

    else

        delete_post_meta($post_id,'cl_review_service_name');
         
    if( isset($_POST['hide_contact_details']) ){

        update_post_meta($post_id, 'hide_contact_details', $_POST['hide_contact_details']);

    }

    else

        delete_post_meta($post_id,'hide_contact_details');
        
}