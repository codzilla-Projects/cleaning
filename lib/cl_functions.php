<?php 
function cl_get_sliders($no){
 $args = array(
        'post_type'       => 'sliders',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}


function cl_get_services($no, $term_name){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => $no,
        'post_status'       => 'publish',
        'paged'             => $paged,
        'orderby'           => 'date',
        'post__not_in'      => array(get_the_ID()),
        'order'             => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'operator' => 'IN',
                'terms'    => $term_name,

            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}

function cl_get_services_sidebar($no){
    $id = get_the_ID();
    $terms =  wp_get_post_terms($id,'category',['fields'=>'ids']);
    //var_dump($terms);
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => $no,
        'post_status'       => 'publish',
        'orderby'           => 'date',
        'post__not_in'      => array($id),
        'order'             => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'operator' => 'IN',
                'terms'    => $terms,

            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}

function cl_get_cleints($no){
    $args = array(
        'post_type'       => 'cleints',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function cl_get_questions($no){
    $args = array(
        'post_type'       => 'questions',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'orderby'         => 'date',
        'order'           => 'ASC'
    );
    return $posts = new WP_Query( $args );    
}

function cl_get_news($no, $term_name){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => $no,
        'post_status'       => 'publish',
        'paged'             => $paged,
        'orderby'           => 'date',
        'order'             => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'operator' => 'IN',
                'terms'    => $term_name,

            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}

function cl_get_services_terms($no){
  return  
  get_terms(array(
    'taxonomy'   => 'category',
    'hide_empty' => false, 
    'orderby'    => 'ID',
    'order'      => 'ASC',
    'hide_empty' => false,
    'number'     => $no,));
}
function cl_get_service_with_tax($term_id){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  get_option('posts_per_page'),
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}
function cl_get_service_with_tag($term_id){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  get_option('posts_per_page'),
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}
function cl_get_post_with_tax($no){

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           => $paged,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy'           => 'category',
                'terms'              => 'bonus-footage',
                'field'              => 'slug',
                'include_children'   => true,
                'operator'           => 'NOT IN',
            ),
        ),
    );
    return $posts = new WP_Query( $args );    
}
function cl_get_service_reviews($no,$id){
$args = array(
    'post_type'  => 'review',
    'meta_key'   => 'cl_review_service_name',
    'orderby'    => 'meta_value_num',
    'order'      => 'ASC',
    'meta_query' => array(
        array(
            'key'     => 'cl_review_service_name',
            'value'   => $id,
            'compare' => '=',
        ),
    ),
);
return $reviews = new WP_Query( $args );
}

function getYoutubeEmbedUrl($url)
{
     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}