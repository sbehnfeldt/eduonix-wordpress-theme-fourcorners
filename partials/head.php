<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> | <?php is_front_page()? bloginfo('description') : wp_title(''); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/foundation.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/hover.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
