<?php 

if ( have_comments() ) : ?>
  <h4 id="comments"><?php comments_number( __('No Comments'), __('One Comment'), '% ' . __('Comments' ) );?></h4>
  <ul class="commentlist">
  	<?php wp_list_comments(); ?></ul>
  <div class="navigation">
  <div class="alignleft"><?php previous_comments_link() ?></div>
  <div class="alignright"><?php next_comments_link() ?></div>
  </div>
<?php else: ?>
	<div class="jacbt_empty_comments"><?php echo __( 'No comments yet. Start the conversation now.'); ?>
<?php endif;
if ( comments_open() ) {
  comment_form();
}  

?>