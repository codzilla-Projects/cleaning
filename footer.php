<footer class="footer-section">
            <div class="container">
                <div class="row padding-50">
                    <div class="col-lg-3 col-md-6 col-sm-12 sm-padding">
                        <div class="footer-item">
                            <?php if ( is_active_sidebar('first_footer') ) : ?>
                                <?php dynamic_sidebar('first_footer'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sm-padding">
                        <div class="footer-item">
                            <h3>معلومات الاتصال </h3>
                            <?php $phone = get_option('cl_phone'); if(!empty($phone)) :
                                ?><a class="contact" dir="ltr" href="callto:<?=$phone; ?>"><?=$phone; ?> <i class="fas fa-mobile-alt"></i></a><?php endif;?>
                            <?php $email = get_option('cl_email'); if(!empty($email)) :
                                ?><a class="contact" dir="ltr" href="mailto:<?=$email; ?>"><?=$email; ?> <i class="far fa-envelope"></i></a><?php endif;?>
                            <?php $location = get_option('cl_location'); if(!empty($location)) :
                                ?><p class="contact nohover" dir="ltr"><?=$location; ?> <i class="fas fa-map-marker-alt"></i></p><?php endif;?>
                                <ul class="footer-social">
                                <?php 
                                $fb = get_option('cl_fb');  
                                    if(!empty($fb)) :
                                ?>
                                <li><a class="fb" href="<?=$fb; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; 
                                $twitter = get_option('cl_twitter');  
                                  if(!empty($twitter)) :
                                ?>
                                <li><a class="tw" href="<?=$twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php endif; 
                                $insta = get_option('cl_insta');  
                                    if(!empty($insta)) :
                                ?>
                                <li><a class="in" href="<?=$insta; ?>"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; 
                                $pinterest = get_option('cl_pinterest');  
                                    if(!empty($pinterest)) :
                                ?>
                                <li><a class="pt" href="<?=$pinterest; ?>"><i class="fab fa-pinterest-p"></i></a></li>
                                <?php endif; 
                                $youtube = get_option('cl_youtube');  
                                    if(!empty($youtube)) :
                                ?>
                                <li><a class="yt" href="<?=$youtube; ?>"><i class="fab fa-youtube"></i></a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sm-padding">
                        <div class="footer-item">
                            <?php if ( is_active_sidebar('second_footer') ) : ?>
                                <?php dynamic_sidebar('second_footer'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 sm-padding">
                        <div class="footer-item">
                            <?php if ( is_active_sidebar('third_footer') ) : ?>
                                <?php dynamic_sidebar('third_footer'); ?>
                            <?php endif; ?>
                            <?php echo do_shortcode('[newsletter_form]'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $cl_copyright =  get_option('cl_copyright'); ?>
                    <div dir="rtl" class="col-lg-12 text-center">
                        <p class="copyright">جميع الحقوق محفوظة © 2021 | تم التصميم والتطوير من خلال <a href="http://codzilla.net"><img  src="<?php bloginfo('url');?>/wp-content/uploads/2021/12/codezilla-line-dark2.jpg" alt="codzilla" width="45" height="45"> Codezilla</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php if(wp_is_mobile()) { 
            $hide_contact_details = get_post_meta(get_the_ID(),'hide_contact_details',true);
            if( $hide_contact_details != '1'){?>
                <div class="mobile-empty-space"></div>
                <nav class="mobile-bottom-nav">
                    <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
                        <div class="mobile-bottom-nav__item-content">
                            <?php if(is_single()){
                                $cl_service_phone  = get_post_meta( get_the_ID(), 'cl_service_phone', true );
                                $cl_service_whatsapp  = get_post_meta( get_the_ID(), 'cl_service_whatsapp', true );
                                }?>
                                <?php $cl_whatsapp = get_option('home_second_whatsup'); ?>
                            <a href="tel:<?php if(!empty($cl_service_phone)) { echo $cl_service_phone; }else{ echo $phone; }?>">
                                <i class="fas fa-phone"></i>
                                اتصل
                            </a>
                        </div>		
                    </div>
                    <div class="mobile-bottom-nav__item">		
                        <div class="mobile-bottom-nav__item-content">
                            <a href="https://api.whatsapp.com/send?phone=<?php if(!empty($cl_service_whatsapp)) { echo $cl_service_whatsapp; }else{ echo $cl_whatsapp; }?>">
                                <i class="fab fa-whatsapp"></i>
                                واتساب
                            </a>
                        </div>
                    </div>
                    <div class="mobile-bottom-nav__item">
                        <div class="mobile-bottom-nav__item-content">
                            <a href="#services-popup"  data-toggle="modal" data-target="#services-popup">
                                <i class="fas fa-calendar-alt"></i>
                                 حجز خدمة           
                            </a>
                        </div>		
                    </div>

                </nav>
            
            <?php }
            } ?>
        </footer><!-- /.footer-section -->
		<div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="fas fa-angle-up"></i></button>
        </div>
<!-- <script type="text/javascript" defer src="<?php // echo  cl_URL;?>assets/js/vendor/jquery-1.12.4.min.js"></script>
 -->
<script type="text/javascript">

    window.addEventListener("load",function(){
        const scriptt = document.createElement("script");
        scriptt.src = "<?= cl_URL;?>assets/js/vendor/bootstrap.min.js";
        document.body.appendChild(scriptt);
        
        const scripttt = document.createElement("script");
        scripttt.src = "<?= cl_URL;?>assets/js/main.min.js";
        document.body.appendChild(scripttt);

    });
  
</script>
<script>
	document.addEventListener("DOMContentLoaded", function(){
		let divc = document.querySelectorAll('div[style]');
		for (let i = 0, len = divc.length; i < len; i++) {
			let actdisplay = window.getComputedStyle(divc[i], null).display;
			let actclear = window.getComputedStyle(divc[i], null).clear;

			if(actdisplay == 'block' && actclear == 'both') {
				divc[i].remove();
	}
		}
			});
</script>

<?php  wp_footer(); ?>
    </body>
</html>