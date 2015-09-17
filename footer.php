<div id="jacbt_footer">
<div class="jacbt_footer_content">
<h1>FOOTER</h1>
</div>
<div class="jacbt_footer_content">
<?php  
  if ( has_nav_menu( 'jacbt_menu_footer' ) ) {
    wp_nav_menu( array( 'theme_location' => 'jacbt_menu_header', 'container_class' => 'jacbt_menu_footer' ) );
  }
?>
</div>
</div>
</body>
</html>