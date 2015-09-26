jQuery(document).ready(jacbt_sidebar_visibility());


// Magic header shrinkage
function jacbt_sidebar_visibility() {
	jQuery(window).resize( function(){
		if (jQuery(window).width() > jacbt_content_min_width) {
			jQuery("#jacbt_sidebar").css('display','block');
			jQuery("#jacbt_content").css('margin-right',jacbt_content_margin_right);
		}
		else { 
			jQuery("#jacbt_sidebar").css('display','none');
			jQuery("#jacbt_content").css('margin-right','0');
		}
	});
}