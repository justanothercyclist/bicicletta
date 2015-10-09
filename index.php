<?php
  get_header(); 
  if ( has_nav_menu( 'jacbt_menu_above_content' ) ) {
    wp_nav_menu( array( 'theme_location' => 'jacbt_menu_header', 'container_class' => 'jacbt_menu_above_content' ) );
  }
?>

<div id="main">
	<div id="jacbt_content">
		<?php jacbt_render_posts(); ?>		
	</div>
	<div id="jacbt_gutter"></div>
  <?php get_sidebar(); ?>
</div>
<div class="breaker-breaker"></div>
<?php get_footer(); ?>
<div id="jacbt_outer_footer"></div>