<?php
/*
Template Name: Layer cakes
*/
get_header();
?>

<div id="page">
<?php
$curr = 0;
$catalogue=new WP_Query();
$catalogue->query('tag=layercake&order=ASC');
if ($catalogue->have_posts()) : 
while ( $catalogue->have_posts() ) : $catalogue->the_post();
$postid = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id();
$feat_img = wp_get_attachment_url($post_thumbnail_id);
?>
<?php if ($curr == 0) { ?>
	

	<div id="cake" style="height: 690px; background-image: url('<?php echo $feat_img;  ?>')" class="panel current">
		<header>
		<h1></h1>
		</header>
		
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger"><?php the_title(); ?></p>
			<p><?php the_content(); ?></p>
		</div>
	</div>
<?php } 
else {
?>
<div id="cake" style="height: 690px; background-image: url('<?php echo $feat_img;  ?>')" class="panel">
		
		
		<div style="position: absolute; margin: 0px; top: 100.6px; left: 605px;" class="headline-block first center1 panel-block">
			<p class="larger"><?php the_title(); ?></p>
			<p><?php the_content(); ?></p>
		</div>
	</div>
<?php
}
$curr++;
endwhile;
endif;
?>


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