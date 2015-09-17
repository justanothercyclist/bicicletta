<!DOCTYPE HTML>
<html>
<head>
	<?php if( ! function_exists( '_wp_render_title_tag' ) ) : ?>
	<title><?php wp_title( '&raquo;', true, 'right' ); ?></title>
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>
</head>

<body>
<div id="jacbt_site_header" class="jacbt_site_header jacbt_site_header_full">
	<div id="jacbt_site_header_logo">
	
	</div>
	<h1><?php echo get_bloginfo( $show, $filter ); ?></h1>
</div>
<div id="jacbt_wrapper">
