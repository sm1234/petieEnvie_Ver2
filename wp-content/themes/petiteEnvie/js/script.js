// Panel Resizing

function resizingStuff() {
	//alert('HELLO');
	var navigationHeight = jQuery('.navbar').height();
	var pageHeight = jQuery(window).height();
	var panelHeight = pageHeight - navigationHeight;
	jQuery('.panel').css('height', panelHeight);
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

// Fire it when the page loads
jQuery(document).ready(function($) {
	//alert('hi');
	resizingStuff();
	$('.center').center(true);
});


// Fire it on window resize
jQuery(window).resize(function($) {
    resizingStuff();
	jQuery('.center').center(true);
});

/*

// Jump bits
function goToByScroll(id){
    var navigationHeight = $('.navbar').height();
    $('html,body').animate({scrollTop: $("#"+id).offset().top - navigationHeight},'slow');
		$('#page div').removeClass('current');//remove all current classes
		$("#"+id).addClass('current');//update current slide with current class
	
}

$(".navbar ul.nav a").click(function(e) {
    e.preventDefault();
    goToByScroll($(this).attr("rel"));           
});









// Scrollspy Alternative

$(document).ready(function(){
	
var lastId, topMenu = $("#c_secondary"),
    topMenuHeight = topMenu.outerHeight() + 80,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
	


$(window).scroll(function() {
    var fromTop = $(this).scrollTop() + topMenuHeight;

    var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop) return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        menuItems.parent().removeClass("active").end().filter("[href=#" + id + "]").parent().addClass("active");
    }
});
});
*/