 $(function () {
    $('#datetimepicker1').datepicker({
    	
    	onSelect: function(dateText, inst) { alert("Working"); }
	});
	
	
});
 jQuery(document).ready(function(){
	jQuery('.media-gallery-tabing').hide();
	jQuery('.media-gallery-tabing#tab-1').show();
	jQuery('ul.media-navi li a').click(function(){
		var tab_id = jQuery(this).attr('data-tab');
jQuery('.media-gallery-tabing').hide();
		//jQuery('ul.media-navi li a').removeClass('current');
		jQuery("#"+tab_id).show();

		//jQuery(this).addClass('current');
		
	});

});