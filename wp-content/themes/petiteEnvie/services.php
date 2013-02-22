<?php
/*
Template Name: Services
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>Traditionally enjoyed at tea time, these classic recipes also make charming gifts for special occasions and festivals.</p>
		</div>	
	</div>

	
	<div id="cake2" style="height: 690px;" class="panel panel-2 current">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>Celebration cakes for very special occasions</p>
		</div>
	</div>


	<div id="cake3" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>Cheesecakes are creamy and comforting desserts with just the right amount of crunch!</p>
		</div>		
	</div>

	
	<div id="cake4" style="height: 700px;" class="panel panel-4">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>We use dark coverture chocolate to make our brownies, making them rich, dense and irresistible</p>
		</div>
	</div>
	
	<div id="cake5" style="height: 690px;" class="panel panel-5">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>Home-made cookies with fresh, traditional ingredients always beat the flavor of the store bought variety! These are perfect as personal treats and also make elegant gifts.</p>
		</div>		
	</div>	
	
	<div id="cake6" style="height: 700px;" class="panel panel-6">
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p>A delicate French Cookie. An almond based meringue that is crisp and moist at the same time.</p>
		</div>
	</div>	
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#c_secondary").hide().delay("300").slideDown(400);
	$("#peBody").removeClass();
	$("#peBody").addClass("services");
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);	
	$("#c_catalogue").addClass("active");
	//$('a[href="#cake1"]').trigger('click');
});
</script>
<?php
get_footer();
?>