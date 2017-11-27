</!DOCTYPE html>
<html>
<head>
	<title> Portland </title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="main-menu">
			<div class="container">
				<div class="row">
					<div class="menu-icon col-md-3">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/menu-icon.png" />'; ?>
						<img class="logo"><?php the_custom_logo(); ?>
					</div>
					<div class="main-menu-navigation col-md-6" id="bootstrap-overrides-mainmenu">
						<?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
					</div>
					<div class="menu-cart-signin col-md-3">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/cart-icon.png" />'; ?>
						<span>Cart</span>
						<div class="purchased-items">0</div>
						<button class="signin">SIGN IN</button>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="secondary-menu">
			<div class="container">
				<div class="row">
					<div class="secondary-menu-navigation col-md-10" id="bootstrap-overrides-secmenu">
						<?php wp_nav_menu(array('theme_location' => 'secondary_menu')); ?>
					</div>
					<div class="search-menu col-md-2 text-right">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/search-icon.png" />'; ?>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</header>