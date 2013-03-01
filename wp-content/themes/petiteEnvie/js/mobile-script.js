jQuery(document).ready(function($) {
$('nav').hide();

$('#section-nav').toggle(function() {
	$('nav').slideDown('fast');
}, function() {
	$('nav').slideUp('fast');
});
});
