<?php 
 get_header(); ?>

    <?php if (get_option('home_hide_first_section') != '1')  :?>
        <?php 
            $no=get_option('slider_num');
            $sliders = cl_get_sliders($no);
                if($sliders->have_posts()) : 
            ?>
            <div id="main-slider" class="dl-slider">
                <?php while($sliders->have_posts()) : $sliders->the_post(); ?>
                <div class="single-slide">
                    <div class="bg-img kenburns-top-right" data-source="background-image: url('<?php the_post_thumbnail_url();  ?>'); width: 100%; height:100%" style="visibility: visible;"></div>
                    <div class="slider-content-wrap d-flex align-items-center ">
                        <div class="container">
                            <div class="slider-content">
                                <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s" style="visibility: visible;">
                                    <?php 
                                        $slider_small_title = get_post_meta(get_the_ID(),'cl_slider_small_title',true);
                                        if(!empty($slider_small_title)) :
                                     ?>
                                        <?= $slider_small_title;  ?>
                                     <?php endif; ?>
                                </div></div></div>
                                <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s" style="visibility: visible;">
                                    <?php 
                                        $slider_large_title = get_post_meta(get_the_ID(),'cl_slider_large_title',true);
                                        if(!empty($slider_large_title)) :
                                     ?>
                                        <?= $slider_large_title;  ?>
                                     <?php endif; ?></div></div>
                                </div>
                                <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s" style="visibility: visible;"><?php the_title(); ?></div></div></div>
                                <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s" style="visibility: visible;"><?php the_content(); ?></div></div></div>
                                <div class="dl-btn-group">
                                    <div class="inner-layer">
                                        <?php 
                                          $slider_url  = get_post_meta(get_the_ID(),'cl_slider_link_url',true);
                                          $slider_text = get_post_meta(get_the_ID(),'cl_slider_link_text',true);
                                          if(!empty($slider_url)||($slider_text)) :
                                         ?>
                                        <a href="<?= $slider_url;  ?>" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s" style="visibility: visible;"><?= $slider_text;  ?><i class="arrow_right"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--Slide-1-->
                <?php endwhile;?>     
            </div>
            <?php wp_reset_query(); endif ?>
            <!-- End Main Slider -->
    <?php endif; ?>




    <?php if (get_option('home_hide_second_section') != '1')  :?>

        <section class="features-section padding-50 bg-grey">
            <div dir="rtl" class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="wow fadeInLeft" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInLeft;">
                            <div class="section-heading mb-20">
                                <h2><?= get_option('home_second_title'); ?></h2>
                                <p><?php echo get_option('home_second_content'); ?> </p>
                            </div>
                            <div class="row mb-20">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                           <img style="width: 150px; height:50px;" class="img-fluid" data-src="<?= get_option('home_second_img_one_url'); ?>">
                                        </div>
                                        <div class="feature-content">
                                            <h3><?= get_option('home_second_ser_one_title'); ?></h3>
                                            <p><?php echo get_option('home_second_ser_one_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                           <img style="width: 150px; height:50px;" class="img-fluid" data-src="<?= get_option('home_second_img_two_url'); ?>">
                                        </div>
                                        <div class="feature-content">
                                            <h3><?= get_option('home_second_ser_two_title'); ?></h3>
                                            <p><?php echo get_option('home_second_ser_two_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                           <img style="width: 150px; height:50px;" class="img-fluid" data-src="<?= get_option('home_second_img_three_url'); ?>">
                                        </div>
                                        <div class="feature-content">
                                            <h3><?= get_option('home_second_ser_three_title'); ?></h3>
                                            <p><?php echo get_option('home_second_ser_three_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                           <img style="width: 150px; height:50px;" class="img-fluid" data-src="<?= get_option('home_second_img_four_url'); ?>">
                                        </div>
                                        <div class="feature-content">
                                            <h3><?= get_option('home_second_ser_four_title'); ?></h3>
                                            <p><?php echo get_option('home_second_ser_four_content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li>
                            <a href="<?= get_option('home_second_link_url'); ?>" class="default-btn">Book Our Service <span></span></a>
                            <a class="whatsapp" href="https://api.whatsapp.com/send?phone=<?= get_option('home_second_whatsup'); ?>"><img data-source="width:40px; height:40px;" data-src="<?= cl_URL ?>assets/img/Whatsapp.webp">
                                        + <?= get_option('home_second_whatsup'); ?></a>
                            </li>
                        </div>
                    </div>
                    <div class="features-bg col-lg-4 col-md-4" data-source="background-image: url('<?= get_option('home_second_img_url'); ?>'); width: 500px; height:520px;">
                        
                    </div><!-- width: 680px; height:1030px; -->
                </div>
            </div>
        </section><!-- /.about-section -->
        <?php endif; ?>
        <?php if (get_option('home_hide_third_section') != '1')  :?>
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
                    <img style="width:50px; height:50px;" data-src="<?= get_option('home_third_img_url'); ?>" alt="">
                    <h2><?= get_option('home_third_title'); ?></h2>
                    <p><?= get_option('home_third_content'); ?> </p>
                </div>
                <?php 
                    $no         = get_option('services_num');
                    $term_name  = get_option('home_third_services');
                    $services = cl_get_services($no, $term_name);
                    if($services->have_posts()) : 
                ?>
                <div class="row">
                    <?php while($services->have_posts()) : $services->the_post(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 sm-padding">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img style="width:350px; height:240px;" data-src="<?php the_post_thumbnail_url();  ?>" alt="post">
                                <span class="category"><a href="#"><?php the_category(); ?></a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">أقرا المزيد</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>

                </div>
                <?php wp_reset_query(); endif ?>
                <!-- End Main Services -->
            </div>
        </section><!-- /.blog-section -->
        <?php endif; ?>
        <?php if (get_option('home_hide_fourth_section') != '1')  :?>
        <section class="work-process-section padding-100">
           <div class="process-border"></div>
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
                   <img style="width:50px; height:50px;" data-src="<?php echo get_option('home_fourth_img_url'); ?>" alt="img">
                   <h2><?php echo get_option('home_fourth_title'); ?></h2>
                   <p><?php echo get_option('home_fourth_content'); ?></p>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-lg-3 col-sm-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-pro-item">
                            <i class="<?php echo get_option('home_fourth_icon01'); ?>"></i>
                            <h3 class="mt-2"><?php echo get_option('home_fourth_title_icon01'); ?></h3>
                            <p><?php echo get_option('home_fourth_content_icon01'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-pro-item">
                            <i class="<?php echo get_option('home_fourth_icon02'); ?>"></i>
                            <h3 class="mt-2"><?php echo get_option('home_fourth_title_icon02'); ?></h3>
                            <p><?php echo get_option('home_fourth_content_icon02'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-pro-item">
                            <i class="<?php echo get_option('home_fourth_icon03'); ?>"></i>
                            <h3 class="mt-2"><?php echo get_option('home_fourth_title_icon03'); ?></h3>
                            <p><?php echo get_option('home_fourth_content_icon03'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="work-pro-item">
                            <i class="<?php echo get_option('home_fourth_icon04'); ?>"></i>
                            <h3 class="mt-2"><?php echo get_option('home_fourth_title_icon04'); ?></h3>
                            <p><?php echo get_option('home_fourth_content_icon04'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.work-process-section -->
        <?php endif; ?>
        <?php if (get_option('home_hide_fivth_section') != '1')  :?>
        <section class="service-section bg-grey padding-100">
            <div class="container">
               <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
                   <img style="width:50px; height:50px;" data-src="<?php echo get_option('home_fivth_img_url'); ?>" alt="img">
                   <h2><?php echo get_option('home_fivth_title'); ?></h2>
                   <p><?php echo get_option('home_fivth_content'); ?></p>
               </div>
               
                <div class="row">
                      <?php
                        $no = get_option('services_cat_num');   
                        $terms = cl_get_services_terms($no);
                        foreach ($terms as $term) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-card">
                            <div class="service-thumb">
                                <?php 
                                $t_id = $term->term_id;
                                $term_meta = get_option( "category_$t_id" ); 
                                $seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : ''; 
                                ?>
                               <img style="width:350px; height:240px;" data-src="<?= $seriesimage; ?>">
                            </div>
                            <div class="service-content mt-5">
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
        <?php endif; ?>
        <?php if (get_option('home_hide_sixth_section') != '1')  :?>
        <section class="faq-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 xs-padding">
                        <div class="faq-box padding-100">
                            <div class="section-heading mb-30">
                                <h2><?php echo get_option('home_sixth_title'); ?></h2>
                                <p><?php echo get_option('home_sixth_content'); ?> </p>
                            </div>
                            
                               <?php $no=get_option('question_num');?>
                                <!-- Start Main question -->
                                <?php $questions = cl_get_questions($no);
                                    if($questions->have_posts()) : 
                                        $acc_active = true;
                                ?>
                            <div id="accordion" role="tablist">
                                <?php while($questions->have_posts()) : $questions->the_post(); ?>
                                <div class="acc-item <?php echo $acc_active ? 'active-acc' : '' ?>">
                                    <h5 id="faq<?= get_the_ID(); ?>"><a data-toggle="collapse" href="#collapse<?= get_the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?= get_the_ID(); ?>"><?php the_title(); ?></a></h5>
                                    <div id="collapse<?= get_the_ID(); ?>" class="collapse <?php echo $acc_active ? 'show' : '' ?>" role="tabpanel" aria-labelledby="faq<?= get_the_ID(); ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php 
                                $acc_active = false; 
                                endwhile;
                            ?>  
                            </div>
                            <?php wp_reset_query(); endif ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 xs-padding">
                        <div class="cta-block text-center" data-source="background-image:url('<?php echo get_option('home_sixth_img_url_two'); ?>'); width: 100%; height:485px;">
                            <div class="cta-block-content">
                                <h2><?php echo get_option('home_sixth_percent'); ?></h2>
                                <h3><?php echo get_option('home_sixth_img_title'); ?></h3>
                                <a href="<?php echo get_option('home_sixth_url'); ?>" class="default-btn">طلب تقدير مجاني<span></span></a>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 xs-padding">
                        <div class="faq-bg d-none d-md-block" data-source="background-image:url('<?php echo get_option('home_sixth_img_url_one'); ?>'); width: 100%; height:485px;"></div>
                    </div>
                </div>
            </div>
        </section><!-- /.faq-section -->
        <?php endif; ?>
        <?php if (get_option('home_hide_seventh_section') != '1')  :?>
        <section class="blog-section bg-grey padding-100">
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="200ms">
                    <img style="width:50px; height:50px;" data-src="<?= get_option('home_seventh_img_url'); ?>" alt="">
                    <h2><?= get_option('home_seventh_title'); ?></h2>
                    <p><?= get_option('home_seventh_content'); ?> </p>
                </div>
                <?php 
                    $no         = get_option('blog_num');
                    $term_name  = get_option('home_seventh_news');
                    //Start Main blog 
                    $blog = cl_get_news($no, $term_name);
                    if($blog->have_posts()) : 
                ?>
                <div class="row">
                    <?php while($blog->have_posts()) : $blog->the_post(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 sm-padding">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img style="width:350px; height:235px;" data-src="<?php the_post_thumbnail_url();  ?>" alt="post">
                            </div>
                            <div class="blog-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">أقرا المزيد</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>

                </div>
                <?php wp_reset_query(); endif ?>
                <!-- End Main blog -->
            </div>
        </section><!-- /.blog-section -->
        <?php endif; ?>

        <section class="faq-section mb-5 mt-5">
             <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp"  data-wow-delay="200ms" style="visibility: visible;">
                    <img style="width:50px; height:50px;" data-src="<?= get_option('home_video_title_img_url'); ?>" alt="">
                    <h2><?= get_option('home_video_title'); ?></h2>
                </div>
            </div>
            <div class="image-column mb-5" data-source="background-image: url(<?= get_option('home_nineth_img_url'); ?>)">
                <div class="inner-column bs-example">
                    <a href="<?= get_option('home_nineth_link');?>" class="overlay-link lightbox-image" target="_blank" rel="noopener noreferrer">
                        <div class="icon-box">
                            <i class="fas fa-play"></i>
                            <i class="ripple"></i>
                        </div>
                    </a>
                    <!-- Modal HTML -->
<!--
                    <div id="videoModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">YouTube Video</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <div class="embed-responsive embed-responsive-16by9">
                                    <?php //$cl_video_link = get_option('home_nineth_link'); ?>
                                    
                                     <iframe id="homeVideo" width="100%" height="500" src="<?php //echo getYoutubeEmbedUrl($cl_video_link); ?>" 
                                    frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                </div>
            </div>
        </section>
        <?php if (get_option('home_hide_eightth_section') != '1')  :?>
        <section class="project-section bg-grey padding-100">
            <div class="container">
                <div class="section-heading text-center mb-40 wow fadeInUp"  data-wow-delay="200ms" style="visibility: visible;">
                    <img style="width:50px; height:50px;" data-src="<?= get_option('home_eightth_img_url'); ?>" alt="">
                    <h2><?= get_option('home_eightth_title'); ?></h2>
                    <p><?= get_option('home_eightth_content'); ?> </p>
                </div>

                <?php 
                $cleints = cl_get_cleints(-1);
                    if($cleints->have_posts()) : 
                ?>
                <div class="slider project-carousel nav-style carousel-dots">
                    <?php while($cleints->have_posts()) : $cleints->the_post(); ?>
                    <div class="project-item">
                        <div class="project-inner">
                            <img style="width:150px; height: 150px;" data-src="<?php the_post_thumbnail_url();  ?>" alt="img">
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php wp_reset_query(); endif ?>
            </div>
        </section><!-- /.project-section -->
        <?php endif; ?>
 <?php get_footer(); ?>