<?php
/*
Template Name: Cheese cakes
*/
get_header();
?>

<div id="page">
	
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Plain Cheesecake</p>
			<p>The classic - a biscuit crumb and a creamy, smooth filling, baked to perfection. Ask us for the available fruit toppings.</p>
		</div>
	</div>


	<div id="cake2" style="height: 690px;" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Cheesecake</p>
			<p>The chocolate version with three layers – a chocolate biscuit crumb, cheesecake filling and creamy ganache.</p>
		</div>		
	</div>

	
	<div id="cake3" style="height: 700px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Mixed Berry Cheesecake</p>
			<p>Mixed berries baked into the cheesecake filling</p>
		</div>
	</div>
	
	<div id="cake4" style="height: 690px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">No-Bake Cream Cheese Pie</p>
			<p>Lighter version of cheesecake – creamy, tangy, perfect with a fruity topping. Available Toppings: Strawberry, Cherry</p>
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