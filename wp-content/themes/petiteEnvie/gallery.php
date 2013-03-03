<?php
/*
Template Name: Gallery
*/
get_header();
?>
<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<header>
		<h1></h1>
		</header>	
	</div>

	
	<div id="cake2" class="panel panel-2">		
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">			
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	$("#peBody").removeClass();
	$("#peBody").addClass("gallery");
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);
	$("#c_gallery").addClass("active");
});
</script>

<?php
get_footer();
?>