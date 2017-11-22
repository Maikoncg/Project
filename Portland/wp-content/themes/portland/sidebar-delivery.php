<?php 
	if(is_active_sidebar('sidebar-product-delivery')){
		dynamic_sidebar('sidebar-product-delivery');	
}
echo do_shortcode('[contact-form-7 id="48" title="Sidebar Product Delivery"]');
?>