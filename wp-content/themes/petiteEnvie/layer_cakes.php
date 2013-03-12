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

<?php
wp_register_script('jkl', get_template_directory_uri().'/catalogue-script.js',array('jquery'));
wp_enqueue_script('jkl');
?>

<?php
get_footer();
?>