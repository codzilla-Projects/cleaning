<?php 

	get_header(); 

	get_template_part('hero_template');

	if( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();
?>

 <section dir="rtl" class="blog-section padding-100">

            <div class="container">

                <div class="blog-wrap row">

                    <div class="col-lg-8 padding-15">

                        <div class="blog-single-wrap">

                            <div class="blog-thumb">

                                <img src="<?php the_post_thumbnail_url(); ?>" alt="img">

                            </div>

                            <div class="blog-single-content">

                            	<div class="row">

	                            		<div class="col-lg-12 col-md-12 col-sm-12">

	                            			<ul class="single-post-meta">

			                                    <li><i class="fas fa-user"></i> <span><?php the_author(); ?></span></li>

			                                    <li><i class="far fa-calendar-alt"></i> <span dir="ltr"><?php echo get_the_date(  'j F Y' ); ?></span></li>

			                                    <li><i class="far fa-eye"></i> <span><?php gt_set_post_view(); ?><?= gt_get_post_view(); ?></span>

			                                </ul>

	                            		</div>

	                            	</div>

                            	

                                <h2><a href="#"><?php the_title(); ?></a></h2>

                                 <p><?php the_content(); ?></p>

                                <?php $video_link_url =  get_post_meta($post_id,'cl_video_link_url'); ?>

                                <?php   if(!empty($video_link_url[0]) && $video_link_url[0] !=null && $video_link_url[0] !="") { ?> 

                                   <video class="service_video" width="auto" height="auto" controls>

                                      <source src="<?= $video_link_url[0]; ?>" type="video/mp4">

                                      Your browser does not support the video tag.

                                    </video>

                                <?php } ?>

                                

                                <?php $images =  get_post_meta($post_id,'thumbnail_id'); ?>

                                <?php   if($images != null && $images != '') { ?> 
                                    <div class="row">
                                        <h3 class="padding-20">معرض الصور </h3>
                                    </div>
                                    <div class="row">

                                        <?php  foreach ($images as $image) { ?>

                                            <div class="col-lg-3 col-sm-6  project-item">

                                                    <?php $image_attributes_large = wp_get_attachment_image_src($image, 'large');?>

                                                        <?php $image_attributes_thumbnail = wp_get_attachment_image_src($image, 'medium');?>

                                                        <a class="image-hover-zoom" href="<?php echo $image_attributes_large[0];?>"  data-fancybox="group">

                                                            <img src="<?php echo $image_attributes_thumbnail[0];?>">

                                                        </a>

                                                    

                                            </div>



                                                                                                

                                        <?php  } ?>



                                    </div>

                                <?php } ?>

   

                                <ul class="post-tags">

                                	<?php 

						        		global $wpdb;

										$tags = get_the_terms($post_id , 'post_tag');  

										foreach( $tags as $tag ) : ?>

										<li>

											<a href="<?=get_tag_link( $tag )  ?>"><i class="ti-tag"></i> <?= $tag->name  ?></a>

										</li>

										<?php endforeach; ?>

                                </ul>

                                <div dir="rtl" class="post-navigation row">

                                	<?php 

                                    	$next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID ); 

                                    	$previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID ); 

                                    	?>

                                	

                                    <div class="col col-sm-6 prev-post">

                                        <a href="<?php echo $previous ?>"><i class="fas fa-arrow-right"></i>االسابق </a>

                                    </div>

                                    <div class="col col-sm-6 next-post">

                                    	

                                    	<a href="<?php echo $next_post_url ?>"> التالي <i class="fas fa-arrow-left"></i></a>

                                    </div>

                                    

                                </div><!-- /.post-navigation -->

                                

                                <?php $reviews = cl_get_service_reviews(3,$post_id); ?>

                                <?php if($reviews->have_posts()) : ?>

                                <div class="comments-area">

                                    <div class="comments-section">

                                        <h3 class="comments-title">آراء العملاء</h3>

                                        <ol class="comments">

                                            <?php while($reviews->have_posts()) : $reviews->the_post(); ?>

                                            <li class="comment">

                                                <div>

                                                    <div class="comment-thumb">

                                                        <div class="comment-img"><img src="<?php the_post_thumbnail_url();  ?>" alt=""></div>

                                                    </div>

                                                    <div class="comment-main-area">

                                                        <div class="comment-wrapper">

                                                            <div class="comments-meta">

                                                                <h4><?php the_title(); ?></h4>

                                                            </div>

                                                            <div class="comment-area">

                                                                <p><?php the_content(); ?></p>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </li>

                                            <?php endwhile;wp_reset_query(); ?>

                                        </ol>

                                    </div> <!-- end comments-section -->

                                </div><!-- /.comments-area -->

                                <?php endif; ?>

                            </div>

                        </div><!--/.blog-single-->

                    </div><!--/.col-lg-8-->



                    <?php get_sidebar(); ?>

                </div><!--/.blog-wrap-->

            </div>

        </section><!--/.blog-section-->

<?php
	endwhile; wp_reset_query(); endif;
	get_footer(); 
?>