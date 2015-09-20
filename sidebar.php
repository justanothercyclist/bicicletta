<div id="jacbt_sidebar">
<?php if ( is_active_sidebar( 'jacbt_right_sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'jacbt_right_sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php else: ?>
<!--  Non-widget content -->
<h2 ><?php __('Categories'); ?></h2>
<ul >
<?php wp_list_catergories(); ?>
</ul>
<h2 ><?php __('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
<?php endif; ?>
</div>