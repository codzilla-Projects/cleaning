<?php 

	/**

	** Template Name: Contact Template

	**/

	get_header();

    get_template_part('hero_template');

?>

 <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="<?= get_option('contact_map'); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>



        <section class="contact-section bg-grey padding-100">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-sm-12 sm-padding">

                        <div class="contact-info">

		                    <h2><?= get_option('contact_title'); ?></h2>

		                    <p><?= get_option('contact_content'); ?></p>

		                    <h3><?= get_option('contact_location'); ?></h3>
                            <?php $phone = get_option('contact_phone'); ?>
                            <?php $email = get_option('contact_email'); ?>
                            <h4><i class="far fa-envelope"></i> <span>  البريد الإلكترونى : </span> <a href="mailto:<?=$email; ?>"><?=$email; ?> </a> <br> <i class="fas fa-mobile-alt"></i> <span> الهاتف : </span><span dir="ltr"> <a href="tel:<?=$phone; ?>"> <?= $phone; ?> </a></span> </h4>

		                </div>

                    </div>

                    <div class="col-lg-6 col-sm-12 sm-padding">

                        <div dir="rtl" class="contact-form">

                            <?php echo do_shortcode('[contact-form-7 id="107" title="Contact Form" html_id="ajax_form" html_class="form-horizontal"]');?>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /.contact-section -->

<?php get_footer(); ?>