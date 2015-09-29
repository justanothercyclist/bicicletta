<?php
function jacbt_render_hideside_val_funct() { 
  global $jacbt_hideside_trigger;
?>
<script type="text/javascript">
var jacbt_content_margin_right = <?php echo get_theme_mod( 'jacbt_sidebar_width', 275 ) + get_theme_mod( 'jacbt_gutter_width', 10 ) + 20; ?>;
var jacbt_content_min_width = <?php echo $jacbt_hideside_trigger; ?>;
</script>
<?php } ?>