// Panel Resizing

function resizingStuff() {
	var navigationWidth = jQuery('#peBody').width();	
	var navigationHeight = jQuery('.navbar').height();
	if(navigationWidth>963)
	{
	jQuery('#c_primary').css('left', '35%');
	var pageHeight = jQuery(window).height();
	var panelHeight = pageHeight - navigationHeight;
	jQuery('.panel').css('height', panelHeight);
	}
	else
	{
	jQuery('#c_primary').css('left', '0%');
	var pageHeight = jQuery(window).height();
	jQuery('.panel').css('height', pageHeight);
	}
}

// Element Centering
(function($){
    $.fn.extend({
        center: function () {
            return this.each(function() {
                var top = ($(window).height() - $(this).outerHeight()) / 2.5 ;
                var left = ($(window).width() - $(this).outerWidth()) / 2;
                $(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px', left: (left > 0 ? left : 0)+'px'});
            });
        }
    }); 
})(jQuery);

(function($){
    $.fn.extend({
        center1: function () {
            return this.each(function() {
                var top = ($(window).height() - $(this).outerHeight()) / 2.5 ;
                var left = ($(window).width() - $(this).outerWidth());
                $(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px', left: (left > 0 ? left : 0)+'px'});                             
            });
        }
    }); 
})(jQuery);

// Fire it when the page loads
jQuery(document).ready(function($) {	
	resizingStuff();
	$('.center').center(true);
	$('.center1').center1(true);

jQuery("#c_secondary a").click(function(e) {
    e.preventDefault();
    goToByScroll(jQuery(this).attr("rel"));           
});

});


// Fire it on window resize
jQuery(window).resize(function($) {
	var navigationWidth = jQuery('#peBody').width();
    resizingStuff();
	jQuery('.center').center(true);
	if(navigationWidth>963)
	{
	//jQuery(".services .panel-2").css("background-image","url('C:\wamp\www\forum2\wp-content\themes\petiteEnvie\img\s2.jpg')");
	jQuery('.center1').center1(true);
	}
	else
	{
	
	jQuery('.center1').center(true);
	//jQuery(".services .panel-2").css("background-image","url('C:\wamp\www\forum2\wp-content\themes\petiteEnvie\img\cake1.jpg')");
	}
});

// Jump bits
function goToByScroll(id){
	var navigationWidth = jQuery('#peBody').width();
	if(navigationWidth>963)
	{
    var navigationHeight = jQuery('.navbar').height();
    jQuery('html,body').animate({scrollTop: jQuery("#"+id).offset().top - navigationHeight},'slow');
		jQuery('#page div').removeClass('current');//remove all current classes
		jQuery("#"+id).addClass('current');//update current slide with current class
	}
}











// Scrollspy Alternative

jQuery(document).ready(function($){
var lastId, topMenu = $("#c_secondary"),
    topMenuHeight = topMenu.outerHeight() + 150,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
	


jQuery(window).scroll(function() {
    var fromTop = jQuery(this).scrollTop() + topMenuHeight;

    var cur = scrollItems.map(function() {
        if (jQuery(this).offset().top < fromTop) return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        menuItems.parent().removeClass("active").end().filter("[href=#" + id + "]").parent().addClass("active");
    }
});
});
