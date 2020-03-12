<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Landing_Page
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    
    <!-- Annimate CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

	
	

	 <!-- Custom styles for this template 
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
	 <link href="/assets/css/style.css" rel="stylesheet">
	 -->
	 	
		
	 
		

	
	 

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'karate-shotokan-mardie' ); ?></a>


	<!-- from static site -->

	  <!-- Navigation -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar__brand navbar-brand js-scroll-trigger p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
         <!--  <img src="assets/img/logo.jpg" alt="Karate Shotokan Mardie logo" class="navbar__logo-img"> -->
          <!-- Art Direction -->
          <img srcset="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ksmLogo95x59.jpg 1x, assets/img/ksmLogo196x148.jpg x2" 
		  alt="Karate Shotokan Mardie logo" class="navbar__logo-img">

		 
		  
        </a>

        <button class="navbar__toggler-button navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive" aria-controls="navbarResponsive" 
			aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar__toggler-icon navbar-toggler-icon"></span>
        </button>

		<!-- The WordPress Primary Menu -->
		<?php wp_nav_menu(
			array(
				'theme_location'    => 'menu-1',
				'menu_class'        => 'navbar-nav ml-auto w-100 justify-content-end',
				'container_class'  => 'navbar-collapse collapse navbar-collapse',
				'container_id'    => 'navbarResponsive',
			)
		); ?>

        

      </div><!-- container-fluid -->

    </nav><!-- ./ navbar-nav -->







	
	