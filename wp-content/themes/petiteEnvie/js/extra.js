(function() {
$('#prev-panel').hide();

var navigationHeight = $('.navbar').height();
var navItems =[];
navItems=$('#c_primary li a').map(function() {
  return $(this).attr('href');
});
//console.log(navItems);


var scrolling=false;	
var scrollTo = function(element) {
        $('html, body').animate({
            scrollTop: element.offset().top - navigationHeight
        }, 500,function(){scrolling=false; });
    }

	
$('#next-panel').click(function(event) {
event.preventDefault();
slideDown();	
});//end slide-down
	
$('#prev-panel').click(function(event) {
event.preventDefault();
slideUp();
});//end slide up

function slideUp(){	
if(!scrolling){
var $current = $('#page > .current');
if (!$current.index() == 0) {
$current.removeClass('current').prev().addClass('current');
scrolling=true;
scrollTo($current.prev());

}
($current.index()>=2)? $('#prev-panel').show():$('#prev-panel').hide(); 	
($current.index()>=$('#page > div.panel').length )? $('#next-panel').hide():$('#next-panel').show(); 	
}//end already animating
}//slideUp

function slideDown(){
if(!scrolling){
var $current = $('#page > .current');
if ($current.index() != $('#page > div.panel').length - 1) {
$current.removeClass('current').next().addClass('current');
scrolling=true;
scrollTo($current.next());
}
($current.index()>=0)? $('#prev-panel').show():$('#prev-panel').hide();  	
($current.index()==$('#page > div.panel').length - 2)? $('#next-panel').hide():$('#next-panel').show(); 
}//end already animating
}//slideDown


var pressedCount =0;
$(document).bind('keydown',function(event) {
var $current = $('#page > .current');
	
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
var $currentPage = $('nav ul.primary > li.active');

if($currentPage.index()>0){

location.href=navItems[$currentPage.index()-1];
}
}//pageLeft








function pageRight(){
	var $currentPage = $('nav ul.primary > li.active');
	
if($currentPage.index()<navItems.length-1){

location.href=navItems[$currentPage.index()+1];
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


	 
})();