<?php
/*
Template Name: About
*/
get_header();
?>


<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);
	$("#c_about").addClass("active");
});
</script>

<?php
get_footer();
?>