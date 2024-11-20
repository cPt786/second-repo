<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Page Heading Section Start -->	
<div class="pagehding-sec">
	<div class="pagehding-overlay"></div>		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-heading">
					<h1>Blog Details</h1>
					<ul>
						<li><a href="index-2.html">Home</a></li>
						<li><a href="#">Blog Details</a></li>
					</ul>						
				</div>					
			</div>				
		</div>
	</div>
</div>
<!-- Page Heading Section End -->	
<!-- Blog Section Start -->
<div class="blog-classic-sec pt-100 pb-70">
	<div class="container">			
		<div class="row">								
			<div class="col-md-8">								
				<div class="media">	
					<div class="single-post">	

						<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								//get_template_part( 'components/post/content', get_post_format() );

								?>

									<div class="blog-classic-img">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt=""/>
									</div>							
									<div class="media-body">
										<div class="single-post-text">
											<h2><a href="#"><?php echo the_title(); ?></a></h2>
											<div class="post-info">
												<div class="post-meta">
													<ul>
														<li><span>post by</span><a href="#"><?php echo the_author(); ?></a></li>
														<li><span>post on</span><a href="#"><?php echo the_date(); ?></a></li>
													</ul>									
												</div>																			
											</div>	
											<p><?php echo the_content(); ?></p>									
										</div>
										<!-- <div class="post-share-link">
											<span>share</span>
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div> -->
									</div>

								<?php

								// If comments are open or we have at least one comment, load up the comment template.
								/*if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;*/

								/*the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'previous' ) ) . '</span>%title</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'next' ) ) . '</span></span>',
								) );*/

							endwhile; // End of the loop.
						?>



<?php echo do_shortcode('[contact-form-7 id="1ab73e0" title="Contact Us"]'); ?>

						
						<!-- <div class="commentar-sec">
							<h2>2 comment</h2>
							<div class="media">
							  <img class="d-flex mr-3" src="img/commentar_1.jpg" alt="">
							  <div class="media-body">
								<h3 class="comment-author">alex<span class="replay-button"><a href="#">reply</a></span></h3>
								<h4 class="comment-time">12 h ago</h4>		
								<p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed mattis, libero elit mi suscipit. A nulla venenatis  </p>    
								<div class="media mt-3">
								  <a class="d-flex pr-3" href="#">
									<img src="img/commentar_2.jpg" alt="">
								  </a>
								  <div class="media-body">
									<h3 class="comment-author">david<span class="replay-button"><a href="#">reply</a></span></h3>
									<h4 class="comment-time">11 h ago</h4>
									<p>Lorem ipsum dolor sit amet, luctus posuere semper felis consectetuer hendrerit, enim varius enim, tellus tincidunt tellus est sed mattis, libero elit mi suscipit. A nulla venenatis     </p>
								  </div>
								</div>
							  </div>
							</div>														
						</div>	 -->					
						<!-- <div class="contact-field">
							<h2>add your comment</h2>	
							<div class="col-md-12 message-input">
								<div class="single-input-field">
									<textarea  placeholder="Message"></textarea>
								</div>
							</div>									
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="text" placeholder="Your Name"/>
								</div>
							</div>							
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="single-input-field">
									<input type="email" placeholder="Your E-mail"/>
								</div>
							</div>																
							<div class="single-input-fieldsbtn">
								<input type="submit" value="send now "/>
							</div>							
						</div> -->							
					</div>				
				</div>										
			</div>




			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="search-field">
						<form action="#">
							<input placeholder="search ...." type="text">
							<button type="submit"><i class="fa fa-search"></i></button>								
						</form>	
					</div>
					<div class="widget-archive">
						<h1>news catagorise</h1>
						<ul>
							<li><a href="#">Office Security<span>21</span></a></li>
							<li><a href="#">CCTV Security<span>31</span></a></li>
							<li><a href="#">House Security<span>41</span></a></li>
							<li><a href="#">Bank Security <span>15</span></a></li>
							<li><a href="#">Parking Security <span>20</span></a></li>
							<li><a href="#">Man Security <span>25</span></a></li>
						</ul>
					</div>						
					<!-- <div class="widget-two">
						<h1>Recent Post</h1>
						<div class="all_r_pst">
							<div class="media">										
								<div class="relative-post">								
									<div class="relative-post-thumb">
										<img src="img/r1.jpg" alt=""/>
									</div>
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="blog-details.html">CCTV Security for your appartment</a></h3>
											<ul>
												<li><a href="#"><i class="fa fa-calendar"></i> 02 may 17  </a></li>
												<li><a href="#"><i class="fa fa-calendar"></i>by Admin</a></li>
											</ul>
										</div>
									</div>
								</div>				
							</div>								
							<div class="media">										
								<div class="relative-post">								
									<div class="relative-post-thumb">
										<img src="img/r2.jpg" alt=""/>
									</div>
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="blog-details.html">House Security for your appartment</a></h3>
											<ul>
												<li><a href="#"><i class="fa fa-calendar"></i> 03 may 17  </a></li>
												<li><a href="#"><i class="fa fa-calendar"></i>by Admin</a></li>
											</ul>
										</div>
									</div>
								</div>				
							</div>								
							<div class="media">										
								<div class="relative-post">								
									<div class="relative-post-thumb">
										<img src="img/r3.jpg" alt=""/>
									</div>
									<div class="media-body">
										<div class="single_r_dec">
											<h3><a href="blog-details.html">Parking Security</a></h3>
											<ul>
												<li><a href="#"><i class="fa fa-calendar"></i> 07 may 17  </a></li>
												<li><a href="#"><i class="fa fa-calendar"></i>by Admin</a></li>
											</ul>
										</div>
									</div>
								</div>				
							</div>																	
						</div>															
					</div> -->								
					<!-- <div class="widget-tag">
						<h1>keywoad</h1>
						<ul>
							<li><a href="#">Office </a></li>
							<li><a href="#">CCTV</a></li>
							<li><a href="#">Management</a></li>
							<li><a href="#">Service</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">Bank</a></li>
							<li><a href="#">Planing</a></li>
							<li><a href="#">House</a></li>
							<li><a href="#">Parking</a></li>
						</ul>
					</div> -->																										
				</div>
			</div>				
		</div>
	</div>
</div>
<!-- Blog Section End -->


<?php get_footer();
