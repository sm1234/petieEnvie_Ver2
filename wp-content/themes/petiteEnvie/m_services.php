<?php
/*
Template Name: Mobile Services
*/
require_once 'mobile_header.php';
?>

<body class="about">

<div id="mobile-wrapper">

<a href="#" id="section-nav">Menu</a>

<nav>
	<ul class="primary">
		<li><a href="<?php bloginfo('url')?>/mobile/">About</a></li>
		<li class='active'><a href="<?php bloginfo('url')?>/m-services/">Catalogue</a></li>
		<li><a href="<?php bloginfo('url')?>/m-contact/">Contact</a></li>
	</ul>
</nav>

<div id="page">
<?php
$catalogue=new WP_Query();
$catalogue->query('tag=m-catalogue&order=ASC');
if ($catalogue->have_posts()) : 
while ( $catalogue->have_posts() ) : $catalogue->the_post();
$postid = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id();
$feat_img = wp_get_attachment_url($post_thumbnail_id);
?>
<img src="<?php echo $feat_img;  ?>">
<?php
$all_the_tags = get_the_tags();
if ($all_the_tags){
foreach($all_the_tags as $this_tag) {
if (strpos($this_tag->name, '#', 0) === 0) {
?>
<div class="panel" style="background-color : <?php echo $this_tag->name; ?>">
	<p class="intro"><?php the_title(); ?></p>
	<p><?php the_content(); ?></p>	
</div>
</div>
<?php
}
}
}
endwhile;
endif;
?>

</div>
<?php 

wp_footer(); ?>
</body>
</html>