<?php get_header();?>
<section id="intro" class="clearfix">
<div class="container d-flex h-100">
	<div class="row justify-content-center align-self-center">
    	<div class="col-lg-6 intro-info">
        	<h2><span><?php echo get_field('sec1_head');?></span></h2>
            <div class="bncont">
            	<img src="<?php echo get_field('banner-img');?>" class="img-fluid w-100">
                <p class="text-center"><?php echo get_field('banner-p');?></p>
                <!--<div class="homecontent">
                	<img src="anetseal/images/secure90x72.gif">
                    <b>|</b> <span> <i class="fa fa-phone"></i> +1-800-628-4808</span> 
				</div>-->
                <div class="indbannercont">
                	<ul>
                    	<li><a href="" target="_blank"><img src="<?php echo get_field('banner2-img');?>"></a></li>
                        <li class="last"><div class="indph"><i class="fa fa-phone"></i></div>
						<?php echo get_field('banner-number');?></li>
                    </ul>
                </div>
        	</div>
        </div>
        <div class="col-lg-5 col-md-10 offset-lg-1 intro-info">
        	<div class="form">
            	                <h2>Request your free quote now!</h2>
                <h3>Call us at +1 (800) 628-4808</h3>
              <form action="https://www.jaskauto.com/inquiry/" method="POST">
				  <input type="text"name="name">
				  <input type="text"name="email">
				  <input type="text"name="number">
				  <button type="next-step">
					  Submit
					  </button>
				</form>
                	
				
			</div>
        </div>
		
	</div>
</div>
</section>

<!-- #intro -->
<main id="main">
<!--<section>
<div class="container">
            <div class="row">
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-item nav-link active" href="https://oemautoparts.us/category/1">Wheels & Tires</a>
                    <a class="nav-item nav-link active" href="https://oemautoparts.us/category/2">Repair Parts</a>
                    <a class="nav-item nav-link active" href="https://oemautoparts.us/category/3">Axle</a>
                    <a class="nav-item nav-link active" href="https://oemautoparts.us/category/4">REAR BODY</a>
                    <a class="nav-item nav-link active" href="https://oemautoparts.us/category/5">ENGINE</a>
                </nav>
            </div>
        </div>
</section>-->
<!--about oem-->
<section class="indaboutsec">
<div class="container">
	<div class="row justify-content-between">
    	<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <h1 class="title1"><?php echo get_field('sec2-heading');?></h1>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
           <?php echo get_field('sec2-content');?> 
        </div>
    </div>
    <div class="range">
    	<h2 class="title2"><?php echo get_field('sec3-heading');?></h2>
        <div class="row justify-content-between">
			<?php
			  if( have_rows('sec3') ){
				while( have_rows('sec3') )
					{
					the_row();
					?>
        	<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="indrange">
                	<a href="" class="indrangeimg">
						<img src="<?php echo get_sub_field('img');?>" class="img-fluid"></a>
                     <div class="indrangecont">
                        <h4 class="title3">
                        	<span><?php echo get_sub_field('title1');?></span>
                        	<a href=""><?php echo get_sub_field('title2');?></a>
                            <!-- <span class="price">$1</span> -->
						</h4>
                        <div class="oemmenu1">
                        	<?php echo get_sub_field('content');?>
                        </div>
                         <a href="<?php echo get_sub_field('btn-link');?>" class="button1">
							 <?php echo get_sub_field('btn-name');?></a> 
                        </div>
             	</div>
			 </div>
			<?php }} ?>
       </div>
    </div>
    <div class="indbenefitssec">
        <div class="row justify-content-md-center">
        	<div class="col-sm-12 col-md-7 col-lg-7 col-xl-6">
            	<h1 class="title4"><?php echo get_field('sec4-headline');?></h1>
                <div class="oemmenu2">
                	<?php echo get_field('sec4-content');?>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            	<a class="image1" href="" target="_blank">
				<img src="<?php echo get_field('sec4-img');?>" alt="OEM" title="OEM" /></a>
            </div>
        </div>
    </div>	
</div>
</section>
<!--end about oem-->
<!--client-->
<section id="clients" class="indclient">
<div class="container">
	<div class="owl-carousel clients-carousel">
    	        <div class="indclientimg"><img src="http://jaskauto.com/wp-content/uploads/2022/04/icon1.png" alt=""></div>
                <div class="indclientimg"><img src="http://jaskauto.com/wp-content/uploads/2022/04/icon1.png" alt=""></div>
                <div class="indclientimg"><img src="http://jaskauto.com/wp-content/uploads/2022/04/icon3.png" alt=""></div>
                <div class="indclientimg"><img src="http://jaskauto.com/wp-content/uploads/2022/04/icon4.png" alt=""></div>
                <div class="indclientimg"><img src="images/6BD8W3MPKGDA15eCCc0A6bzcT7nPYZMiscw8S6UD.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/CWtQismeGUbTTTIukaJGEwYURNKKV6QMfOpmw1Gy.png" alt=""></div>
                <div class="indclientimg"><img src="images/oENTjxStbwVLZCOMoECV0KhZbuUnj1hzG5DIqAqa.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/KzBBuU9IuqYr1pxe8sXNoEBQobQA0RDYPhsHnDQR.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/QtccTfR2AqpBJNnNQr8gb1sFVqG8SO45WPoGKCwe.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/1vX10FnpRF7UgoKHN8H2B91KFvaA61GbTiTZeBbm.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/wgYU14zD9cmiftOkYoMHXdT3PusxKdct6wtJ87N7.jpg" alt=""></div>
                <div class="indclientimg"><img src="images/Bq3xPdS24ICRGPEprEJKHYuPkDmXt3Yb447s3gCz.jpg" alt=""></div>
        	</div>
	<p class="ptitle1"><?php echo get_field('sec5-headline');?> </p>
</div>
</section>
<!--end client-->
<!---->
<section class="indnetu">
<div class="container-fluid">
	<div class="row justify-content-between">
    	<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        	<div class="row justify-content-md-center indnetu1">
            	<div class="">
                	<div class="row justify-content-md-center">
						<?php
			  if( have_rows('sec5') ){
				while( have_rows('sec5') )
					{
					the_row();
					?>
                		<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    	<div class="indnetu1a">
                        	<img src="<?php echo get_sub_field('img');?>">
                            <?php echo get_sub_field('content');?>
                    	</div>
                    </div>
						<?php }} ?>

                	 </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
        	<div class="row justify-content-md-center">
            	<div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
                	<div class="indnetu2">
                	<h3 class="title5"><?php echo get_field('sec5-title'); ?></h3>
                    <p><?php echo get_field('sec5-content'); ?></p>
                    <a href="<?php get_field('sec5-btn-name'); ?>" target="_blank" class="button2">
						<?php get_field('sec5-btn-linke'); ?></a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</section>
<!--end-->
<section class="section1">
<div class="container">
	<h2 class="title2"><?php echo get_field('sec6-heading');?></h2>
    <div class="whychoose">
    	<ul>
			<?php
			  if( have_rows('sec6') ){
				while( have_rows('sec6') )
					{
					the_row();
					?>
        	<li>
            <div class="whychooseimg">
			<img src="<?php echo get_sub_field('img');?>" alt="OEM" title="OEM" /></div>
            <h3><?php echo get_sub_field('title');?></h3>
            <p><?php echo get_sub_field('content');?></p></li>
			<?php }} ?>
        	
        </ul>
        <button type="button" class="button3" data-toggle="modal" data-target="#myModal">
		<?php echo get_field('sec6-btn-name');?></button>
    </div>	
</div>
</section>
<div class="oempopup">
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
        	<div class="modal-body">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<?php echo get_field('sec6-content');?>
          		<button type="button" class="closebut" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>
<section class="indaboutsec">
<div class="container">
    <div class="indbenefitssec">
        <div class="row justify-content-between">
        	<div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
            	<h2 class="title4"><?php echo get_field('sec7-headline');?></h2>
                <?php echo get_field('sec7-content');?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            	<a class="image1" href="" target="_blank">
				<img src="<?php echo get_field('sec7-img');?>"alt="OEM" title="OEM" /></a>
            </div>
        </div>
    </div>	
</div>
</section>
<!--Our customers say-->
<section class="testimonials-main">
	<div class="container justify-content-center">
		<header class="section-header">
			<h3>“Our customers say…”</h3>
		</header>
		<div class="row justify-content-center">
			<div class="owl-carousel testimonials-carousel-main">
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/unnamed.png"></h4>
                            <div class="template-demo">
                            	<p>I was please to find a low mileage engine {41k} for a reasonable price through OEM.  Because it came out of a wrecked vehicle, there were two bent valves that I needed to get repaired.  OEM reimbursed me the cost for thi...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0">
								<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/unnamed.png">                                  </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">Brad Penner</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t2.png"></h4>
                            <div class="template-demo">
                            	<p>Overall good experience with this business. I ordered an NA Miata engine from them due to non-availability from other outfits. High price vs other places, but one in the hand is worth two in the bush as they say. I am ge...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0">
							<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t2.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">L F (TheHoneyBadger)</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title">
							<img src="http://jaskauto.com/wp-content/uploads/2022/04/t3.png"></h4>
                            <div class="template-demo">
                            	<p>I was in need of a transmission for my 92 Mazda.  Though the price was high, but OEM was the only place that wasn't some scam artist trying to take money from me for nothing.  I had a hard time trusting them too, but the...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0"> 
							<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t3.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">J Haynos</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t4.png"></h4>
                            <div class="template-demo">
                            	<p>I was very pleased with the service that Lisa provided. She continued to keep me informed about the process and made sure delivery was on time.
Will continue to use your site for purchases in the future. Thanks so much!!...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0"> 
							<img class="profile-pic" src="ihttp://jaskauto.com/wp-content/uploads/2022/04/t4.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">Tom and Susan Schroeter</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t5.png"></h4>
                            <div class="template-demo">
                            	<p>I paid extra to have the part overnighted (from CA to FL). I was told they should be able to get it out that same day. Despite my phone calls it was not shipped until 2 days later, and it was shipped from a place that's ...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0">
							<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t5.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">snap vlogs</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t6.png"></h4>
                            <div class="template-demo">
                            	<p>THEY HAD A AC PART FOR A 1985 CHEVY K 5 BLAZER THAT I SPENT WEEKS TRYING TO LOCATE.THERE COMPANY WAS VERY HELPFUL AND FRIENDLY THRU THE ORDERING PROCESS.VERY FAIR PRICING AND PROMPT SHIPPING IS A MAJOR REASON THAT I WOUL...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0">
							<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t6.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">WAYNE BARWICK</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t3.png"></h4>
                            <div class="template-demo">
                            	<p>So far ever they said has come to pass. Great people to work with when looking for hard to find parts.  Haven’t installed my system yet but can’t wait looks ready good.
Well I installed the command unit into my car,...</p>
							</div>
                            <hr>
                            <div class="row">
           <div class="col-sm-3 pr-0">
			   <img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t3.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">Jim Petersen</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
								<div class="item">
                	<div class="card">
                    	<div class="card-body">
                        	<h4 class="card-title"><img src="http://jaskauto.com/wp-content/uploads/2022/04/t1.png"></h4>
                            <div class="template-demo">
                            	<p>Excellent  service  team dedicated to giving 110percent of helping you to find your parts; they are even patient  enough  to walk you through  your phone even  if you don't know how to use it better  than expected used p...</p>
							</div>
                            <hr>
                            <div class="row">
                            	<div class="col-sm-3 pr-0"> 
							<img class="profile-pic" src="http://jaskauto.com/wp-content/uploads/2022/04/t1.png"> </div>
                                <div class="col-sm-9">
                                	<div class="profile">
                                    	<h4 class="cust-name mb-2">Samuel Frantom</h4>
                                        <div class="review">
                                            	 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                                 <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
							</div>
		</div>
	</div>
</section>
<!--end-->
<!--Decode Any Car VIN Here-->
<section>
<button type="button" class="vinecoderbut" data-toggle="modal" data-target="#myModal">Decode Any Car VIN Here</button>
<div class="vindecoder">
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
    	<div class="modal-content">
            <div class="modal-body">
            <div class="modal-bodybod">
            	<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<form name="decode" id="decode" target="_blank" action="http://www.decodethis.com/vin_decoded.aspx">
                	<h3>Decode Any Car VIN Here</h3>
                    <div class="text-center">
                    <input id="vin" type="text" value="" required placeholder="Lookup VIN number..." name="vin" size="13" class="oeminput1" />
                    <input type="submit" id="vinsub" value="Go!" class="oemsubmit" />
                    </div>
				</form>
                <h4>VIN Decoder</h4>
                <button type="button" class="closebutton" data-dismiss="modal">Close</button>
                </div>
        	</div>
    	</div>
	</div>
</div>
</div>
</section>
<?php get_footer();?>