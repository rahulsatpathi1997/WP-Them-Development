<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Jask Autoparts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Google Fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
<!-- Bootstrap CSS File -->
<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Libraries CSS Files -->
<link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/assets/css/ionicons.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/assets/css/lightbox.min.css" rel="stylesheet">
<!--<link href="https://oemautoparts.us/asset/lib/lightbox/css/jquery.fancybox.min" rel="stylesheet">-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css">
<!-- Main Stylesheet File -->
<link href="<?php bloginfo('template_url'); ?>/assets/css/style1.css" rel="stylesheet">
<style>
h1, h2, h3, h4, h5, h6 {margin: 0 0 5px 0;}
.eml-address {margin: 25px 0px;}
#header .logo img{max-height:50px;}
.mobilephone{display: none;}
#footer .footer-top h4 {padding-bottom: 0px; margin: 5px auto;}
@media  screen and (max-width: 600px) {
marquee {display: none;}
.mobilephone {display: -webkit-inline-box; float: right; margin: 28px 35px auto;}
.mobilephone i {font-size: 40px; margin: 0px 22px;}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!---->
<marquee style="background:#FFAC00; margin: -3px auto">
<?php the_field('top-header-content', 'option'); ?>
</marquee>
<header id="header">
<div class="container">
    <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light">
            <a href="http://jaskauto.com/" class="scrollto">
                <span><img src="<?php the_field('header-logo', 'option'); ?>" alt="" class="img-fluid"></span>
            </a>
            </h1>
    </div>
   <a class="mobilephone" href="tel:1-800-628-4808">
<i class="fa fa-phone"></i>
            </a> 
    <nav class="main-nav float-right d-none d-lg-block">
        <?php
				    wp_nav_menu( array(
					'theme_location' => 'primary',
					//'menu' => 'Primary menu',
					'container' => 'ul',
					'menu_class'=> 'menuasd'
				 ) );
				?>
    </nav>
</div>
</header>