<?php
/*
 * Here you will find only the initalization and registration functions.
 */

/* minimum window width needed to display sidebar, if sidehide is enabled */
$jacbt_hideside_trigger = 800;

if ( !isset( $content_width ) ) $content_width = 1000; // Kinda arbitrary number to be honest

add_action( 'wp_head', 'jacbt_render_customizations' );
add_action( 'wp_head', 'jacbt_render_hideside_val_funct' );

foreach (glob(get_template_directory()  . '/engine/*.php') as $core_php) {
    include $core_php;
}

/*
 --- Widget Areas
 */

function jacpt_reg_widgets() {
	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'jacbt_right_sidebar',
		'before_widget' => '<div class="jacbt_widget_wrapper jacbt_widget_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="jacbt_widget_title jacbt_widget_sidebar">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Left Footer',
		'id'            => 'jacbt_footer_left',
		'before_widget' => '<div class="jacbt_widget_wrapper jacbt_widget_footer jacbt_footer_left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="jacbt_widget_title jacbt_widget_footer">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Center Footer',
		'id'            => 'jacbt_footer_center',
		'before_widget' => '<div class="jacbt_widget_wrapper jacbt_widget_footer jacbt_footer_center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="jacbt_widget_title jacbt_widget_footer">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Right Footer',
		'id'            => 'jacbt_footer_right',
		'before_widget' => '<div class="jacbt_widget_wrapper jacbt_widget_footer jacbt_footer_right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="jacbt_widget_title jacbt_widget_footer">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Above Content',
		'id'            => 'jacbt_top',
		'before_widget' => '<div class="jacbt_widget_wrapper jacbt_widget_top">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="jacbt_widget_title jacbt_widget_top">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'jacpt_reg_widgets' );

/*
 --- Menu(s)
 */
function jacbt_reg_header_menu() {
  register_nav_menus(
    array (
      'jacbt_menu_header' => __( 'Header Menu', 'bicicletta' ),
      'jacbt_menu_above_content' => __( 'Above Content', 'bicicletta')
    )
  );
}
add_action( 'init', 'jacbt_reg_header_menu' );


/*
 --- Dependancies...
 */
function jacbt_load_depends() {

  wp_enqueue_style( 'jacbt_core', get_stylesheet_directory_uri() . '/css/core.css' );
  wp_enqueue_style( 'jacbt_posts', get_stylesheet_directory_uri() . '/css/post.css' );
  wp_enqueue_style( 'jacbt_menus', get_stylesheet_directory_uri() . '/css/menus.css' );
  wp_enqueue_style( 'jacbt_widgets', get_stylesheet_directory_uri() . '/css/widgets.css' );
  wp_enqueue_style( 'jacbt_comments', get_stylesheet_directory_uri() . '/css/comments.css' );
  if ( is_singular() ) {
    wp_enqueue_script( "comment-reply" );
  }
  if ( get_theme_mod( 'jacbt_dynamic_header', True ) ) {
    wp_enqueue_script(
  		'jacbt_bicicletta_dynheader_js',
          get_stylesheet_directory_uri() . '/js/dynheader.js',
          array( 'jquery' )
    );
  }
  if ( get_theme_mod( 'jacbt_hide_sidebar', True ) && ! get_theme_mod( 'jacbt_fixed_width', False ) ) {
    wp_enqueue_script(
  		'jacbt_bicicletta_hideside_js',
          get_stylesheet_directory_uri() . '/js/hideside.js',
          array( 'jquery' )
    );
  }
}
add_action( 'wp_enqueue_scripts', 'jacbt_load_depends' );


/*
  --- Localiztion where possible
*/
function jacbt_localization(){
    load_theme_textdomain('bicicletta', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'jacbt_localization');

function jacbt_theme_support() {
  add_theme_support( 'automatic-feed-links' );  
}
add_action( 'after_setup_theme', 'jacbt_theme_support' );
?>