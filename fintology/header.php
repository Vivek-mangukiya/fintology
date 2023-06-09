<?php
	/**
	 * The header.
	 *
	 * This is the template that displays all of the <head> section and everything up until main.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package WordPress
	 * @subpackage fintology
	 * @since fintology
	 */

	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="google-site-verification" content="PcOfS3t5fm9s8lxCaTWp1FzxD6y84ELEUZzxV2Ay0Uc" />
        <!--  <link rel="icon" type="image/png" sizes="32x32" href="<?php // echo get_template_directory_uri(); ?>/assets/images/icons/favicon-32x32.png"> -->
		<link rel="icon" type="image/png" sizes="32x32" href="https://fintology.io/wp-content/uploads/2023/05/favicon-32x32-1.png">
	    <title><?php wp_title(''); ?> Fintology</title>
       <link rel="icon" type="image/x-icon" href="https://fintology.io/wp-content/uploads/2023/05/android-chrome-512x512-1.png">
	    
	    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" />
	    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
	    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" />
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5452980549571944" crossorigin="anonymous">         </script>
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MSJPTV5');</script>
		<!-- End Google Tag Manager -->
		
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSJPTV5"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-L7ENVK1XP6"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'G-L7ENVK1XP6');
		</script>
		<!-- Hotjar Tracking Code for https://www.fintology.io -->
	   <script>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:3501072,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

	</head>

    <body onload="myLoader()">
	<div id="loader" class="w-100 h-100 position-fixed page-loader">
      <div class="d-flex align-items-center justify-content-center w-100 h-100">
        <div class="dot-loader"></div>
        <div class="dot-loader dot-loader--2"></div>
        <div class="dot-loader dot-loader--3"></div>
      </div>
    </div>
    <main>	
	<div class="position-relative <?php 
        if($_SERVER['REQUEST_URI']=="/"){ echo "main-section-wrap"; } else { echo "hero-main-mask-section-wrap"; } 
        if($_SERVER['REQUEST_URI']=="/privacy-policy/" || $_SERVER['REQUEST_URI']=="/terms-conditions/") { echo "position-relative"; } 
        if($_SERVER['REQUEST_URI']=="/coming-soon/"){ echo "coming-soon-section-wrap"; } 
        ?>">
        <!-- header start -->
        <header class="d-flex align-items-center">
            <div class="container position-relative z-1">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-lg-between header-col">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" class="img-fluid header-logo"
                                alt="" /></a>
                        <div class="d-lg-none mobile-menu-ico ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="currentColor" class="toggle-icon">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" /></svg>
                        </div>
                        <div class="menu-list d-none d-lg-block">
                            <ul class="flex-wrap align-items-center list-menu d-none d-lg-flex">
                                <li>
                                    <a href="<?php echo get_site_url(); ?>" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/"){ echo "active-page"; } ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/aboutus/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/aboutus/"){ echo "active-page"; } ?>">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/pricing/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/pricing/"){ echo "active-page"; } ?>">
                                    Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/how-it-works/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/how-it-works/"){ echo "active-page"; } ?>">How it works</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/careers/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/careers/"){ echo "active-page"; } ?>">Careers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-item-center gap-2 gap-md-3 ms-auto ms-lg-0" >
                            <a href="http://app.fintology.io/onboarding" class="primary-btn secondary-btn w-max-content" target="_blank" >Get Funding</a>                            
                            <a href="https://calendly.com/fintology/learnmore?month=2023-04" class="primary-btn w-max-content" target="_blank">Book a Demo</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-menu-wrap d-lg-none">
            <div class="close-ico d-flex align-items-center justify-content-center ms-auto cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                </svg>
            </div>
            <ul class="flex-wrap align-items-center list-menu">
                <li>
                    <a href="<?php echo get_site_url(); ?>" class="position-relative active-page <?php if($_SERVER['REQUEST_URI']=="/"){ echo "active-page"; } ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/aboutus/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/aboutus/"){ echo "active-page"; } ?>">
                        About us
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/pricing/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/pricing/"){ echo "active-page"; } ?>">
                    Pricing
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/how-it-works/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/how-it-works/"){ echo "active-page"; } ?>">How it works</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/careers/" class="position-relative <?php if($_SERVER['REQUEST_URI']=="/careers/"){ echo "active-page"; } ?>">Careers</a>
                </li>
                <!--   <a href="https://calendly.com/fintology/learnmore?month=2023-04" class="primary-btn secondary-btn w-max-content" target="_blank">Book a Demo</a> -->
            </ul>
        </div>
        <!-- header end -->
        