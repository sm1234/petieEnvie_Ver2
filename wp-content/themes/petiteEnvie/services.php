<?php
/*
Template Name: Services
*/
get_header();
?>

<div id="page">
	<div id="cake1" style="height: 690px;" class="panel panel-1 current">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 1</p>
		</div>	
	</div>

	
	<div style="height: 690px;" class="panel panel-2">

	</div>


	<div id="cake2" style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 2</p>
		</div>		
	</div>

	
	<div style="height: 700px;" class="panel panel-4">
	</div>
	
	<div id="cake3" style="height: 690px;" class="panel panel-5">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 3</p>
		</div>		
	</div>	
	<div style="height: 700px;" class="panel panel-6">
	</div>
	
	<div id="cake4" style="height: 690px;" class="panel panel-7">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 4</p>
		</div>		
	</div>
	<div style="height: 700px;" class="panel panel-8">
	</div>
	
	<div id="cup1" style="height: 690px;" class="panel panel-9">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 5</p>
		</div>		
	</div>
	<div style="height: 700px;" class="panel panel-10">
	</div>
	
	<div id="cup2" style="height: 690px;" class="panel panel-11">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions 6</p>
		</div>		
	</div>
	<div style="height: 700px;" class="panel panel-12">
	</div>	
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#c_secondary").hide().delay("300").slideDown(400);
	$("#peBody").removeClass();
	$("#peBody").addClass("services");
	$("#peBody").css("padding-top","75px");	
	$("#c_catalogue").addClass("active");
	//$('a[href="#cake1"]').trigger('click');
});
</script>
<?php
get_footer();
?>