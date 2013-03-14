<?php
get_header();
?>
<div id="page">
	<div id="about_page" style="height: 690px; background-image: url('<?php echo get_template_directory_uri().'/img/about1.png' ?>')" class="panel current">
	</div>
	
<?php
$about=new WP_Query();
$about->query('tag=about&order=ASC');
if ($about->have_posts()) : 
while ( $about->have_posts() ) : $about->the_post();
$postid = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id();
$feat_img = wp_get_attachment_url($post_thumbnail_id);
?>

<div id="about_page" style="height: 690px; background-image: url('<?php echo $feat_img;  ?>')" class="panel">				
</div>

<?php
endwhile;
endif;
?>
	
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#peBody").removeClass();
	$("#peBody").addClass("about");
	$(".Oursecondary").hide();
	var navigationHeight = jQuery('.navbar').height();
	jQuery('body').css('padding-top', navigationHeight);
});
</script>

<?php
get_footer();
?>