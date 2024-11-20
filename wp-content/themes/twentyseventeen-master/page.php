<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div class="pagehding-sec">
		<div class="pagehding-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1><?=the_title() ?></h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li><a href="#"><?=the_title() ?></a></li>
						</ul>						
					</div>					
				</div>				
			</div>
		</div>
	</div>



	<?php if(get_the_title()=='Contact Us'){
			?>
				<div class="contact-page-sec pt-100 pb-100">
			<?php
		} 
	?>
	<?php if(get_the_title()=='About'){
			?>
				<div class="about-sec pt-100 pb-100">
			<?php
		} 
	?>
	<?php if(get_the_title()=='Services'){
			?>
				<div class="service-sec pt-100 pb-100">
			<?php
		} 
	?>
	
			<div class="container">
				<div class="row">	


					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'components/page/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>




					




				</div>
			</div>
		</div>

















<?php get_footer();
