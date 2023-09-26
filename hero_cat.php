<?php
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID; 
    $term_meta = get_option( "category_$cat_id" ); 
    $seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : '';
    
?>
<section class="page-header padding" style="background: fixed center center url('<?php if(empty($seriesimage)){ echo cl_URL ."assets/img/blue-bg.webp" ;} else{ echo $seriesimage;}?> ');background-size: cover;">
    <div class="container">
        <div class="page-content text-center" >
            <h2><?= single_cat_title(); ?></h2>
            <ul dir="rtl" class="page-breadcrumb">
                <li><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                <li><?= single_cat_title(); ?></li>
            </ul>
        </div>
    </div>
</section><!-- /.page-header -->