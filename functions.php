 <?php
// Theme Support
 function fc_theme_support() {
	 // Nav Menus
	 register_nav_menus([
		 'primary' =>__('Primary Menu')
	 ]);
 }

 add_action( 'after_setup_theme', 'fc_theme_support');

