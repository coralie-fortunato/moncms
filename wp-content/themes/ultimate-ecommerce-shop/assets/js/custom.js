jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function ultimate_ecommerce_shop_resMenu_open() { 
	document.getElementById("menu-sidebar").style.width = "250px";
}
function ultimate_ecommerce_shop_resMenu_close() {
	document.getElementById("menu-sidebar").style.width = "0";
}

(function( $ ) {

	jQuery(document).ready(function() {
		jQuery(".drp_dwn_ecommerce").click(function(){
		    jQuery(".cat_box").toggle();
		});
	});

	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		$('.search-box span a').click(function(){
	        $(".serach_outer").slideDown(700);
	    });

	    $('.closepop a').click(function(){
	        $(".serach_outer").slideUp(700);
	    });
	});

})( jQuery );

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-menubox'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-menubox');
		else sticky.removeClass('fixed-menubox');
	});

})( jQuery );