<?php
/*
Template Name: Cookies
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<header>
		<h1></h1>
		</header>
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Big Chewy Chocolate Chip Cookies</p>
			<p>The classic cookie – always a crowd pleaser.</p>
		</div>	
	</div>

	
	<div id="cake2" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Double Chocolate Chip Cookies</p>
			<p>Twice the chocolate – need we say more?</p>
		</div>
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Peanut Butter and Chocolate Chip Brownies</p>
			<p>Peanut butter and chocolate make a wonderful combination, especially in a crunchy cookie.</p>
		</div>		
	</div>

	
	<div id="cake4" style="height: 700px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Brownie Cookies</p>
			<p>Rich, intensely chocolate, with a chewy, brownie like texture.</p>
		</div>
	</div>
	
	<div id="cake5" style="height: 690px;" class="panel panel-5">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Lemon Sugar Cookies</p>
			<p>Traditionally, sugar cookies are made during Christmas, but are now popular round the year. They can be made in all sorts of fun shapes!</p>
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