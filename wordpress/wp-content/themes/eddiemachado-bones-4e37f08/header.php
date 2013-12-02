<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<?php // or, set /favicon.ico for IE10 win ?>
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

			<?php // wordpress head functions ?>
			<?php wp_head(); ?>
			<?php // end of wordpress head ?>

			<?php // drop Google Analytics Here ?>
			<?php // end analytics ?>
			<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
			<link rel="stylesheet" type="text/css" href="<? echo FILES;?>/style.css">
			<link rel="stylesheet" type="text/css" href="<? echo FILES;?>/library/css/style.css">
			<link rel="stylesheet" href="<? echo FILES;?>/library/css/jquery.fancybox.css" type="text/css" media="screen" />
			<link href="<? echo FILES;?>/library/css/bootstrap.min.css" rel="stylesheet">
			<link href="<? echo FILES;?>/library/css/bootstrap.css" rel="stylesheet">
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type="text/javascript" src="<? echo FILES;?>/library/js/jquery.cycle2.js"></script>
			<script type="text/javascript" src="<? echo FILES;?>/library/js/jquery.fancybox.pack.js"></script>
			<script type="text/javascript" src="<? echo FILES;?>/library/js/scripts.js"></script>
		</head>

		<body>
			<nav role="navigation" id="main_nav">
				<!-- <? // php bones_main_nav(); ?> -->
				<img src="<?=FILES ?>/library/images/behanceheader.jpg">
			</nav>


