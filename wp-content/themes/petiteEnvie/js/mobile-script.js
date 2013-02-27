jQuery(document).ready(function($) {
$('nav').hide();

$('#section-nav').toggle(function() {
	$('nav').slideDown('slow');
}, function() {
	$('nav').slideUp('slow');
});
});
