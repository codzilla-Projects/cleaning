<?php 

    /**

    ** Template Name: News library Template

    **/

    get_header();

    get_template_part('hero_template');

?>

 <section class="blog-section bg-grey padding-100">

            <div class="container">

                <?php 

                    $no         = 3;

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

                                <img src="<?php the_post_thumbnail_url();  ?>" alt="post">

                            </div>

                            <div class="blog-content">

                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                <p><?php the_excerpt(); ?></p>

                                <a href="<?php the_permalink(); ?>" class="read-more">أقرا المزيد</a>

                            </div>

                        </div>

                    </div>

                    <?php endwhile;?>



                </div>

                 <?php     

                            $args = array(

                               'format'             => '?paged=%#%',

                               'current'            => max( 1, get_query_var('paged') ),

                               'total'              => $blog->max_num_pages,

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

                <?php wp_reset_query(); endif ?>

                <!-- End Main blog -->

            </div>

        </section><!-- /.blog-section -->

<?php get_footer(); ?>