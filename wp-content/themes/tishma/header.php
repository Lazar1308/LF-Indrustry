<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tishma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/Screenshot_5.png' ?>" alt="Logo">
			<nav class="navbar navbar-light bg-light">
				<div class="navbar navbar-brand">
					<h2 class="logo-title">TISHMA</h2>
					<p class="logo-subtitle">TECHNOLOGIES</p>
				</div>
			</nav>

			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">MACHINES<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">MARKETS<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">PRODUCT TYPE<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">ABOUT US<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">NEWS<span class="sr-only">(current)</span></a>
					</li>
					<a href="" id="quote">Get a Qoute</a>
			</div>
		</nav>