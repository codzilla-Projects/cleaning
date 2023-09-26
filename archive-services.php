<?php 
    /**
    ** Template Name: Services library Template
    **/
    get_header();
    get_template_part('hero_template');
?>

<section class="service-section bg-grey padding-100">
    <div class="container">
        <div class="row">
              <?php
                $no = false;   
                $terms = cl_get_services_terms($no);
                foreach ($terms as $term) :
                $t_id = $term->term_id;
                        $term_meta = get_option( "category_$t_id" ); 
                        $seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : '';?>

            <div class="col-lg-4 col-md-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="service-card">
                    <div class="service-thumb">
                        <img style="width:350px; height:240px;" src="<?= $seriesimage; ?>">
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= cl_BlogUrl.'/category/'.$term->slug; ?>"><?= $term->name; ?></a></h3>
                        <p><?= $term->description; ?></p>
                        <a href="<?= cl_BlogUrl.'/category/'.$term->slug; ?>" class="read-more"><i class="fas fa-share"></i></a>  
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- /.service-section -->


<section class="cta-section cta-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="cta-content text-right">
                    <h2>بالتأكيد سوف نجعل أى مكان نظيف و مرتب </h2>
                </div>
            </div>
            <div class="col-lg-4 ">
                <a href="<?= cl_BlogUrl.'/تواصل-معنا/'?>" class="default-btn">أطلب الخدمة الآن<span></span></a>
            </div>
        </div>
    </div>
</section><!-- /.cta-section -->
<?php get_footer(); ?>