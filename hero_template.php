<section class="page-header padding" <?php if( !wp_is_mobile()) { ?>style="background: fixed center center url('<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo cl_URL ."assets/img/blue-bg.webp" ;} else{ echo $page_image;}?> ');background-size: cover;"<?php }?>>
    <?php if( !wp_is_mobile()) { ?><div class="opacity-medium bg-extra-dark-gray"></div><?php }?>
    <div class="container">

        <div class="page-content text-center" >

            <h2><?php the_title(); ?></h2>

            <ul dir="rtl" class="page-breadcrumb">

                <li><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                <?php 
                    $id = get_the_ID();
                    $terms =  wp_get_post_terms($id,'category',['fields'=>'all']);
                    foreach ( $terms as $term ) : ?>
                        <li>
                            <a href="<?= cl_BlogUrl.'/category/'.$term->slug; ?>"><?= $term->name; ?></a>
                        </li>
                <?php endforeach; ?>
                <li><?php the_title(); ?></li>

            </ul>

        </div>

    </div>

</section><!-- /.page-header -->