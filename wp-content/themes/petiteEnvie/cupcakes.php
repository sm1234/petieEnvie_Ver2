<?php
/*
Template Name: Cup cakes
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<header>
		<h1></h1>
		</header>
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Vanilla Cupcakes</p>
			<p>Vanilla cupcakes with vanilla frosting, dressed in pretty candy colors.</p>
		</div>	
	</div>

	
	<div id="cake2" class="panel panel-2">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Cupcakes</p>
			<p>We add real dark chocolate to our chocolate cupcakes and the frosting. A sinful treat!</p>
		</div>
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Cupcakes with Vanilla Frosting</p>
			<p>Vanilla frosting balances the dark chocolate in these cupcakes beautifully.</p>
		</div>		
	</div>

	
	<div id="cake4" style="height: 700px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Red Velvet Cupcakes</p>
			<p>The deep red cake with white frosting makes these irresistible. Available with vanilla or cream cheese frosting</p>
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
			<p class="larger">Fruit Cupcakes with Strawberry Coulis</p>
			<p>The classic vanilla cake baked with pineapple tidbits, garnished with fruits, and a Strawberry coulis centre.</p>
		</div>
	</div>
	
	<div id="cake7" style="height: 700px;" class="panel panel-7">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Lavender Cupcakes</p>
			<p>Lavender infused cupcakes have a unique, subtle flavour and an amazing aroma. Give it a try if you are on the lookout for new exciting flavours.</p>
		</div>
	</div>
	
	<div id="cake8" style="height: 700px;" class="panel panel-8">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Blueberry Cupcakes</p>
			<p>A light sponge with blueberry bits in whipped cream, topped with whole blueberries.</p>
		</div>
	</div>
	
	<div id="cake9" style="height: 700px;" class="panel panel-9">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Coconut Cupcakes with Pineapple Tidbits</p>
			<p>Tropical flavoured cupcakes –they’ll remind you of refreshing pina coladas!</p>
		</div>
	</div>
	
	<div id="cake10" style="height: 700px;" class="panel panel-10">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Chocolate Hazelnut Cupcakes</p>
			<p>Tropical flavoured cupcakes –they’ll remind you of refreshing pina coladas!</p>
		</div>
	</div>
	
	<div id="cake11" style="height: 700px;" class="panel panel-11">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger">Lemon Cupcakes</p>
			<p>Drizzled with freshly made lemon syrup, which we also whip into the sweet and tangy frosting. Topped with candied lemon zest</p>
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