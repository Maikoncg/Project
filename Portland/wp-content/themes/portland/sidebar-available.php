<?php 
	if(is_active_sidebar('sidebar-product-available')){
		dynamic_sidebar('sidebar-product-available');	
}
echo do_shortcode('[contact-form-7 id="46" title="Sidebar Available Product"]');
?>