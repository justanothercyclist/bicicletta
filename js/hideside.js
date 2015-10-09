jQuery(document).ready(jacbt_sidebar_visibility());


// Magic header shrinkage
function jacbt_sidebar_visibility() {
	jQuery(window).resize( function(){
		if (jQuery(window).width() > jacbt_content_min_width) {
			jQuery("#jacbt_sidebar").css('display','table-cell');
			jQuery("#jacbt_gutter").css('display','table-cell');
		}
		else { 
			jQuery("#jacbt_sidebar").css('display','none');
			jQuery("#jacbt_gutter").css('display','none');
		}
	});
}