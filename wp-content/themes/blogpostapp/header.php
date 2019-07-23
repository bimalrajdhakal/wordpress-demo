<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blogpostapp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/blog-home.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blogpostapp' ); ?></a>

<!-- header starts here  -->

<header>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Word Press Blog Post App</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	  	<!-- Nav menu starts here  -->
		  <?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'        => 'nav',
				'container-class' =>'collapse navbar-collapse',
				'menu-class' =>'navbar-nav ml-auto'
			) );
	  ?>

    </div>
  </nav>
  <!-- Navigation ends here -->
</header>

<!-- header ends here  -->
