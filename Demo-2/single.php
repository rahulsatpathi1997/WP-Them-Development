<?php get_header();?>
<div class="main_content">

<!-- START SECTION BLOG -->
<div class="section bg_gray">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-12">
            	<div class="single_post">
                    <div class="blog_img">
                         <img src="<?php echo get_field('img1'); ?>">
                    </div>
                    <div class="blog_content col-lg-10 mx-auto">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ti-calendar"></i> 
							<?php $post_date = get_the_date( 'D M Y' ); echo $post_date;?></a></li>
                        </ul>
                        <h2 class="blog_title"><?php echo the_title();?></h2>
                        <div class="blog_text">
                        <?php echo the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        	
        </div>
    </div>
</div>
<!-- END SECTION BLOG -->

</div>

<?php get_footer(); ?>
