<div id="jacbt_footer">
<div class="jacbt_footer_widget_wrapper jacbt_footer_widget_wrapper_left"> 
<?php 
if ( is_active_sidebar( 'jacbt_footer_left' ) ) { ?>
  <div id="jacbt_left_footer_widg" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'jacbt_footer_left' ); ?>
  </div>
<?php } ?>
</div>
<div class="jacbt_footer_widget_wrapper jacbt_footer_widget_wrapper_center">
<?php
if ( is_active_sidebar( 'jacbt_footer_center' ) ) { ?>
  <div id="jacbt_center_footer_widg" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'jacbt_footer_center' ); ?>
  </div>
<?php } else { ?>
  <div id="jacbt_self_promo">Powered by <a href="http://justanothercyclist.com/jac-side-projects/">Biciclette WordPress Theme</a></div>
</div>
<div class="jacbt_footer_widget_wrapper jacbt_footer_widget_wrapper_right">	
<?php }
if ( is_active_sidebar( 'jacbt_footer_right' ) ) { ?>
  <div id="jacbt_right_footer_widg" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'jacbt_footer_right' ); ?>
  </div>
<?php } ?>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>