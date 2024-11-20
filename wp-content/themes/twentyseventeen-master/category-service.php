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


<!-- Service Start -->	
<div class="service-sec pt-100 pb-100">
	<div class="container">		
		<div class="row">			
			<div class="service-item">


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

					the_posts_pagination( array(
						'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'previous' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'next' ) ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
					) );

				else :

					get_template_part( 'components/post/content', 'none' );

				endif; ?>







			</div>							
		</div>
	</div>		
</div>		
<!-- Service End -->
























	

<?php get_footer();
