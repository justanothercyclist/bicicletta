<?php
/*
 * Here you will find only the initalization and registration functions.
 */

add_action( 'wp_head', 'jacbt_render_customizations' );

foreach (glob(TEMPLATEPATH . '/engine/*.php') as $core_php) {
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
      'jacbt_menu_header' => __( 'Header Menu' ),
      'jacbt_menu_above_content' => __( 'Above Content')
    )
  );
}
add_action( 'init', 'jacbt_reg_header_menu' );


/*
 --- Dependancies...
 */
function jacbt_load_depends() {
  global $jacbt_theme_options;
  /* CSS */
  wp_enqueue_style( 'jacbt_posts', get_stylesheet_directory_uri() . '/css/post.css' );
  wp_enqueue_style( 'jacbt_menus', get_stylesheet_directory_uri() . '/css/menus.css' );
  wp_enqueue_style( 'jacbt_widgets', get_stylesheet_directory_uri() . '/css/widgets.css' );
  wp_enqueue_style( 'jacbt_comments', get_stylesheet_directory_uri() . '/css/comments.css' );

  /* JS */
  if ( is_singular() ) {
    wp_enqueue_script( "comment-reply" );
  }
  if ( get_theme_mod( 'jacbt_dynamic_header', True ) ) {
    wp_enqueue_script(
  		'jacbt_bicicletta_js',
          get_stylesheet_directory_uri() . '/js/dynheader.js',
          array( 'jquery' )
    );
  }
}
add_action( 'wp_enqueue_scripts', 'jacbt_load_depends' );


/*
  --- Localiztion where possible
*/
function jacbt_localization(){
    load_theme_textdomain('jacbt_theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'jacbt_localization');

?>