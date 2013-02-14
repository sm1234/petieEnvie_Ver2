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

<body class="about" style="padding-top:35px;">
<div id="page" class="hfeed site">
