<?php
/*
Template Name: Layer cakes
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<header>
		<h1></h1>
		</header>
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Opera Cake</p>
			<p>This is a multilayered classic with coffee butter-cream, chocolate ganache and an almond jaconde sponge, topped off with a chocolate glaze.</p>
		</div>	
	</div>

	
	<div id="cake2" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Trifle Cake</p>
			<p>We took this classic pudding and turned it into a cake. It has layers of vanilla sponge, fruits and a light fruit based custard.</p>
		</div>
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Cake with Dark Chocolate Custard Filling</p>
			<p>If you find the usual chocolate fillings too heavy, this cake will let you have the entire flavor of chocolate but with a light custard filling.</p>
		</div>		
	</div>

	
	<div id="cake4" style="height: 700px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Cake with Vanilla Frosting</p>
			<p>A rich chocolate cake with a ganache filling and notes of coffee, tempered with vanilla frosting. Ask for an addition of walnuts if you are a nut lover!</p>
		</div>
	</div>
	
	<div id="cake5" style="height: 690px;" class="panel panel-5">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Red Velvet Cake with Vanilla or Cream Cheese Frosting</p>
			<p>This cake looks gorgeous with layers of red cake alternating with white frosting.</p>
		</div>		
	</div>	
	
	<div id="cake6" style="height: 700px;" class="panel panel-6">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Mousse Cake</p>
			<p>Layers of chocolate mousse with alternate layers of almond sponge, topped off with a dark chocolate ganache.</p>
		</div>
	</div>
	
	<div id="cake7" style="height: 700px;" class="panel panel-7">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Hazelnut Mousse Cake</p>
			<p>We use chocolate mousse for filling and frosting this light chocolate cake with a mildly crunchy hazelnut disk in the center.</p>
		</div>
	</div>
	
	<div id="cake8" style="height: 700px;" class="panel panel-8">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Lemon Cake</p>
			<p>A simple, no fuss cake. Lemon sponge with sweet and tangy notes in the frosting.</p>
		</div>
	</div>
	
	<div id="cake9" style="height: 700px;" class="panel panel-9">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Tiramisu Cake</p>
			<p>Inspired by the traditional Italian dessert – alternating layers of coffee and chocolate sponge soaked in coffee flavored rum syrup, topped off with coffee cream.</p>
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