<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mogo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>

	<header class="header">
		<div class="container d-flex flex-row justify-content-between">
			<div class="header__logo col-md-1">
				<a href="#"><?php the_field('logo', 'option'); ?></a>
			</div>
			<div class="header__content col-md-7 d-flex flex-row justify-content-end">
				<nav class="header__menu">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'header',
						'menu_class' => 'd-flex flex-row'
					));
					?>
				</nav>
				<div class="header__shoping-card">
					<a href="#">
						<img src="<?php the_field('busket', 'option'); ?>" alt="" />
					</a>
				</div>
				<div class="header__search">
					<a href="#">
						<img src="<?php the_field('search', 'option'); ?>" alt="" />
					</a>
				</div>
				<div class="header__menu-btn">
					<div class="menu-btn-line"></div>
					<div class="menu-btn-line"></div>
					<div class="menu-btn-line"></div>
				</div>
			</div>
		</div>
	</header>