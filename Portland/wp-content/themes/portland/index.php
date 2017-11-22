<?php get_header(); ?>	

<!-- <div class="slider">Slider</div> -->
<main>
	<div class="container">
		<div class="row">
			<div class="sort-by col-md-12">
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
			</div>
			<div class="box-sidebar-content">
				<div class="sidebars col-md-3">
					<div class="sidebar-product-feature">
						<?php get_sidebar('feature'); ?>
					</div>
					<div class="sidebar-product-available">
						<?php get_sidebar('available'); ?>
					</div>	
					<div class="sidebar-product-condition">
						<?php get_sidebar('condition'); ?>
					</div>
					<div class="sidebar-product-delivery">
						<?php get_sidebar('delivery'); ?>
					</div>
				</div>
				<div class="content-products col-md-9">
				
				</div>
			</div>

			<!--
			
			<div class="page-navigation-bar">Troca de páginas</div>
			<div class="best-sellers">Melhores Vendas</div>
			<div class="opinions">Opiniões</div>
			-->
		</div>
	</div>
</main>

<?php get_footer(); ?>