<?php 
if(is_active_sidebar('sidebar-product-feature')){
	dynamic_sidebar('sidebar-product-feature');	
}
echo do_shortcode('[contact-form-7 id="45" title="Sidebar Product Feature"]');
?>