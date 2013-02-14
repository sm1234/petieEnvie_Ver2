<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="brand">Petite Envie</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="navbar-form pull-right">
			<a title="Twitter" href="#" target="_blank" id="tw">Twitter</a>
			<a title="Facebook" href="#" target="_blank" id="fb">Twitter</a>
			<a title="Pinterest" href="#" target="_blank" id="pin">Twitter</a>
			<a title="Instagram" href="#" target="_blank" id="ins">Twitter</a>
            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div id="page">
	<div style="height: 690px;" class="panel panel-1 current">
	<header>
	<h1></h1>
	</header>
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions</p>
		</div>	
	</div>

	
	<div style="height: 690px;" class="panel panel-2">

	</div>


	<div style="height: 690px;" class="panel panel-3">
		<div style="position: absolute; margin: 0px; top: 400.6px; left: 15px;" class="headline-block first center panel-block">
			<p>Serving inspired ideas, sumptuous cakes and memorable occasions</p>
		</div>		
	</div>

	
	<div style="height: 700px;" class="panel panel-4">
	</div>
</div>
<div class="footer">Here is my footer</div>
<?php get_footer(); ?>