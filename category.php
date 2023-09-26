<?php 
	get_header();
  get_template_part('hero_cat');
?>
<section class="service-section bg-grey padding-100">
            <div dir="rtl" class="container">
               <?php 
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_id   = $category->cat_ID;
                    $services = cl_get_service_with_tax($cat_id);
                    if($services->have_posts()) :
                 ?>
                <div class="row"> 	 
                <?php                                                   
                    while($services->have_posts()) : $services->the_post(); 
                    $service_title = get_the_title();
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 sm-padding wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="service-card">
                            <div class="service-thumb">
                                <img src="<?php the_post_thumbnail_url();  ?>" alt="img">
                            </div>
                            <div class="service-content">
                                <h3><a href="<?php the_permalink();?>" title="<?= $service_title; ?>"><?php echo wp_trim_words( $service_title ,8, ' ...' );?></a></h3>
                                <p><?php the_excerpt();?> </p>
                                <a href="<?php the_permalink();?>" class="read-more"><i class="fas fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>       
                </div>
                     <?php     
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $services->max_num_pages,
                               'show_all'           => false,
                               'end_size'           => 1,
                               'mid_size'           => 2,
                               'prev_next'          => true,
                               'next_text'          => '»',
                               'prev_text'          => '«',
                               'type'               => 'list',
                           );
                        ?>
                        
                        <?php echo paginate_links($args); ?>
                        <?php wp_reset_query(); ?>
                <?php endif ?>
            </div>
        </section>
<?php get_footer(); ?>