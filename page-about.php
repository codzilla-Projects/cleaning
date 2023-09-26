<?php 
	/**
	** Template Name: About Template
	**/
	get_header();
    get_template_part('hero_template');
?>
<section class="features-section padding-50 bg-grey">
    <div dir="rtl" class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="wow fadeInLeft" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInLeft;">
                    <div class="row mb-20">
                        <div class="col-md-6 col-sm-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                   <img style="width: 150px; height:50px;" class="img-fluid" src="<?= get_option('about_first_img_one_url'); ?>">
                                </div>
                                <div class="feature-content">
                                    <h3 class="mt-2"><?= get_option('about_first_ser_one_title'); ?></h3>
                                    <p><?php echo get_option('about_first_ser_one_content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                   <img style="width: 150px; height:50px;" class="img-fluid" src="<?= get_option('about_first_img_two_url'); ?>">
                                </div>
                                <div class="feature-content">
                                    <h3 class="mt-2"><?= get_option('about_first_ser_two_title'); ?></h3>
                                    <p><?php echo get_option('about_first_ser_two_content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                   <img style="width: 150px; height:50px;" class="img-fluid" src="<?= get_option('about_first_img_three_url'); ?>">
                                </div>
                                <div class="feature-content">
                                    <h3 class="mt-2"><?= get_option('about_first_ser_three_title'); ?></h3>
                                    <p><?php echo get_option('about_first_ser_three_content'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                   <img style="width: 150px; height:50px;" class="img-fluid" src="<?= get_option('about_first_img_four_url'); ?>">
                                </div>
                                <div class="feature-content">
                                    <h3 class="mt-2"><?= get_option('about_first_ser_four_title'); ?></h3>
                                    <p><?php echo get_option('about_first_ser_four_content'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li>
                    <a href="<?= get_option('about_first_link_url'); ?>" class="default-btn">إحجز خدماتنا الآن <span></span></a>
                    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=<?= get_option('about_first_whatsup'); ?>"><img style="width:40px; height:40px;" src="<?= cl_URL ?>assets/img/Whatsapp.webp">
                    + <?= get_option('about_first_whatsup'); ?></a>
                    </li>
                </div>
            </div>
            <div class="features-bg col-lg-4 col-md-4" style="background-image: url('<?= get_option('about_first_img_url'); ?>'); width: 500px; height:520px;">
                
            </div><!-- width: 680px; height:1030px; -->
        </div>
    </div>
</section><!-- /.about-section -->

<section class="service-section bg-grey padding-100">
    <div class="container">
       <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
           <img src="<?php echo get_option('about_second_img_url'); ?>" alt="img">
           <h2><?php echo get_option('about_second_title'); ?></h2>
           <p><?php echo get_option('about_second_content'); ?></p>
       </div>
       
        <div class="row">
              <?php
                $no = get_option('about_services_cat_num');
                $terms = get_terms( array(
                    'taxonomy'      => 'category',
                    'hide_empty'    => false,
                    'include'       => 'all',
                    'orderby'       => 'ID',
                    'order'         => 'ASC',
                    'hide_empty'    => false,
                    'exclude'       => array('9'),
                    'number'        => $no,
                    ) 
                ); 
               
               foreach ($terms as $term) : ?>

            <div class="col-lg-4 col-md-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="service-card">
                    <div class="service-thumb">
                        <?php 
                        $t_id = $term->term_id;
                        $term_meta = get_option( "category_$t_id" ); 
                        $seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : ''; 
                        ?>
                       <img style="width:350px; height:240px;" src="<?= $seriesimage; ?>">
                    </div>
                    <div class="service-content">
                        <h3><a href="<?= cl_BlogUrl.'/category/'.$term->slug; ?>"><?= $term->name; ?></a></h3>
                        <p><?= $term->description; ?></p>
                        <a href="#" class="read-more"><i class="fas fa-share"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section><!-- /.service-section -->

<section class="work-process-section padding-100">
   <div class="process-border"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
           <img src="<?php echo get_option('about_third_img_url'); ?>" alt="img">
           <h2><?php echo get_option('about_third_title'); ?></h2>
           <p><?php echo get_option('about_third_content'); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="work-pro-item">
                    <i class="<?php echo get_option('about_third_icon01'); ?>"></i>
                    <h3><?php echo get_option('about_third_title_icon01'); ?></h3>
                    <?php echo get_option('about_third_content_icon01'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="work-pro-item">
                    <i class="<?php echo get_option('about_third_icon02'); ?>"></i>
                    <h3><?php echo get_option('about_third_title_icon02'); ?></h3>
                    <?php echo get_option('about_third_content_icon02'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="work-pro-item">
                    <i class="<?php echo get_option('about_third_icon03'); ?>"></i>
                    <h3><?php echo get_option('about_third_title_icon03'); ?></h3>
                    <?php echo get_option('about_third_content_icon03'); ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="work-pro-item">
                    <i class="<?php echo get_option('about_third_icon04'); ?>"></i>
                    <h3><?php echo get_option('about_third_title_icon04'); ?></h3>
                    <?php echo get_option('about_third_content_icon04'); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.work-process-section -->

<section class="cta-section padding-100" style="background-image:url('<?php echo get_option('about_fourth_img_url_two'); ?>');">
    <svg viewBox="0 0 1920 479.1">
    <path class="st0" fill="#f9fafa" d="M1562.5,260.9c-284.2,92.3-282.6,324-778.9,108.7C304.8,161.9,19.5,335.7,0,348.3v120.8v10h1920v-10V0
    C1715.4,15.3,1846.7,168.6,1562.5,260.9z"></path>
    </svg>
    <div class="container">
        <div class="cta-content">
           <img class="wow fadeInUp" data-wow-delay="0" src="<?php echo get_option('about_fourth_img_url_one'); ?>" alt="icon">
            <h2 class="wow fadeInUp" data-wow-delay="300ms"><?php echo get_option('about_fourth_title'); ?></h2>
            <p class="wow fadeInUp" data-wow-delay="400ms"><?php echo get_option('about_fourth_content'); ?></p>
            <a href="#" class="default-btn wow fadeInUp" data-wow-delay="500ms">أحصل على الخدمة الآن<span></span></a>
        </div>
    </div>
</section><!-- /.cta-section -->

<?php get_footer(); ?>