<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!-- Footer Section Start -->
<footer>	
	<!-- Footer Top Section Start -->
	<!-- <div class="footer-sec">
		<div class="container">
			<div class="row">				
				<div class="col-md-3 col-sm-6">
					<div class="footer-wedget-one">
						<a href="index-2.html"><img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/logo.png" alt=""/></a>
						<p>Lorem ipsum dolor sit amet, nulla fermentum, mollis ac lectus nulla, vel neque, risus non nunc duis lectus, ac id porttitor vulputate donec sed.nulla fermentum, mollis ac lectus nulla, vel neque</p>					
						<div class="footer-social-profile">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
							</ul>
						</div>							
					
					</div>
				</div>											
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget-menu">
						<h2>Service links</h2>
						<ul>
							<li><a href="#">Office Security</a></li>
							<li><a href="#">CCTV Security</a></li>
							<li><a href="#">House Security</a></li>
							<li><a href="#">Bank Security</a></li>
							<li><a href="#">Parking Security </a></li>
							<li><a href="#">Man Security</a></li>
						</ul>
					</div>
				</div>	
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget-menu">
						<h2>Support links</h2>
						<ul>
							<li><a href="#">support link</a></li>
							<li><a href="#">faq & help center</a></li>
							<li><a href="#">about us</a></li>
							<li><a href="#">Create Account</a></li>
							<li><a href="#">service and help</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>	
				</div>		
				<div class="col-md-3 col-sm-6">
					<div class="footer-wedget-four">
						<h2>contact us </h2>
							<div class="inner-box">
								<div class="media">
									<div class="inner-item">
										<div class="media-left">
											<span class="icon"><i class="fa fa-map-marker"></i></span>
										</div>				
										<div class="media-body">
											<span class="inner-text">71 Pilgrim Avenue Chevy Chase, MD 20815</span>
										</div>											
									</div>					
								</div>								
								<div class="media">
									<div class="inner-item">
										<div class="media-left">
											<span class="icon"><i class="fa fa-envelope-o"></i></span>
										</div>				
										<div class="media-body">
											<span class="inner-text">yourmail@gmail.com, info@securepress.com</span>
										</div>											
									</div>					
								</div>								
								<div class="media">
									<div class="inner-item">
										<div class="media-left">
											<span class="icon"><i class="fa fa-phone"></i></span>
										</div>				
										<div class="media-body">
											<span class="inner-text">+880 256794, 24-2564687</span>
										</div>											
									</div>					
								</div>											
							</div>							
					</div>
				</div>								
			</div>
		</div>
	</div>
	<div class="footer-bottom-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copy-right">
						<p>&copy; Copyright © 2024 <span>Every time secure service</span>  - All Rights Reserved.</p>
					</div>
				</div>					
			</div>
		</div>
	</div> -->

		<?php dynamic_sidebar('sidebar-3'); ?>

		<!-- Footer Top Section End -->
</footer>
<!-- Footer Section End -->

<?php wp_footer(); ?>
	<!-- Scripts Js Start -->
    <script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/owl.animate.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/modernizr.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/wow.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/waypoints.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery.meanmenu.min.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/jquery.sticky.js"></script>
	<script src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/js/custom.js"></script>
	<!-- Scripts Js End -->	
</body>
</html>
