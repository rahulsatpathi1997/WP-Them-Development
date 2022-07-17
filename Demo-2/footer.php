<footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container mb-4">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-info">
                            <img src="<?php the_field('footer-logo', 'option'); ?>" class="img-fluid pb-3">
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <?php the_field('footer-map', 'option'); ?>
                            </div>
                            <div class="col-lg-6 justify-content-end align-self-end mb-3 mb-lg-0">
                                <div class="footer-address">
                                    <h4 class="m-0">ADDRESS </h4>
                                    <p class="m-0"><?php the_field('adress'); ?></p>
                                </div>
                                <div class="footer-address">
                                    <br>
                                        <h4>FAX</h4>
                                        <p><?php the_field('faxno', 'option'); ?></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    	<div class="fmenu1">
                        	<h4>Resources</h4>
                        	<ul>
                            	<?php
				    				wp_nav_menu( array(
									'menu' => 'Footer Menu2',
				 					) );
								?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 border-0 border-lg-right">
                        <div class="row">
                            <div class="col-6 justify-content-end align-self-end mb-3 mb-lg-0">
                                <div class="footer-newsletter pt-3" style="margin: -25px 0px;">
                                    <div class="mb-3" style="margin: 15px 0px;">
                                        <h4>CALL US NOW</h4>
                                        <p><?php the_field('footer-number', 'option'); ?></p>
                                       <p><?php the_field('footer-number2', 'option'); ?></p>
										<p><?php the_field('footer-number3', 'option'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 justify-content-end align-self-end mb-3 mb-lg-0">
                                        <div class="eml-address">
                                            <h4>EMAIL US</h4>
                                            <p><?php the_field('email', 'option'); ?></p>
                                        </div>
                                <div class="social-links">
                                    <a href="<?php the_field('twitter', 'option'); ?>" class="twitter">
										<i class="fa fa-twitter"></i></a>
                                    <a href="<?php the_field('facebook', 'option'); ?>" class="facebook">
										<i class="fa fa-facebook"></i></a>
                                    <a href="<?php the_field('instagram', 'option'); ?>" class="instagram">
									<i class="fa fa-instagram"></i></a>
                                    <a href="<?php the_field('linkedin', 'option'); ?>" class="linkedin">
									<i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-3 pl-lg-5">
                        <div class="row">
                            <div class="col-sm-4 col-6 mb-3 mb-lg-0">
                                <div class="footer-links">
                                    <h4 class="m-0">TNC & POLICIES</h4>
                                    <ul>
									<?php
				    					wp_nav_menu( array(
										'menu' => 'Footer Menu1',
				 							) );
											?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6 mb-3 mb-md-0">
                                <div class="footer-links">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="signin.html">Sign In</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                        <li><a href="shop.html">Products</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="footer-links">
                                <h4>SEAL OF TRUST</h4>
                                    <div class="social-links">
                                        <a href="" class="twitter">
                                      <img height="60" src="<?php the_field('img1', 'option'); ?>"/>
                                        </a>
                                    <a  class="twitter">
										<img height="30" src="<?php the_field('img2', 'option'); ?>"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-3">
                <div class="col-lg-12 d-md-flex d-block justify-content-between border-top">
                </div>
            </div>
        </div>
    </footer><!-- #footer -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    <!-- JavaScript Libraries -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-migrate.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/mobile-nav.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/counterup.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/test.js"></script>
   <!-- <script src="https://oemautoparts.us/asset/lib/lightbox/js/jquery.fancybox.min.js"></script>-->
    <!-- Contact Form JavaScript File -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/contactform.js"></script>
    <!-- Template Main Javascript File -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>
<script>
    $("#year").change(function() {
        let year = $(this).val();
        $.ajax({
            url: "https://oemautoparts.us/getmake/" + year,
            success: function(result) {
                $("#make").html(result);
                $("#make").focus();
            }
        });
    });
    $("#make").change(function() {
        let make = $(this).val();
        let year = $("#year").val();
        $.ajax({
            url: "https://oemautoparts.us/getmodel/" + make + '/' + year,
            success: function(result) {
                $("#model").html(result);
                $("#model").focus();
            }
        });
    });
    $("#model").change(function() {
        let model = $(this).val();
        let make = $("#make").val();
        let year = $("#year").val();
        $.ajax({
            url: "https://oemautoparts.us/getpart/" + make + '/' + year + '/' + model,
            success: function(result) {
                $("#part").html(result);
                $("#part").focus();
            }
        });
    });
</script>
<script>
    $(".testimonials-carousel-main").owlCarousel({
        autoplay: true,
        dots: true,
        nav: false,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });
</script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "a95kiiz1zb");
</script>
<!-- Global site tag (gtag.js) - Google Ads: 561217773 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-561217773"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-561217773');
</script>