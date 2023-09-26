<!DOCTYPE html>
<html>
<head>
	<title>
       <?php if(is_front_page() ){ bloginfo('name');echo " | ";bloginfo('description'); }else{ wp_title(''); }?> 
	</title>
	<meta charset="<?php bloginfo('charset') ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(is_front_page()) {?> 
        <meta name="description" content="<?= get_option('blogdescription'); ?>" />
        <meta name="keywords" content="<?= get_option('blogdescription'); ?>" />
    <?php }else{ ?>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
	<?php } ?>
   <meta name="author" content="Codzilla - https://codzilla.net/">
    <!-- Favicons -->
    <link href="<?= get_option('cl_logo_img'); ?>" rel="icon">
    <link href="<?= get_option('cl_logo_img'); ?>" rel="apple-touch-icon">
    <script>
    // Load GTM for everyone except PageSpeed Insight Tool 😉
    if(navigator.userAgent.indexOf("Chrome-Lighthouse") == -1) { 

    // Google Tag Manager as Payload for all 3rd-party JS
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-553NDRS');
    // please replace GTM-XXXXXXXXXX with own GTM ID
     }
    </script>
    <link  rel="preload" href="<?= cl_URL;?>assets/css/fontawesome.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <link rel="preload" href="<?= cl_URL;?>assets/fonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= cl_URL;?>assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= cl_URL;?>assets/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <?php if(is_front_page()){ ?>
        <link rel="preload" href="<?= cl_URL;?>assets/css/style-preload.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="preload" href="<?= cl_URL;?>assets/css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="<?= cl_URL;?>assets/css/style.min.css"></noscript>        
    <?php }?>
   
    <style type="text/css">
        .animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}a{color:#007bff;text-decoration:none;background-color:transparent}img{vertical-align:middle;border-style:none}table{border-collapse:collapse}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h5,h5{font-size:1.25rem}.small,small{font-size:80%;font-weight:400}.img-fluid{max-width:100%;height:auto}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid,.container-lg,.container-md,.container-sm,.container-xl{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-group{margin-bottom:1rem}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.fade{transition:opacity .15s linear}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);transform:translate(0,-50px)}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}}.d-none{display:none!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-md-block{display:block!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.m-0{margin:0!important}.mt-2,.my-2{margin-top:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.mt-5,.my-5{margin-top:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.p-0{padding:0!important}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}.slick-slide img{display:block}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}        
    </style>
    <script>
    function isScriptLoaded(e){return!!document.querySelector('script[src="'+e+'"]')}function emRepClick(e){sleep(50).then(()=>{document.querySelectorAll('[data-commentid="'+e+'"]')[0].dispatchEvent(new Event("click"))})}function sleep(e){return new Promise(t=>setTimeout(t,e))}document.getElementsByClassName("comment-reply-link").onclick=function(){if(!isScriptLoaded("/wp-includes/js/comment-reply.min.js")){var e=document.createElement("script");e.src="/wp-includes/js/comment-reply.min.js",e.onload=emRepClick($(this).attr("data-commentid")),document.head.appendChild(e)}};
    </script>
    	<?php wp_head(); ?>
</head>
    <body class="header-1">
<!--
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>
-->
        <header class="header header-one">
            <div class="top-header-one top-bar">
                <div class="container">
                    <div class="top-bar-inner">
                        
                        <div class="top-right">
                            <ul class="top-social">
                                <?php 
                                $fb = get_option('cl_fb');  
                                    if(!empty($fb)) :
                                ?>
                                <li><a href="<?=$fb; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif; 
                                $twitter = get_option('cl_twitter');  
                                    if(!empty($twitter)) :
                                ?>
                                <li><a href="<?=$twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php endif; 
                                $insta = get_option('cl_insta');  
                                    if(!empty($insta)) :
                                ?>
                                <li><a href="<?=$insta; ?>"><i class="fab fa-instagram"></i></a></li>
                                <?php endif; 
                                $pinterest = get_option('cl_pinterest');  
                                    if(!empty($pinterest)) :
                                ?>
                                <li><a href="<?=$pinterest; ?>"><i class="fab fa-pinterest-p"></i></a></li>
                                <?php endif; 
                                $youtube = get_option('cl_youtube');  
                                    if(!empty($youtube)) :
                                ?>
                                <li><a href="<?=$youtube; ?>"><i class="fab fa-youtube"></i></a></li>
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="top-left">
                            <ul>
                                <li> <?php $email = get_option('cl_email'); if(!empty($email)) :
                                ?> <a href="mailto:<?=$email; ?>"><?=$email; ?><i class="far fa-envelope"></i> <?php endif;?></li>
                                <li><?php $phone = get_option('cl_phone'); if(!empty($phone)) :
                                ?> <a href="tel:<?=$phone; ?>"><?=$phone; ?></a> <i class="fas fa-mobile-alt"> </i><?php endif;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.top-bar -->
            <div class="primary-header-one primary-header">
                <div class="container">
                    <div class="primary-header-inner">
                        <div class="header-logo">
                            <a href="<?php bloginfo('url'); ?>">
                                <img style="width:auto; height:70px;" data-src="<?= get_option('cl_logo_img'); ?>" alt="Logo" title="<?php bloginfo('name'); ?>"/>
                            </a>
                        </div><!-- /.header-logo -->
                        <div class="header-menu-wrap">
                      	<?php cleaning_menu(); ?>
                        </div><!-- /.header-menu-wrap -->
                        <div class="header-right">
                            <button type="button" class="btn search-icon dl-search-icon" data-toggle="modal" data-target="#exampleModal">
                              <i class="fas fa-search"></i>
                            </button>
                            <button class="btn header-btn" data-toggle="modal" data-target="#services-popup">حجز خدمة<span></span></button>
                            <!-- Burger menu -->
                            <div class="mobile-menu-icon">
                                <div class="burger-menu">
                                    <div class="line-menu line-half first-line"></div>
                                    <div class="line-menu"></div>
                                    <div class="line-menu line-half last-line"></div>
                                </div>
                            </div>
                        </div><!-- /.header-right -->
                    </div><!-- /.primary-header-one-inner -->
                </div>
            </div><!-- /.primary-header-one -->
        </header><!-- /.header-one -->
        <?php get_template_part('search_template'); ?>
        <?php get_template_part('service_template'); ?>