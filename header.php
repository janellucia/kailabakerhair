<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <meta name="Description" content="Kaila is a Hairstylist and Make-up Artist in Toronto.">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
  <?php wp_head(); ?>
</head>

<div class="js">
<body <?php body_class(); ?>>
<div id="preloader"></div>
<a href="#main" class="hidden">Skip to main content</a>
<a href="#footer" class="hidden">Skip to footer</a>

<header>
  <div class="container">
    <h1>
      <a class="site-title" data-in-effect="fadeInUpBig" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h1>

    <h2>
      <a class="site-sub-title" data-in-effect="fadeInUpBig" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a>
    </h2>
    <div class="menu-container">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

