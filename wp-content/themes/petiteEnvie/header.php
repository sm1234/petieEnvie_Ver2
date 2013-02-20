<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html>
<!--<![endif]-->
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.css">
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap-responsive.css">
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style.css">
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/backgrounds.css">
<?php
wp_enqueue_script("jquery");
wp_register_script('abc', get_template_directory_uri().'/js/bootstrap.js',array('jquery'));
wp_register_script('def', get_template_directory_uri().'/js/extra.js',array('jquery'));
wp_register_script('ghi', get_template_directory_uri().'/js/script.js',array('jquery'));
wp_enqueue_script('abc');
wp_enqueue_script('def');
wp_enqueue_script('ghi');
?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body id="peBody">

<a href="#" id="next-panel">Next Panel</a>
<a href="#" id="prev-panel">Prev Panel</a>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div id="primaryMenu" class="navbar-inner">
        <div class="container">
          <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://localhost:8888/petieEnvie_Ver2" class="brand">Petite Envie</a>
          <div class="nav-collapse collapse">
            <ul id="c_primary" class="nav">
<<<<<<< HEAD
             <!-- <li id="c_about"><a href="http://localhost/forum2/home-3/">About</a></li> -->
              <li id="c_catalogue"><a href="http://localhost/forum2/services-3/">Catalogue</a></li>          
              <li id="c_contact"><a href="http://localhost/forum2/contact-us-3/">Contact</a></li>
=======
              <li id="c_about"><a href="http://localhost:8888/petieEnvie_Ver2/about/">About</a></li>
              <li id="c_catalogue"><a href="http://localhost:8888/petieEnvie_Ver2/services/">Catalogue</a></li>
              <li id="c_contact"><a href="http://localhost:8888/petieEnvie_Ver2/contact">Contact</a></li>
>>>>>>> Removed unwanted links in header
            </ul>
            <ul class="nav pull-right">
				<li id="contactUs" class="dropdown">
                      <a href="#" id="contactUs" role="button" class="dropdown-toggle" data-toggle="dropdown">Follow Us<b class="caret"></b></a>
                      <div class="dropdown-menu" role="menu" aria-labelledby="contactUs">
						<table style="width:300px;">
						<tbody><tr>
							<td><a id="tw"></a>&nbsp;&nbsp;<a href="#">Twitter</a></td>
							<td><a id="fb"></a>&nbsp;&nbsp;<a href="#">Facebook</a></td>
						</tr>
						<tr>
							<td><a id="ins"></a>&nbsp;&nbsp;<a href="#">Instagram</a></td>
							<td><a id="pin"></a>&nbsp;&nbsp;<a href="#">Pinterest</a></td>
						</tr>
					</tbody></table>
                      </div>

                </li>
			</ul>

            
          </div><!--/.nav-collapse -->
        </div>
      </div>
            <div class="navbar-inner Oursecondary">
              <div class="container">
          <div id = "divSecondary" class="nav-collapse collapse">
            <ul id="c_secondary" class="nav">
              <li><a href="#cake1" rel="cake1">TEA CAKES</a></li>
              <li><a href="#cake2" rel="cake2">LAYER CAKES</a></li>
              <li><a href="#cake3" rel="cake3">CUPCAKES</a></li>
              <li><a href="#cake4" rel="cake4">CHEESECAKES</a></li>
              <li><a href="#cup1" rel="cup1">BROWNIES</a></li>
              <li><a href="#cup2" rel="cup2">COOKIES</a></li>
            </ul>            
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<header>
	<h1></h1>
</header>