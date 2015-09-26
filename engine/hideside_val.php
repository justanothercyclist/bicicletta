<?php
function jacbt_render_hideside_val_funct() { 
  global $jacbt_gutter_width;
  global $jacbt_hideside_trigger;
?>
<script type="text/javascript">
var jacbt_content_margin_right = <?php echo get_theme_mod( 'jacbt_sidebar_width', 275) + $jacbt_gutter_width; ?>;
var jacbt_content_min_width = <?php echo $jacbt_hideside_trigger; ?>;
</script>
<?php } ?>