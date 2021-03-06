<?php 
function jacbt_render_customizations() {   
?>
<style>
body{background-color:<?php echo get_theme_mod( 'jacbt_color_bodybg', '#888888' ) ?>;color:<?php echo get_theme_mod( 'jacbt_color_body', '#000000' ) ?>;}
<?php if ( get_theme_mod( 'jacbt_fixed_width', False ) ) {
	$jacbt_main_width = get_theme_mod( 'jacbt_content_width', 800 ) + get_theme_mod( 'jacbt_gutter_width', 10 ) + get_theme_mod( 'jacbt_sidebar_width', 275 ) + 20;
?>
#jacbt_wrapper{width:<?php echo $jacbt_main_width; ?>px;margin:0px auto;}
#jacbt_sidebar{width:<?php echo get_theme_mod( 'jacbt_sidebar_width', 275); ?>px;border:0px none;}
<?php } else { ?>
#jacbt_sidebar{width:<?php echo get_theme_mod( 'jacbt_sidebar_width', 275); ?>px;border-left:1px solid <?php echo get_theme_mod( 'jacbt_color_bodybg', '#888888' ) ?>;border-bottom:1px solid <?php echo get_theme_mod( 'jacbt_color_bodybg', '#888888' ) ?>}	
<?php } ?>
.jacbt_site_header{background-color:<?php jacbt_hex_to_rgba( get_theme_mod( 'jacbt_color_headbg', '#FFFFFF' ), get_theme_mod( 'jacbt_header_opac', '80' ) ); ?>}
<?php if ( get_theme_mod( 'jacbt_logo_shadow', True ) ): ?>#jacbt_site_header_logo{box-shadow:3px 3px 8px 3px <?php echo get_theme_mod( 'jacbt_color_bodybg', '#888888' ) ?>;}<?php endif; ?>
#jacbt_site_header_logo{background-image:url(<?php echo get_theme_mod( 'jacbt_logo_uri', get_template_directory_uri() . '/blue_bike.jpg' );?>);}
.jacbt_site_header,.jacbt_site_header a {color:<?php echo get_theme_mod( 'jacbt_color_headtxt', '#000000'); ?>;}
.jacbt_menu_header a{color:<?php echo get_theme_mod( 'jacbt_color_hmenu', '#000000'); ?>;}
.jacbt_menu_header a:active,.jacbt_menu_header a:hover{background-color:<?php jacbt_hex_to_rgba( get_theme_mod( 'jacbt_bgcolor_hmenu', '#FFFFFF' ), get_theme_mod( 'jacbt_hmenu_opac', '80' ) );?>}
.jacbt_menu_above_content a{color:<?php echo get_theme_mod( 'jacbt_color_cmenu', '#000000'); ?>;}
.jacbt_menu_above_content a:active,.jacbt_menu_above_content a:hover{background-color:<?php jacbt_hex_to_rgba( get_theme_mod( 'jacbt_bgcolor_cmenu', '#DDDDDD' ), get_theme_mod( 'jacbt_cmenu_opac', '80' ) ); ?>}
#jacbt_sidebar,#jacbt_content,#jacbt_footer,.jacbt_menu_above_content{background-color:<?php echo get_theme_mod( 'jacbt_color_contbg', '#FFFFFF'); ?>;}
.sticky{background-color:<?php echo get_theme_mod( 'jacbt_color_stickbg', '#ffffBA'); ?>;}
#jacbt_sidebar,#jacbt_content,#jacbt_footer,.jacbt_menu_above_content,.sticky{<?php if ( get_theme_mod( 'jacbt_rounded_corners', 'round' ) == 'round' ) : ?>border-radius:<?php echo get_theme_mod( 'jacbt_corner_radius', 25) ?>px;<?php else: ?>border-radius:0;<?php endif; ?>}
#jacbt_gutter{width:<?php echo get_theme_mod( 'jacbt_gutter_width', 10 ); ?>px;}
span.jacbt_post_meta div.comment-meta,blockquote:before,blockquote:after,.jacbt_post_pag_header,.jacbt_meta_wrapper,.jacbt_post_nav,.jacbt_post_nav_bottom,.comment-meta{color:<?php echo get_theme_mod( 'jacbt_color_metatxt', '#727272'); ?>;}
#jacbt_footer{margin-top:<?php echo get_theme_mod( 'jacbt_gutter_width', 10 ) ?>px;}
.jacbt_meta_wrapper a,.jacbt_post_nav a,.jacbt_post_nav_bottom a,.comment-meta a,.jacbt_post_pag_header a{color:<?php echo get_theme_mod( 'jacbt_color_metaemp', '#828282'); ?>;}
a{color:<?php echo get_theme_mod( 'jacbt_color_link', '#000000'); ?>;}
a:hover{background-color:<?php echo get_theme_mod( 'jacbt_color_linkbg', '#DDDDDD'); ?>;}
.wp-caption,.gallery-icon,.gallery-caption{background-color:<?php echo get_theme_mod( 'jacbt_color_imgbg', '#EEEEEE'); ?>;}
</style>
<?php } ?>