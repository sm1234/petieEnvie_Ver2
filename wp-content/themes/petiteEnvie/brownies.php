<?php
/*
Template Name: Brownies
*/
get_header();
?>

<div id="page">
	
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Walnut Brownies</p>
			<p>The classic brownie with crunchy walnuts.</p>
		</div>
	</div>


	<div id="cake2" style="height: 690px;" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Cream Cheese Brownies</p>
			<p>Dense fudgy brownies offset with a cheesecake like topping</p>
		</div>		
	</div>

	
	<div id="cake3" style="height: 700px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Peanut Butter and Chocolate Chip Brownies</p>
			<p>The combination of peanut butter and chocolate make these brownies irresistible.</p>
		</div>
	</div>
			
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("header").hide();
	$("#peBody").removeClass();
	$("#peBody").addClass("services");
	var container_width_secondary = jQuery('.container').width();
	if(jQuery(window).width()<775)
		{
			jQuery('#c_secondary > li > a').css('padding','2px 5px 3px');
		}
	else
		{
			jQuery('#c_secondary > li > a').css('padding','2px 15px 3px');
		}
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);	
	$("#c_catalogue").addClass("active");
	var acticeElement = window.location.href.split('/')[4];
	$("a[rel="+acticeElement+"]").parent().addClass("active");
	var $current2 = $('#c_secondary > .active');
	if($current2.length==0)
	{
	$("#c_secondary").hide().delay("300").slideDown(400);
	}
	else
	{
	$("#c_secondary").show();
	}
});
</script>
<?php
get_footer();
?>