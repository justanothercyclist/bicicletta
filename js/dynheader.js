jQuery(document).ready(jacbt_dynamic_header());


// Magic header shrinkage
function jacbt_dynamic_header() {
	jQuery(document).on("scroll", function(){
		if (jQuery(document).scrollTop() > 50) {
			jQuery("#jacbt_site_header").addClass("jacbt_site_header_min");
			jQuery("#jacbt_site_header").removeClass("jacbt_site_header_full");
			jQuery("#jacbt_site_header_logo").height(60);
			jQuery("#jacbt_site_header_logo").width(60);
			// jQuery(".jacbt_header_tagline").css('visibility', 'hidden');
		}
		else { 
			jQuery("#jacbt_site_header").removeClass("jacbt_site_header_min");
			jQuery("#jacbt_site_header").addClass("jacbt_site_header_full");
			jQuery("#jacbt_site_header_logo").height(135);
			jQuery("#jacbt_site_header_logo").width(135);
			// jQuery(".jacbt_header_tagline").css('visibility', 'visible');
		}
	});
}