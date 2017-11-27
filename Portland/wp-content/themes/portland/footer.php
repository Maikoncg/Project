	<footer class="footer col-md-12">
		<div class="container">
			<div class="row">
				<div class="footer-informations">
					<div class="footer-logo">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/footer-logo.png" />'; ?>
					</div>
					<div class="footer-menu-navigation" id="bootstrap-overrides-footer">
						<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
					</div>
					<div class="social-media">
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/twitter-icon.png" />'; ?>
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/facebook-icon.png" />'; ?>
						<img><?php echo '<img src="' . get_bloginfo('template_directory') . '/img/googleplus-icon.png" />'; ?>
					</div>
				</div>
				<hr>
				<div class="dedication">
					<span>She gave my mother such a turn, that i always been convinced I am indebted to Miss</span>
					<span>Betsey for having been on a Friday.</span>
				</div>
				<div class="terms">
					<p>Privacy Policy</p>
					<p>Terms and Conditions</p>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>