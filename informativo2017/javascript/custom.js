jQuery(document).ready(function () {
  
//____________________________________________________________________________________________ tooltip 

    if (jQuery("[rel=tooltip]").length) {
	jQuery("[rel=tooltip]").tooltip();
  }
  
  jQuery('button').addClass('btn');
  jQuery('#wrapper').find('select').addClass('selectpicker');
  jQuery('.selectpicker').selectpicker({'selectedText': 'cat'});
  jQuery('.selectpicker').selectpicker();

// ____________________________________________________________________________________________ resize display
/*
        var myWidth = 0;
        myWidth = window.innerWidth;
        jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        jQuery(window).resize(function(){
            var myWidth = 0;
            myWidth = window.innerWidth;
            jQuery('#size').remove();
            jQuery('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        });
*/
// ____________________________________________________________________________________________ responsive menu

	var mainMenu = jQuery('.main_menu ul.menu');

	mainMenu.find('li.parent > a').next('ul').hide();
	mainMenu.find('li.parent > a').append('<span class="arrow"></span>');

    jQuery(function() {
	  mainMenu.find('li.parent').hover(function() {
	    if (!jQuery(this).children('ul').is(':visible')) {
		  jQuery(this).children('ul').stop().slideDown('normal');
	    }
	  },
	    function() {
		if (jQuery(this).children('ul').is(':visible')) {
		  jQuery(this).children('ul').slideUp('normal');
		}
	    });
    });
    
// ____________________________________________________________________________________________

    
 });