jQuery(document).ready(function($) {
$('#prev-panel').hide();	

var navigationHeight = $('.navbar').height();
var navItems =[];

navItems=$('#c_primary a').map(function() {
  return $(this).attr('href');
});

$('#prev-panel').click(function(event) {
event.preventDefault();
slideUp();
});//end slide up

$('#next-panel').click(function(event) {
event.preventDefault();
slideDown();	
});//end slide-down

var scrollTo = function(element) {
        $('html, body').animate({
            scrollTop: element.offset().top - navigationHeight
        }, 500);
}

function slideUp(){	

var $current = $('#page > .current');
if (!$current.index() == 0) {
$current.removeClass('current').prev().addClass('current');
scrolling=true;
scrollTo($current.prev());
}
($current.index()>=2)? $('#prev-panel').show():$('#prev-panel').hide(); 	
($current.index()>=$('#page > div.panel').length )? $('#next-panel').hide():$('#next-panel').show(); 	
}//slideUp

function slideDown(){

var $current = $('#page > .current');
$current.removeClass('current').next().addClass('current');
scrollTo($current.next());

if ($current.index() != $('#page > div.panel').length - 1) {
$current.removeClass('current').next().addClass('current');
scrolling=true;
scrollTo($current.next());
}
($current.index()>=0)? $('#prev-panel').show():$('#prev-panel').hide();  	
($current.index()==$('#page > div.panel').length - 2)? $('#next-panel').hide():$('#next-panel').show(); 
}//slideDown



});

