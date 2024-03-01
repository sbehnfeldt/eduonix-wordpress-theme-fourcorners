 <?php
// Theme Support
 function fc_theme_support() {
	 // Add Featured Image Support
	 add_theme_support('post-thumbnails');
	 add_image_size('home-thumb', 715, 449);

	 // Nav Menus
	 register_nav_menus([
		 'primary' =>__('Primary Menu')
	 ]);
 }

 add_action( 'after_setup_theme', 'fc_theme_support');

