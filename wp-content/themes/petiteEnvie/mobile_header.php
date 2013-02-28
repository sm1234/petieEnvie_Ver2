<html>
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"></meta>
<meta name="viewport" content="width=480" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link media="screen" rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/mobile-style.css">
<?php
wp_enqueue_script("jquery");
wp_register_script('abc', get_template_directory_uri().'/js/mobile-script.js',array('jquery'));

wp_enqueue_script('abc');

?>
</head>

	
