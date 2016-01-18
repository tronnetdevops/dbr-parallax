<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage DBR_Parallax
 * @since DeepBlue Revenue Parallax 0.8
 */
?><!doctype html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta name="description" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="/"><img src="/wp-content/uploads/2015/05/logo.png" class="header-logo" /></a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon">
					<a href="home.html"><span></span></a>
				</li>
			</ul>

			<section class="top-bar-section mods">
				<div class="row show-for-medium-up">
					<div class="large-12 columns">
						<a href="https://twitter.com/DeepBlueRevenue" target="_blank"><img src="/wp-content/uploads/2015/05/twitter.png" class="header-connect-icon" /></a>
						<a href="https://www.facebook.com/DeepBlueRevenue" target="_blank"><img src="/wp-content/uploads/2015/05/facebook.png" class="header-connect-icon" /></a>
						<a href="http://www.linkedin.com/company/2810223?trk=prof-0-ovw-curr_pos" target="_blank"><img src="/wp-content/uploads/2015/05/linkedin.png" class="header-connect-icon end" /></a>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns"> 
						<!-- Right Nav Section -->
						<ul class="">
							<li class="nav-menu-button"><a href="about-us/">About Us</a></li>
							<li class="nav-menu-button"><a href="clients/">Clients</a></li>
							<li class="nav-menu-button"><a href="careers/">Careers</a></li>
							<li class="nav-menu-button"><a href="contact/">Contact</a></li>
						</ul>
					</div>
				</div>
			</section>
		</nav>