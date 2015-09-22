<!DOCTYPE HTML>
<html>
<head>
	<?php if( ! function_exists( '_wp_render_title_tag' ) ) : ?>
	<title><?php wp_title( '&raquo;', true, 'right' ); ?></title>
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'jacbt_body' ); ?> style="background-color: <?php echo get_theme_mod( 'jacbt_color_bodybg', '#888888' ) ?>;" >
<div id="jacbt_site_header" class="jacbt_site_header jacbt_site_header_full" style="
	background-color: <?php jacbt_hex_to_rgba( get_theme_mod( 'jacbt_color_headbg', '#FFFFFF' ), get_theme_mod( 'jacbt_header_opac', '0.8' ) ); ?>;" >
	<a href="<?php echo get_site_url(); ?>">
		<div id="jacbt_site_header_logo"></div>
	</a>
	<div class="jacbt_title_block">
    	<h1 class="jacbt_header_title" style="color: <?php echo get_theme_mod( 'jacbt_color_headtxt', '#000000'); ?>"><?php 
    	  if ( get_theme_mod( 'jacbt_display_blogname', True) ) {
    	    echo get_bloginfo( 'name' ); 
    	  }?></h1>
    	<h3 class="jacbt_header_tagline" style="color: <?php echo get_theme_mod( 'jacbt_color_headtxt', '#000000'); ?>"><?php
    	  if ( get_theme_mod( 'jacbt_display_tagline', True) ) {
        	  if ( get_theme_mod( 'jacbt_dynamic_tagline', True) && is_single() ) {
        	    echo jacbt_truncate_string( single_post_title( '', FALSE ), 60 );
        	  } else {
        	    echo get_bloginfo( 'description' );
        	  } 
    	  }
  	  ?></h3>
	</div>
    <?php 
      get_header(); 
      if ( has_nav_menu( 'jacbt_menu_header' ) ) {
        wp_nav_menu( array( 'theme_location' => 'jacbt_menu_header', 'container_class' => 'jacbt_menu_header' ) );
      }
    ?>
	<span class="breaker-breaker"></span>
</div>
<div id="jacbt_wrapper">
