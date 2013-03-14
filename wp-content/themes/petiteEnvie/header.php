
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
          <a href="<?php bloginfo('url')?>" class="brand" style="margin-left:20px;"><img src="<?php echo get_template_directory_uri().'/img/logo2.jpg' ?>"/></a>
              <ul id="c_primary" class="nav">
              <li id="c_about"><a href="<?php bloginfo('url')?>/home-3/">About</a></li>
              <li id="c_catalogue"><a href="<?php bloginfo('url')?>/main-catalogue/">Catalogue</a></li>                     
              <li id="c_gallery"><a href="<?php bloginfo('url')?>/gallery/">Gallery</a></li>
              <li id="c_contact"><a href="<?php bloginfo('url')?>/contact-us-3/">Contact</a></li>
              <li id="c_blog"><a href="<?php bloginfo('url')?>/blog/">Blog</a></li>
            </ul>
            <ul class="nav pull-right" style="margin-right:20px;">
				<li id="contactUs" class="dropdown">
                      <a href="#" id="contactUs" role="button" class="dropdown-toggle" data-toggle="dropdown" style="padding: 7px 3px 8px;">Follow Us<b class="caret"></b></a>
                      <div class="dropdown-menu" role="menu" aria-labelledby="contactUs" style="height:25px">
						<a id="tw"></a>
							<td><a id="fb"></a>
						<a id="ins"></a>
							<a id="pin"></a>
						
                      </div>
                </li>
			</ul>      
        </div>
      </div>
      <div class="navbar-inner Oursecondary" style="font-size: 12px; height: 25px;">
              <div class="container" style="height: 25px;">
          <div id = "divSecondary">
            <ul id="c_secondary" class="nav" style="display: block;">
              <li><a href="<?php bloginfo('url')?>/tea-cakes/" rel="tea-cakes">Tea Cakes</a></li>
              <li><a href="<?php bloginfo('url')?>/layer-cakes/" rel="layer-cakes">Layer Cakes</a></li>
              <li><a href="<?php bloginfo('url')?>/cheese-cakes/" rel="cheese-cakes">Cheesecakes</a></li>
              <li><a href="<?php bloginfo('url')?>/brownies/" rel="brownies">Brownies</a></li>
              <li><a href="<?php bloginfo('url')?>/cookies/" rel="cookies">Cookies</a></li>
              <li><a href="<?php bloginfo('url')?>/macarons/" rel="macarons">Macarons</a></li>
              <li><a href="<?php bloginfo('url')?>/muffins/" rel="muffins">Muffins</a></li>             
              <li><a href="<?php bloginfo('url')?>/cup-cakes/" rel="cup-cakes">Cupcakes</a></li>
              <li><a href="<?php bloginfo('url')?>/gifts/" rel="gifts">Gifts</a></li>
              <li><a href="<?php bloginfo('url')?>/cakes-by-consultation/" rel="cakes-by-consultation">Cakes By Consultation</a></li> 
            </ul>            
          </div>
        </div>
      </div>
</div>
