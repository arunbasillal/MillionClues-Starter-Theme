<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid">
	
	<!-- Main Menu Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  
	  <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  
	  <!-- The WordPress Primary Menu -->
	  <?php wp_nav_menu(
		array(
		  'theme_location'	=> 'main-menu',
		  'menu_class'		=> 'navbar-nav ml-auto w-100 justify-content-end',
		  'container_class'	=> 'collapse navbar-collapse',
		  'container_id'    => 'navbarNav',
		)
	  ); ?>
	</nav>
	
</div>