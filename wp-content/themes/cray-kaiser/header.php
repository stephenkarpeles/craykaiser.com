<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cray-kaiser
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Typekit Fonts -->
<script src="https://use.typekit.net/jix5pys.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Font Awesome font icons for Footer LinkedIn icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!--[if lt IE 9]>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/html5shiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <div class="header-wrap">

		<header id="masthead" class="site-header" role="banner">
  
    <div class="container responsive-800 responsive-logo-wrap">
			<div class="logo">
				<a href="<?php echo get_site_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo-main-white.svg" alt="Cray Kaiser"></a>
			</div>
		</div>

			<div class="wrapper">
				<div class="top-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
				</div>
				<div class="menu-button">
					<span class="menu-button-text">Menu</span>
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'=> 'flexnav' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- .wrapper -->

			<div class="home-header-block">
				<h1 class="a">Not Just Numbers People.</h1>
				<h1 class="b">People People.</h1>
				<h1 class="c">The numbers matter because of the people whose businesses and lives they affect.</h1>
				<a class="learn-more-hero" href="<?php echo get_site_url(); ?>/about/ck-team/">
					<div class="icon learn-more-hero-icon">
					  <!-- SVG Icon -->
					  <svg version="1.1" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" viewBox="0 0 160 160" xml:space="preserve">
							<g id="Calque_3">
								<g>
									<g>
										<g>
											<path id="icon-people-1" fill="#FFFFFF" d="M109.1,53.7c4.5,0,8.2-3.7,8.2-8.2c0-4.5-3.7-8.2-8.2-8.2c-4.5,0-8.2,3.7-8.2,8.2
												C100.9,50,104.6,53.7,109.1,53.7z"/>
											<path id="icon-people-2" fill="#FFFFFF" d="M117.2,57.1h-15.5c1.2,1.7,2,3.7,2,5.9v22.8c0,3.2-1.6,6.1-4,7.9v15.8c0,2.6,2.1,4.8,4.8,4.8
												c2.3,0,7,0,9.3,0c2.6,0,4.8-2.1,4.8-4.8V87.2c2.7-0.6,4.8-3.1,4.8-6V63.3C123.3,59.9,120.6,57.1,117.2,57.1z"/>
											<path id="icon-people-3" fill="#FFFFFF" d="M56.1,85.8V63c0-2.2,0.8-4.3,2-5.9H42.8c-3.4,0-6.2,2.8-6.2,6.2v17.9c0,2.9,2.1,5.4,4.8,6v22.2
												c0,2.6,2.1,4.8,4.8,4.8c2.3,0,7,0,9.3,0c2.6,0,4.8-2.1,4.8-4.8V93.9C57.8,92.1,56.1,89.1,56.1,85.8z"/>
											<path id="icon-people-4" fill="#FFFFFF" d="M50.9,53.7c4.5,0,8.2-3.7,8.2-8.2c0-4.5-3.7-8.2-8.2-8.2c-4.5,0-8.2,3.7-8.2,8.2
												C42.7,50,46.4,53.7,50.9,53.7z"/>
											<path id="icon-people-5" fill="#FFFFFF" d="M91.8,92h2c3.4,0,6.2-2.8,6.2-6.2V63c0-3.4-2.8-6.2-6.2-6.2H86H73.7H66c-3.4,0-6.2,2.8-6.2,6.2v22.8
												c0,3.4,2.8,6.2,6.2,6.2h2v3.7v25.7c0,3.4,2.8,6.2,6.2,6.2c2.6,0,8.9,0,11.5,0c3.4,0,6.2-2.8,6.2-6.2V95.7V92z"/>
											<path id="icon-people-6" fill="#FFFFFF" d="M82.9,52.1c4.1-1.3,7.1-5.1,7.1-9.6c0-5.6-4.5-10.1-10.1-10.1c-5.6,0-10.1,4.5-10.1,10.1
												c0,4.5,3,8.3,7.1,9.6c1,0.3,2,0.5,3,0.5C80.9,52.6,81.9,52.4,82.9,52.1z"/>
										</g>
									</g>
								</g>
							</g>
							<g id="Layer_2">
								<circle id="icon-people-7" fill="none" stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" cx="80" cy="80" r="77"/>
							</g>
						</svg>						
					</div><!-- .learn-more-hero-icon -->
					<h2>Learn More About Our Team</h2>
				</a><!-- .learn-more-hero -->
			</div><!-- .home-header-block -->
			
		</header><!-- #masthead -->

	</div><!-- .header-wrap -->

	<div id="content" class="site-content">