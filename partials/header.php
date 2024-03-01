<div class="top-bar">
	<div class="row">
		<div class="large-3 columns social">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
		<div class="large-3 columns">
			<span><i class="fa fa-phone"></i> Phone: 1 800 555-5555</span>
		</div>
		<div class="large-3 columns">
			<span><i class="fa fa-envelope"></i> Email: something@something.com</span>
		</div>
		<div class="large-3 columns">
			<form>
				<input type="text" name="s" placeholder="Search...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
</div>

<header>
	<div class="row">
		<div class="large-4 columns">
			<a href="index.html"><h3><?php bloginfo('name'); ?></h3></a>
		</div>
		<div class="large-8 columns">
			<?php wp_nav_menu([
				'theme_location' => 'primary',
				'menu_class' => 'menu'
			]); ?>
		</div>
	</div>
</header>
