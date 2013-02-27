<?php
/*
Template Name: Mobile
*/
require_once 'mobile_header.php';
?>

<body class="about">

<div id="mobile-wrapper">

<a href="#" id="section-nav">Menu</a>

<nav>
	<ul class="primary">
		<li><a href="index.php">About</a></li>
		<li><a href="http://localhost/forum2/m-services/">catalogue</a></li>
		<li><a href="case-studies.php">Blog</a></li>
		<li><a href="venues.php">Gallery</a></li>
		<li><a href="http://localhost/forum2/m-contact/">Contact</a></li>
	</ul>
</nav>
<div id="page">


<img src="<?php bloginfo('template_directory')?>/img/c_s2.jpg">
<div class="light-pink panel">
	<p class="intro">Welcome to Petite Envie</p>
	<p>We believe in creating the most delicious items only</p>	
</div>

<img src="<?php bloginfo('template_directory')?>/img/c_s4.jpg">

<div class="pink panel">
	<p class="intro">Welcome to Petite Envie</p>
	<p>We believe in creating the most delicious items only</p>	
</div>

<img src="<?php bloginfo('template_directory')?>/img/c_s6.jpg">

<div class="light-blue panel">
	<p class="intro">Welcome to Petite Envie</p>
	<p>We believe in creating the most delicious items only</p>
</div>

</div>

</div>

<?php 

wp_footer(); ?>
</body>
</html>