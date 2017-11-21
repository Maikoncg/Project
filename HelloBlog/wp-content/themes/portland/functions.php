<?php 

function load_scripts(){
	// Enfileirando Boostrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
	// Enfileirando estilos próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);	

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


register_nav_menus(
	array(
		'main_menu'			=>	'Main Menu',
		'secondary_menu'	=>	'Secondary Menu',
		'footer_menu'		=>	'Footer Menu'
	)
);

add_theme_support('custom-logo');
add_theme_support('html5', array('search-form'));