<?php
/* Template Name: Product */
get_header();
 ?>
 
<section> 
 <div class="pmwh banner">
    <img src="<?php echo get_field('sec1_banner'); ?>" alt="KRAFTROOM" title="KRAFTROOM">
    <div class="pmwh bannercont">
    	<div class="container">
			<h3 align="center"><b><?php echo get_field('sec1_head'); ?></b></h3>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>