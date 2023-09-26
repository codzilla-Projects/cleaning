<?php if(is_single()){

    $cl_service_price  =  get_post_meta(get_the_ID(), 'cl_service_price', true );
    $cl_service_employment_type  =  get_post_meta( get_the_ID(), 'cl_service_employment_type', true ) ;
    $cl_service_duration    =  get_post_meta( get_the_ID(), 'cl_service_duration', true );

 } 

?>

<div class="col-lg-4 col-md-12 col-sm-12 padding-15">

    <div class="sidebar-wrap">

    <?php if(!empty($cl_service_price) || !empty($cl_service_employment_type) || !empty($cl_service_duration)) : ?>

        <div class="project-sidebar">

            <div class="cl_service_details sidebar-item">

                <h2>تفاصيل الخدمة</h2>

                <ul class="project-meta">

                    <?php if(!empty($cl_service_price)) : ?>

                    <li><span>السعر المتوقع للخدمة : </span><?= $cl_service_price;?></li>

                    <?php endif;?>

                    <?php if(!empty($cl_service_employment_type)) : ?>

                    <li><span>نوع العمالة :</span> <?= $cl_service_employment_type;?>  </li>

                    <?php endif;?>

                    <?php if(!empty($cl_service_duration)) : ?>

                    <li><span>متوسط مدة تنفيذ الخدمة :</span> <?= $cl_service_duration;?>  </li>

                    <?php endif;?>

                </ul>

            </div>

        </div>

        <?php endif; ?>

        <div class="widget-content">

            <h4>خدمات مشابهة</h4>

            <?php 

                $services   = cl_get_services_sidebar(5);

                if($services->have_posts()) : 

            ?>

            <ul class="thumb-post">

            	 <?php while($services->have_posts()) : $services->the_post(); ?>

                <li>

                	<img src="<?php the_post_thumbnail_url();  ?>" alt="post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                </li>

                <?php endwhile;?>

            </ul>

            <?php wp_reset_query(); endif ?>

        </div><!-- /.widget-content -->

        <div class="widget-content">

            <h4>احدث المواضيع </h4>

            <?php 

                $services   = cl_get_post_with_tax(5);

                if($services->have_posts()) : 

            ?>

            <ul class="thumb-post">

                 <?php while($services->have_posts()) : $services->the_post(); ?>

                <li>

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                </li>

                <?php endwhile;?>

            </ul>

            <?php wp_reset_query(); endif ?>

        </div><!-- /.widget-content -->

        <div class="widget-content">

            <h4>الخدمات </h4>

            <ul class="tags">

                <?php 

                    $terms = cl_get_services_terms(false);

                    foreach ($terms as $term) : 

                ?>

                <li>

                    <a href="<?= cl_BlogUrl.'/category/'.$term->slug; ?>"><i class="ti-list ml-2"></i><?= $term->name; ?></a></li>

                <?php endforeach; ?>

            </ul>


        </div><!-- /.widget-content -->

    </div><!--/.sidebar-wrap-->

</div><!--/.col-lg-4-->