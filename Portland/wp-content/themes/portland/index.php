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
					<div class="product-information text-center">
						<?php 
							for($i = 1; $i <= 1; $i++)

							if(have_posts()) :
								while(have_posts()) : the_post();
						?>
						<?php
							echo "<div class='product-box'>";
							the_content(); 
							echo "</div>";
						?>
						<?php 
							endwhile;
							endif;
							echo "<div class='product-box-merged'>";	
						    echo "</div>";
						?>
					</div>
				</div>
			</div>
			<div class="navigation-page-bar text-center col-md-12">
					<?php 
						the_posts_pagination(array(
							'mid_size'				=> 10,
							'prev_text'				=> ' ',
							'next_text'			    => ' ',
							'screen_reader_text'	=> ' '
						));
					?>
			</div>
			<div class="best-sellers-box text-center col-md-12">
				<h1>Best Sellers</h1>
				<hr>
				<div class="best-sellers-list">
					<div class="best-seller">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/beanie.png">'; ?>
						<h2>Beanie</h2>
						<span>Green</span>
						<h3>£39.99</h3>
						<h4>£29.99</h4>
					</div>
					<div class="best-seller">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/t-shirt.png">'; ?>
						<h2>T-Shirt With a Print</h2>
						<span>Dark Blue</span>
						<h3>£29.99</h3>
						<h4>£19.99</h4>
					</div>
					<div class="best-seller">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/hooded-jacket.png">'; ?>
						<h2>Pile-Lined Hooded Jacket</h2>
						<span>Dark Blue</span>
						<h3>£49.99</h3>
						<h4>£39.99</h4>
					</div>
					<div class="best-seller">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/trainers.png">'; ?>
						<h2>Trainers</h2>
						<span>Space Grey</span>
						<h3>£39.99</h3>
						<h4>£29.99</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

	<div class="testimoials col-md-12 text-center">
		<h1>What Our Customers Have to Say</h1>
		<h2>Couple of Words Aboutr This Stories Section</h3>
		<div class="opinion text-left">
			<img src="">
			<h3>Celia Fields</h3>
			<h4>UX Expert</h4>
			<span>This I have produced as a scantling of Jack's great eloquence and the force of his reasoning upon such abstruse matters.</span>
		</div>
		<div class="opinion text-center">
			<img src="">
			<h3>Alexander Lee</h3>
			<h4>Founder</h4>
			<span>Looking cautiously round, to ascer-tain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartly.</span>
		</div>
		<div class="opinion text-right">
			<img src="">
			<h3>Lenora Sandoval</h3>
			<h4>Product Manager</h4>
			<span>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!'. she said.</span>
		</div>
	</div>

<?php get_footer(); ?>