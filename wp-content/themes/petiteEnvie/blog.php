<?php
/*
Template Name: Blog
*/
get_header();
?>
<header>
<h1></h1>
</header>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);
	$("#c_blog").addClass("active");
});
</script>

<?php
get_footer();
?>