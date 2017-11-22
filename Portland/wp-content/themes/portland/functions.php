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

if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'			=> 'Sidebar Product Feature',
			'id'			=> 'sidebar-product-feature',
			'description'	=> 'Sidebar product features in page home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>'			
		)
	);

	register_sidebar(
		array(
			'name'			=> 'Sidebar Product Available',
			'id'			=> 'sidebar-product-available',
			'description'	=> 'Sidebar product available in page home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>'			
		)
	);
	register_sidebar(
		array(
			'name'			=> 'Sidebar Product Condition',
			'id'			=> 'sidebar-product-condition',
			'description'	=> 'Side product condition in page home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>'		
		)
	);
	register_sidebar(
		array(
			'name'			=> 'Sidebar Product Delivery Options',
			'id'			=> 'sidebar-product-delivery',
			'description'	=> 'Sidebar product delivery options in page home',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>'			
		)
	);
}
?>