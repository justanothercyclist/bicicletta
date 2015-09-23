<?php 

function jacbt_render_posts() {
  $pag_post_settings = array(
	'before'           => '<div class="jacbt_post_pag_header">' . __( 'Turn the page: ' ),
	'after'            => '</div>',
	'link_before'      => '',
	'link_after'       => '',
	'next_or_number'   => 'number',
	'separator'        => ' | ',
	'pagelink'         => '%',
	'echo'             => 1
);
  
  if (have_posts()) : ?> 
      <div class="jacbt_post_nav jacbt_post_nav_top">
  	  	<div class="jacbt_post_nav_bottom_prev"><?php next_posts_link( '&larr; ' . __( ' Older posts' ) ) ?></div>
  	  	<div class="jacbt_post_nav_bottom_next"><?php previous_posts_link( __( 'Newer posts ' ) .  '&rarr;' ) ?></div>
  	</div>
  	  <?php 
  
  while (have_posts()) : the_post(); ?>
  <div <?php post_class(); ?> >
  		<h1 class="jacbt_post_title">
  			<?php if ( is_single() ){
  			  the_title();
  			} else { 
  			   ?><a class="jacbt_post_title_link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a><?php 
  			} ?>
  		</h1>
  		<div class="jacbt_meta_wrapper">
    		<span class="jacbt_author_credit jacbt_post_meta jacbt_post_meta_left">Posted by <a class="jacbt_author_credit jacbt_post_meta" href="<?php get_author_posts_url( get_the_author_meta( 'display_name' ) );?>"><?php echo get_the_author(); ?></a></span>
    		<span class="jacbt_author_credit jacbt_post_meta jacbt_post_meta_right">Published <?php the_time('F jS, Y') ?></span>
    		<div class="breaker-breaker"></div>
    		<span class="jacbt_post_catlist jacbt_post_meta jacbt_post_meta_left"><?php if( has_category( ) ) : echo __('Posted in ') . get_the_category_list( ', ', '' ); endif; ?></span>
    		<span class="jacbt_edit_post jacbt_post_meta jacbt_post_meta_right"><?php edit_post_link( __('Edit') ); ?></span>
  		</div>
  		<p>
        <?php wp_link_pages( $pag_post_settings ); ?>
  		
  		<?php 
  		  the_content(__('Continue Reading &rarr;'));
  		?>
  	      <div class="jacbt_post_meta jacbt_post_tags jacbt_meta_wrapper">
  	        <?php echo get_the_tag_list( __( 'Tagged: '), ', ', '.' ); ?>
  	      </div>
    	<?php 	  
  		  if ( is_single() ) {
  		    $previous_link = '';
  		    $next_link = '';
  
  		    $seek_post = get_previous_post();
  		    if ( is_a( $seek_post , 'WP_Post' ) ) {
  		      $link_title = '&larr; ' . __( 'Previous: ') . jacbt_truncate_string( get_the_title( $seek_post->ID ), 40 );
  		      $link_href = get_post_permalink( $seek_post->ID );
  		      $previous_link='<a class="jacbt_nav_link jacbt_nav_link_previous" href="' . $link_href . '">' . $link_title . '</a>';
  		    }
  		    $seek_post = get_next_post();
  		    if ( is_a( $seek_post , 'WP_Post' ) ) {
  		      $link_title = __( 'Next: ') . jacbt_truncate_string( get_the_title( $seek_post->ID ), 40 ) . ' &rarr;';
  		      $link_href = get_post_permalink( $seek_post->ID );
  		      $next_link='<a class="jacbt_nav_link jacbt_nav_link_next" href="' . $link_href . '">' . $link_title . '</a>';
  		    }
            wp_link_pages( $pag_post_settings );
  		    ?>
  		   	<div class="jacbt_comment_wrapper">
  		    <?php comments_template(); ?>
  		    </div> 
  		    <div class="jacbt_post_nav_bottom">
      		  	<div class="jacbt_post_nav_bottom_prev"><?php echo $previous_link; ?></div>
      		  	<div class="jacbt_post_nav_bottom_next"><?php echo $next_link ?></div>
  		  	</div>
  	  	</div><!--  post --> 
  	    <?php
  	    } else {
  	    } 
  	    
  	    
  	  if ( ! is_single() && ! is_sticky() ) {
  	    echo '<hr class="jacbt_post_divider"> ';
  	  }
  	?></div></p>
  	<?php endwhile; ?> 
        	<div class="jacbt_post_nav jacbt_post_nav_bottom">
      	  	<div class="jacbt_post_nav_bottom_prev"><?php next_posts_link( '&larr; ' . __( ' Older posts' ) ) ?></div>
      	  	<div class="jacbt_post_nav_bottom_next"><?php previous_posts_link( __( 'Newer posts ' ) .  '&rarr;' ) ?></div>
  	  	</div>
  	  <?php else: ?>
  		<p><?php __('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; 

}

?>
