<?php 
  get_header(); 
  if ( has_nav_menu( 'jacbt_menu_above_content' ) ) {
    wp_nav_menu( array( 'theme_location' => 'jacbt_menu_header', 'container_class' => 'jacbt_menu_above_content' ) );
  }
?>

<div id="main">
	<?php get_sidebar(); ?>
	<div id="jacbt_content-title"></div>
	<div id="jacbt_content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="jacbt_post_title">
			<?php if ( is_single() ){
			  the_title();
			} else { 
			   ?><a class="jacbt_post_title_link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a><?php 
			} ?>
		</h1>
		<div class="jacbt_meta_wrapper">
		<span class="jacbt_author_credit jacbt_post_meta jacbt_post_meta_left">Posted by <a class="jacbt_author_credit jacbt_post_meta" href="<?php get_author_posts_url( get_the_author_id() );?>"><?php echo get_the_author(); ?></a></span>
		<span class="jacbt_author_credit jacbt_post_meta jacbt_post_meta_right">Published <?php the_time('F jS, Y') ?></span>
		<div class="breaker-breaker"></div>
		<span class="jacbt_post_catlist jacbt_post_meta jacbt_post_meta_left"><?php if( has_category( ) ) : echo 'Posted in ' . get_the_category_list( ', ', '' ); endif; ?></span>
		<span class="jacbt_edit_post jacbt_post_meta jacbt_post_meta_right"><?php edit_post_link( 'Edit Post' ); ?></span>

		</div>
		<p>
		<?php 
		  the_content(__('Continue Reading &rarr;')); 
		  if ( ! is_single() ) {
		    echo '<hr class="jacbt_post_divider"> ';
		  }
		?></p>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	</div>
</div>
<div class="breaker-breaker"></div>
<?php get_footer(); ?>
<div id="jacbt_outer_footer"></div>