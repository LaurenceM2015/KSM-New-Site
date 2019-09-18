<?php

// ABOUT THE KARATE CLUB

   $about_us_heading      = get_field('about_us_heading');
   $about_us_image        = get_field('about_us_image');
   $about_us_subheading   = get_field('about_us_subheading');
   $about_us_description  = get_field('about_us_description');

?>

<!-- apropo de nous -->
<section id="apropodenous" class="page-section projects-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pb-5">
        <h2 class="mb-5 heading-secondary heading-secondary--1"><?php echo $about_us_heading; ?></h2>
      </div>
    </div>

    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
      <div class="col-xl-5 col-lg-7">
        <div class="text-center wow fadeInLeft">
          <img class="img-fluid mb-3 mb-lg-0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/profs3.jpg" alt="Les Professeurs de KSM, Valerie Mabilleau et Fabien Poulin">
          <!-- If user uploaded image -->
        <?php if( !empty($about_us_image)	) : ?>
          <img src="<?php echo $about_us_image['url']; ?>"alt="<?php echo $about_us_image['alt']; ?>">
        <?php endif; ?>
      </div>
    </div>
      <div class="col-xl-7 col-lg-5 wow fadeInRight">
        <div class="featured-text text-center text-lg-left">
          <h3><?php echo $about_us_subheading; ?></h3>
          <p class="text-black-50 ">
          <?php echo $about_us_description; ?>
          </p>
        </div>
      </div>
    </div>
  </div><!-- container -->
</section><!-- a propos de nous -->