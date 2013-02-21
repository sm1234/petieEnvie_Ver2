<?php
/*
Template Name: Contact
*/
get_header();
?>
<div class="static-panel">
	<div class="container">
		<div class="row-fluid">
			<div class="span4 offset2">

					<p><span class="name">-<br>Contact<br>-</span></p>
					<p>Address Goes Here</p>
					<p class="maquette">Tel: 0151 638 0011<br>Email <a href="mailto:queries@petiteenvie.com">queries@petiteenvie.com</a></p>
										
					
<?php
    		if(function_exists('fn_display_subscriptionArea'))
    		{
    		 	echo fn_display_subscriptionArea();
    		}
?>
    		
			</div>

			<div class="span4">
	
<?php
    		if(function_exists('fn_display_sendingArea'))
    		{
    		 	echo fn_display_sendingArea();
    		}
?>
	
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	$('#prev-panel').hide();
	$('#next-panel').hide();
	$("#peBody").removeClass();
	$("#peBody").addClass("contact");
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);	
	$("#c_contact").addClass("active");
	
});
</script>
<?php
get_footer();
?>