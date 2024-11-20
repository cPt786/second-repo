<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/apple-touch-icon-180x180.png">

<!-- Stylesheets Start -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,600" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/animate.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/main.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/style.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/meanmenu.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/css/responsive.css">	
</head>

<body <?php body_class(); ?>>

	<!-- Preloader Start -->
	<div id="preloader">
		<div id="preloader-status"></div>
	</div>
	<!-- Preloader End -->
	<!-- Header Start -->
	<header>
		<!-- Main Menu Start -->
		<div class="hd-style1">
			<!-- Header Top Start -->
			<div class="hd-sec">
				<div class="container">
					<?php dynamic_sidebar('sidebar-5'); ?>
				</div>
			</div>
			<!-- Header Top End -->			
			<div class="mnmenu-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-12 nav-menu">
							<div class="col-md-3">
								<div class="logo">
									<a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/twentyseventeen-master/assets/img/logo2.png" alt=""/></a>
								</div>
							</div>
							<div class="col-md-9">		
								<div class="menu">
									<nav id="main-menu" class="main-menu">
										<?php //get_template_part( 'components/navigation/navigation', 'top' ); ?>
										<?php wp_nav_menu( array(
											'theme_location' => 'top',
											'menu_id'        => 'top-menu',
										) ); ?>
									</nav>								
								</div>						
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- Main Menu End -->
	</header>
	<!-- Header End -->	
