<?php 

    /**

    ** Template Name: News library Template

    **/

    get_header();

?>
<section class="page-header padding" style="background: fixed center center url('<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo cl_URL ."assets/img/blue-bg.webp" ;} else{ echo $page_image;}?> ');background-size: cover;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">

        <div class="page-content text-center" >

            <h2>نتائج البحث عن :  <?php echo $_GET['s']; ?></h2>

            <ul dir="rtl" class="page-breadcrumb">

                <li><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                
                <li>نتائج البحث عن :  <?php echo $_GET['s']; ?></li>

            </ul>

        </div>

    </div>

</section><!-- /.page-header -->

 <section class="blog-section bg-grey padding-100">

            <div class="container">

                <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'posts_per_page'    => 9,
                    'paged'             => $paged,
                    'orderby'           => 'date',
                    'order'             => 'DESC',
                    'suppress_filters'  => false,
                    's'   				=> $_GET['s']
                    );

                $blog = new WP_Query( $args );

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

                <?php else: echo '<div class="col-md-12">
                                        <div class="blog-item">

                                            <div class="blog-content">

                                                <h3>لا توجد بيانات مطابقة للبحث </h3>

                                            </div>

                                        </div>
                                    </div>';
                wp_reset_query(); 
                endif ?>

                <!-- End Main blog -->

            </div>

        </section><!-- /.blog-section -->

<?php get_footer(); ?>