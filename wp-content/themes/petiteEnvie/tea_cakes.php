<?php
/*
Template Name: Tea cakes
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<header>
		<h1></h1>
		</header>
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Date and Walnut Loaf</p>
			<p>This evergreen combination is an old family favourite. It’s light, and moist - a definite treat!</p>
		</div>	
	</div>

	
	<div id="cake2" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Lemon Drizzle Loaf</p>
			<p>After baking, this cake is drizzled with a lemon syrup that keeps it moist and also gives it just the right amount of tang</p>
		</div>
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Almond Cake</p>
			<p>This cake is made with almond paste which we make from scratch. The indulgent middle layer is of an almond cream, also called frangipane</p>
		</div>		
	</div>

	
	<div id="cake4" style="height: 700px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Pound Loaf</p>
			<p>This is the chocolate version of the classic pound cake, with sprinkles of chocolate chips, and walnuts</p>
		</div>
	</div>
	
	<div id="cake5" style="height: 690px;" class="panel panel-5">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Pineapple Upside-Down Cake</p>
			<p>This cake is wonderfully moist with sweetness from caramel and pineapple.</p>
		</div>		
	</div>	
	
	<div id="cake6" style="height: 700px;" class="panel panel-6">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Carrot Cake</p>
			<p>Full of grated carrot and toasted nuts, its covered with sweet and tangy cream cheese frosting.</p>
		</div>
	</div>
	
	<div id="cake6" style="height: 700px;" class="panel panel-7">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate and Orange Cake</p>
			<p>Drizzled with freshly made orange syrup and covered with dark melted, chocolate.</p>
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