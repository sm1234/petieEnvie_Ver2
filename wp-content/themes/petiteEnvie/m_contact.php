<?php
/*
Template Name: Mobile Contact
*/
require_once 'mobile_header.php';
?>

<body class="contact">
	
<div id="mobile-wrapper">

<a href="#" id="section-nav">Menu</a>

<nav>
	<ul class="primary">
		<li><a href="index.php">About</a></li>
		<li><a href="http://localhost/forum2/m-services/">catalogue</a></li>
		<li><a href="case-studies.php">Blog</a></li>
		<li><a href="venues.php">Gallery</a></li>
		<li class='active'><a href="http://localhost/forum2/m-contact/">Contact</a></li>
	</ul>
</nav>

<div id="page">	

<div class="panel">

					<p style="font-size:40px; font-weight: bold;">-<br>Contact<br>-</p>
					<p>Address Goes Here</p><br/>
					<p class="maquette">Tel: XX XXXX XXXX<br><br/><br/>Email <a class="contact-link" href="mailto:queries@petiteenvie.com">queries@petiteenvie.com</a></p>
					
			<table style="width:300px;">
						<tbody><tr>
							<td><a id="tw"></a></td>
							<td><a id="fb"></a></td>
						
						
							<td><a id="ins"></a></td>
							<td><a id="pin"></a></td>
						</tr>
					</tbody></table>					
</div>

</div>
</div>
<?php 

wp_footer(); ?>
</body>
</html>