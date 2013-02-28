<?php
/*
Template Name: About
*/
get_header();
?>
<header>
<h1></h1>
</header>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	$('#prev-panel').hide();
	$('#next-panel').hide();
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);
	$("#c_about").addClass("active");
});
</script>

<?php
get_footer();
?>