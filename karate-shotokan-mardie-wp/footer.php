<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Landing_Page
 */

?>

	

<?php wp_footer(); ?>

<footer>
    <p>Karate Shotokan Mardie Copyright &copy; 2014 - <a href="#">Term</a> &middot; <a href="#">Condition</a>
      
  </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- jquery parallax plugin -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_directory') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/vendor/js/wow.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>
    <script>
	  new WOW().init();
	  
	  $('.parallax-BkgImg-jg').parallax({imageSrc: '<?php bloginfo('stylesheet_directory'); ?>assets/css/img/karate-min.jpg'});

    </script>

</body>
</html>
