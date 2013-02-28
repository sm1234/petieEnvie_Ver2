jQuery(document).ready(function($) {
$('#prev-panel').hide();

var navigationWidth = jQuery(window).width();
var navigationHeight = $('.navbar').height();
var navItems =[];
var navItems2 =[];

navItems=$('#c_primary a').map(function() {
  return $(this).attr('href');
});

navItems2=$('#c_secondary a').map(function() {
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
	if(navigationWidth>625)
	{		
        $('html, body').animate({
            scrollTop: element.offset().top - navigationHeight
        }, 500);
    }
    else
    {
    	$('html, body').animate({
            scrollTop: element.offset().top
        }, 500);
    }
}

function slideUp(){	
if(jQuery('#prev-panel').css('display') == 'none')
{
	var $current2 = $('#c_secondary > .active');
	$current2.removeClass();
}
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
var $current2 = $('#c_secondary > .active');
if((jQuery(".Oursecondary").css('display')) == 'block' && $current2.length == 0)
{
location.href=$("a[rel=tea-cakes]").attr("href");
$("a[rel=tea-cakes]").parent().addClass("active");
}
else
{
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
}
 
}//slideDown

var pressedCount =0;
$(document).bind('keydown',function(event) {
var $current = $('#page > .current');
var $current2 = $('#c_secondary > .active');
 if (event.which == 40) {
     event.preventDefault();
if(pressedCount ==0 && $current.index()<=($('#page > div.panel').length - 2)){
		 slideDown();
	 }
   }
   
    if (event.which == 38) {
	   event.preventDefault();	
		 if(pressedCount ==0 && $current.index()>=0){
		slideUp();
	 }
  
   }
   
       if (event.which == 37) {
	   event.preventDefault();	
		 if(pressedCount ==0 ){
		pageLeft();
	 }
  
   }
   
       if (event.which == 39) {
	   event.preventDefault();	
		 if(pressedCount ==0 ){
		pageRight();
	 }
  
   }
   
   
  /* var msg = 'Handler for .keydown() called ';
  console.log(msg, 'html');
  console.log(event);*/
 pressedCount++;
});

function pageLeft(){  
var $current2 = $('#c_secondary > .active');
if($current2.length==0)
{
var $currentPage = $('ul#c_primary > li.active');

if($currentPage.index()>0){

location.href=navItems[$currentPage.index()-1];
}
}
else
{
var $currentPage2 = $('#c_secondary > li.active');

if($currentPage2.index()>0){

location.href=navItems2[$currentPage2.index()-1];
}
}
}//pageLeft


function pageRight(){
var $current2 = $('#c_secondary > .active');
if($current2.length==0)
{
var $currentPage = $('#c_primary > li.active');
	
if($currentPage.index()<navItems.length-1){

location.href=navItems[$currentPage.index()+1];
}
}
else
{
var $currentPage2 = $('#c_secondary > li.active');

if($currentPage2.index()<navItems2.length-1){

location.href=navItems2[$currentPage2.index()+1];
}
}
}//pageRight

$(document).bind('keyup',function(event) {

 if (event.which == 40) {
	 pressedCount =0;
     event.preventDefault();
   }
   
    if (event.which == 38) {
		pressedCount =0;
     event.preventDefault();
   }
  /* var msg = 'Handler for .keydown() called ';
  console.log(msg, 'html');
  console.log(event);*/
  

  
     if (event.which == 37) {
		pressedCount =0;
     event.preventDefault();
   }
     if (event.which == 39) {
		pressedCount =0;
     event.preventDefault();
   }

});

});

/*
jQuery(window).resize(function($) {
var navigationWidth = jQuery('#peBody').width();
jQuery('#prev-panel').click(function(event) {
event.preventDefault();
slideUp();
});//end slide up

jQuery('#next-panel').click(function(event) {
alert('Yo');
event.preventDefault();
slideDown();	
});//end slide-down

var scrollTo = function(element) {
	if(navigationWidth>963)
	{		
        jQuery('html, body').animate({
            scrollTop: element.offset().top - navigationHeight
        }, 500);
    }
    else
    {
    	alert('Here');
    	jQuery('html, body').animate({
            scrollTop: element.offset().top
        }, 500);
    }
}
});
*/