<?php 

	/**

	** Template Name: Complaint Template

	**/

	get_header();

    get_template_part('hero_template');

?>

        <section class="contact-section bg-grey padding-50">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-3 sm-padding"> </div>

                    <div class="col-lg-6 sm-padding">

                        <div class="complaint-info ">

		                    <h2>تقديم شكوى</h2>

		                    
		                </div>
                        <div dir="rtl" class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="242" title="complaint Form" html_id="ajax_form" html_class="form-horizontal"]');?>

                        </div>

                    </div>
                    
                     <div class="col-lg-3 sm-padding"> </div>

                </div>

            </div>

        </section><!-- /.contact-section -->

<?php get_footer(); ?>