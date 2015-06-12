<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // wp_head(); // wordpress head functions ?>

		<link href="<?php theHTML5BoilerplateDirectory(); ?>css/normalize.css" rel="stylesheet">
		<link href="<?php theSkeletonDirectory(); ?>css/skeleton.css" rel="stylesheet">
		<link href="<?php theActiveThemeDirectory(); ?>css/main.css" rel="stylesheet">

		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- Standard buttons -->
<div class="container">
<!--<img src = "http://upload.wikimedia.org/wikipedia/en/8/8d/Orpington_F.C._logo.png"> -->
<img id="orpfc" src = "http://i.imgur.com/UTOWr9J.jpg">    
<a href="http://kbailey.raveweb.net/test/home2-2/"><h1>Orpington FC</h1></a>
</div>
    
<div class= "container">
        <nav id="mainnav">
            <a class="navbar" href="http://kbailey.raveweb.net/test/tickets/">Tickets</a>
            <a class="navbar" href="http://kbailey.raveweb.net/test/fixtures/">Fixtures</a>
            <a class="navbar" href="http://kbailey.raveweb.net/test/news/">News</a>
            <a class="navbar" href="http://kbailey.raveweb.net/test/the-club/">The Club</a>
        </nav>
        <select onchange="open(this.value,'','_blank');" id="dropdown">
            <option class="navbar" value="http://kbailey.raveweb.net/test/tickets/">Tickets</option>
            <option class="navbar" value="http://kbailey.raveweb.net/test/fixtures/">Fixtures</option>
            <option class="navbar" value="http://kbailey.raveweb.net/test/news/">News</option>
            <option class="navbar" value="http://kbailey.raveweb.net/test/the-club/">The Club</option>
        </select>
</div>