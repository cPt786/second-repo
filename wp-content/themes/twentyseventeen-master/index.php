<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<!-- Slider Section Start -->
	<div class="slider index2">
		<div class="all-slide owl-item">	
		<?php 
			query_posts('cat=3'); 
			if (have_posts()){

				while ( have_posts() ) : the_post();   
			    
			    ?>
			    	<div class="single-slide" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
			    		<div class="slider-overlay"></div>
			    		<div class="slider-text">					
			    			<div class="slider-wraper">					
			    				<h1><?php echo the_title(); ?></h1>
			    				<p><?php echo the_content(); ?></p>
			    				<ul>
			    					<li><a href="#">Read More</a></li>
			    					<li><a href="<?php echo the_permalink('8'); ?>">Contact Us</a></li>
			    				</ul>
			    			</div>
			    		</div>
			    	</div>	
			    <?php
			    endwhile;
			}

		?>				
					
			<!-- <div class="single-slide" style="background-image:url(<?php //echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/images/slider2.jpg);">
				<div class="slider-overlay"></div>
				<div class="slider-text">						
					<div class="slider-wraper">					
						<h1>We Provide <span>Verified & Secured</span> Service for company</h1>
						<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet, nisl imperdiet nec ad morbi, sodales ipsum, consequat purus vitae integer maecenas.</p>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Read More</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="single-slide" style="background-image:url(<?php //echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/images/slider3.jpg);">
				<div class="slider-overlay"></div>
				<div class="slider-text">						
					<div class="slider-wraper">					
						<h1>We Provide <span>Verified & Secured</span> Service for company</h1>
						<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet, nisl imperdiet nec ad morbi, sodales ipsum, consequat purus vitae integer maecenas.</p>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Read More</a></li>
						</ul>
					</div>
				</div>
			</div> -->	
		</div>	
	</div>
	<!-- Slider Section End -->	
	<!-- About Start -->
	<div class="about-sec pt-100 pb-100">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-7">
					<div class="about-desc">
						<div class="sec-title">
							<h1><span>About </span>Our Company</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>						
						</div>	
						<div class="about-countup">
							<div class="counting-inner">
								<div class="countup-text">
									<h2 class="counter">250</h2>
									<h4>Project Done</h4>						
								</div>
							</div>						
							<div class="counting-inner">
								<div class="countup-text">
									<h2 class="counter">280</h2>
									<h4>happy client</h4>						
								</div>
							</div>							
							<div class="counting-inner">
								<div class="countup-text">
									<h2 class="counter">240</h2>
									<h4>Our employees</h4>						
								</div>
							</div>						
						</div>
					</div>	
				</div>	
				<div class="col-md-5">
					<div class="about-us-img">
						<img src="<?php //echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/about.jpg" alt=""/>
					</div>
				</div> -->	

				<?php dynamic_sidebar('sidebar-4'); ?>

			</div>
		</div>		
	</div>
	<!-- About End -->		
	<!-- Why Choose Us Start -->
	<?php /* ?>
	<div class="why-choose why-choos-bg">
		<div class="container">			
			<div class="row">	
				<div class="col-md-6"></div>
				<div class="col-md-6 why-choose-us-before">	
					<div class="sec-title">
						<h1><span>Why</span> Choose Us</h1>
					</div>				
					<div class="col-md-6 col-sm-6">
						<div class="why-choose-item">
							<div class="media">
							  <div class="why-choose-icon">
								<a href="#">
								 <img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/icon/customer.png" alt=""/>
								</a>
							  </div>
							  <div class="media-body">
								<h2><a href="#">24/7 Support</a></h2>
								<p>Simply dummy text of the printing andrety esetting industry.Lorem ipsum dolor sit amet, ligula magna at etiam.</p>
							  </div>
							</div>
						</div>				
					</div>				
					<div class="col-md-6 col-sm-6">
						<div class="why-choose-item">
							<div class="media">
							  <div class="why-choose-icon">
								<a href="#">
								 <img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/icon/employee.png" alt=""/>
								</a>
							  </div>
							  <div class="media-body">
								<h2><a href="#">Expert Employees</a></h2>
								<p>Simply dummy text of the printing andrety esetting industry.Lorem ipsum dolor sit amet, ligula magna at etiam.</p>
							  </div>
							</div>
						</div>							
					</div>							
					<div class="col-md-6 col-sm-6">
						<div class="why-choose-item">
							<div class="media">
							  <div class="why-choose-icon">
								<a href="#">
								 <img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/icon/locked.png" alt=""/>
								</a>
							  </div>
							  <div class="media-body">
								<h2><a href="#">Verified Service</a></h2>
								<p>Simply dummy text of the printing andrety esetting industry.Lorem ipsum dolor sit amet, ligula magna at etiam.</p>
							  </div>
							</div>
						</div>
					</div>				
					<div class="col-md-6 col-sm-6">
						<div class="why-choose-item">
							<div class="media">
							  <div class="why-choose-icon">
								<a href="#">
								 <img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/icon/lock.png" alt=""/>
								</a>
							  </div>
							  <div class="media-body">
								<h2><a href="#">Secured Service</a></h2>
								<p>Simply dummy text of the printing andrety esetting industry.Lorem ipsum dolor sit amet, ligula magna at etiam.</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div> 
	<?php */ ?>
	<!-- Why Choose Us End -->		
	<!-- Service Start -->	
	<div class="service-sec pt-100 pb-100">
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sec-title">
						<h1>Our <span>Services </span></h1>
						<p>Lorem ipsum dolor sit amet, pellentesque enim lorem quis vivamus amet.</p>
					</div>
				</div>
			</div>	

			<div class="row">			
				<div class="service-item">
					

					<?php 
						query_posts('cat=5'); 
						if (have_posts()){

							while ( have_posts() ) : the_post();   
						    
						    ?>
						    	
						    	<div class="col-md-4 col-sm-6">
						    		<div class="service-inner">
						    			<div class="service-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>'); background-size: cover; background-position: center center;">
						    			</div>						
						    			<div class="service-details">						
						    				<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
						    				<p><?php echo the_excerpt(); ?></p>
						    			</div>							
						    		</div>							
						    	</div>


						    <?php
						    endwhile;
						}

					?>


					<!-- <div class="col-md-4 col-sm-6">
						<div class="service-inner">
							<div class="service-img" style="background-image: url('<?php //echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/g2.jpg'); background-size: cover; background-position: center center;">
							</div>						
							<div class="service-details">						
								<h2><a href="service-details.html">CCTV Security</a></h2>
								<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis.</p>
							</div>							
						</div>							
					</div>-->																							
				</div>							
			</div>
		</div>		
	</div>		
	<!-- Service End -->			
	<!-- Testimonial Section Start -->
	<div class="testimonial-sec pt-100 pb-100">
		<div class="container">				
			<div class="row">
				<div class="col-md-4">
					<div class="testimonial-text">
						<span class="tst-sbtitle">What's say about our client</span>	
						<div class="sec-title">
							<h1><span>Client</span> Review</h1>
						</div>	
						<p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed enim varius enim, tellus tincidunt tellus est sed </p>
						<a href="#">See All</a>
						
					</div>
				</div>
				<div class="col-md-8 no-padding">
					<div class="all-testimonial2">
						<div class="single-testimonial2">							
							<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.</p>
							<div class="testimonial2">
								<div class="inner">
									<div class="client-info">
										<h2>David Max</h2>
										<h3>Ceo & Founder</h3>								
									</div>	
								</div>							
								<div class="inner">
									<div class="testimonial2-client-img">
										<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/testimonial1.jpg" alt=""/>
									</div>								
								</div>	
							</div>								
						</div>						
						<div class="single-testimonial2">							
							<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.</p>
							<div class="testimonial2">
								<div class="inner">
									<div class="client-info">
										<h2>David Max</h2>
										<h3>Ceo & Founder</h3>								
									</div>	
								</div>							
								<div class="inner">
									<div class="testimonial2-client-img">
										<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/testimonial2.jpg" alt=""/>
									</div>								
								</div>	
							</div>								
						</div>						
						<div class="single-testimonial2">							
							<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.</p>
							<div class="testimonial2">
								<div class="inner">
									<div class="client-info">
										<h2>David Max</h2>
										<h3>Ceo & Founder</h3>								
									</div>	
								</div>							
								<div class="inner">
									<div class="testimonial2-client-img">
										<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/testimonial3.jpg" alt=""/>
									</div>								
								</div>	
							</div>								
						</div>																										
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End -->		
		
	<!-- Team Section Start -->		
	<div class="team-sec pt-100 pb-70">	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sec-title">
						<h1><span>Our Expert </span>Employees</h1>
						<p>Lorem ipsum dolor sit amet, pellentesque enim lorem quis vivamus amet.</p>
					</div>
				</div>
			</div>		
			<div class="row">		
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb">
							<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/tm.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Adalberto</h2>
						<h3>Office Security</h3>						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb">
							<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/tm2.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Alejandro</h2>
						<h3>House Security</h3>						
					</div>
				</div>					
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb">
							<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/tm3.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Ambrose</h2>
						<h3>Bank Security</h3>						
					</div>
				</div>	
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="team-member">
						<div class="team-thumb">
							<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/tm4.jpg" alt=""/>
							<div class="team-overlay">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
								</ul>							
							</div>							
						</div>
						<h2>Arnoldo</h2>
						<h3>Parking Security </h3>						
					</div>
				</div>																			
			</div>			     
		</div>	
	</div>	
	<!-- Team Section End -->		
	<!-- Appointment Area Start-->
	<div class="appoitment-area">
		<div class="images-overlay"></div>
		<div class="container">			
			<div class="row">	
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php dynamic_sidebar('sidebar-6'); ?>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="appointment-form">		
						<h2>Get A Quote</h2>
						<?php echo do_shortcode('[contact-form-7 id="54ebea0" title="get a quote"]'); ?>
					</div>
				</div>				
			</div>					
		</div>
	</div>	
	<!-- Appointment Area End -->	
	<!-- Blog Section Start -->
	<div class="blog-sec pt-100 pb-80">
		<div class="container">	
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sec-title">
						<h1><span>Recent</span> News</h1>
						<p>Lorem ipsum dolor sit amet, pellentesque enim lorem quis vivamus amet.</p>
					</div>
				</div>
			</div>			
			<div class="row">	

				<?php 
					query_posts('cat=4'); 
					if (have_posts()){

						while ( have_posts() ) : the_post();   
					    
					    ?>
					    	

					    	<div class="col-md-4 col-sm-6">	
					    		<div class="media">	
					    			<div class="single-post">	
					    				<div class="blog-thumb">
					    					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt=""/>
					    					<a href="<?php echo the_permalink(); ?>">Read More</a>
					    				</div>											
					    				<div class="media-body">
					    					<div class="single-post-desc">									
					    						<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
					    						<p><?php echo the_excerpt(); ?></p>
					    						<div class="post-date">
					    							<ul>
					    								<li><a href="#"><i class="fa fa-calendar"></i><?php echo the_date(); ?></a></li>
					    								<li><a href="#"><i class="fa fa-user"></i><?php the_author(); ?></a></li>
					    								<li><a href="#"><i class="fa fa-pencil"></i><?php echo the_category(); ?></a></li>
					    							</ul>
					    						</div>					
					    					</div>
					    				</div>
					    			</div>				
					    		</div>				
					    	</div>






					    <?php
					    endwhile;
					}

				?>



									
				<!-- <div class="col-md-4 col-sm-6">	
					<div class="media">	
						<div class="single-post">	
							<div class="blog-thumb">
								<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/g2.jpg" alt=""/>
								<a href="blog-details.html">Read More</a>
							</div>											
							<div class="media-body">
								<div class="single-post-desc">									
									<h2><a href="blog-details.html">Post Title Will Be Here</a></h2>
									<p>Lorem ipsum dolor sit amet, vitae mattis vehicula scelerisque suscipit donec, tortor duis phasellus vivamus wisi</p>
									<div class="post-date">
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i>24 May 2017</a></li>
											<li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
											<li><a href="#"><i class="fa fa-pencil"></i>News</a></li>
										</ul>
									</div>					
								</div>
							</div>
						</div>				
					</div>				
				</div>					
				<div class="col-md-4 col-sm-6">	
					<div class="media">	
						<div class="single-post">	
							<div class="blog-thumb">
								<img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/g3.jpg" alt=""/>
								<a href="blog-details.html">Read More</a>
							</div>											
							<div class="media-body">
								<div class="single-post-desc">									
									<h2><a href="blog-details.html">Post Title Will Be Here</a></h2>
									<p>Lorem ipsum dolor sit amet, vitae mattis vehicula scelerisque suscipit donec, tortor duis phasellus vivamus wisi</p>
									<div class="post-date">
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i>24 May 2017</a></li>
											<li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
											<li><a href="#"><i class="fa fa-pencil"></i>News</a></li>
										</ul>
									</div>					
								</div>
							</div>
						</div>				
					</div>				
				</div>	 -->			
				
			</div>
		</div>
	</div>
	<!-- Blog Section End -->

<?php get_footer();
