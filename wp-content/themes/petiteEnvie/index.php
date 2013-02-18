<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>



    
<div id="page">
	<div style="height: 690px;" class="panel panel-1 current">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions</p>
		</div>	
	</div>

	
	<div style="height: 690px;" class="panel panel-2">

	</div>


	<div style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions</p>
		</div>		
	</div>

	
	<div style="height: 700px;" class="panel panel-4">
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	$("#peBody").removeClass();
	$("#peBody").addClass("about");
	$("#peBody").css('padding-top','35px');	
});
</script>
<?php get_footer(); ?>