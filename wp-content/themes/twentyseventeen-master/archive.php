<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
					<h1><?php echo the_archive_title(); ?></h1>
					<ul>
						<li><a href="index-2.html">Home</a></li>
						<li><a href="#"><?php echo the_archive_title(); ?></a></li>
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


				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'components/post/content', get_post_format() );

						?>

							<div class="col-md-6 col-sm-6">	
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
														<li><span class="date-span"><i class="fa fa-calendar"></i><?php echo the_date(); ?></span></li>
														<li><a href="#"><i class="fa fa-user"></i><?php the_author(); ?></a></li>
														<li><a href="#"><i class="fa fa-pencil"></i>News</a></li>
													</ul>
												</div>					
											</div>
										</div>
									</div>				
								</div>				
							</div>

						<?php

					endwhile;

					the_posts_pagination( array(
						'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'previous' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'next' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					) );

				else :

					get_template_part( 'components/post/content', 'none' );

				endif; ?>

									
				



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
