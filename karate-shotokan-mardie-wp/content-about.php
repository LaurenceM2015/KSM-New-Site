 <?php

 // ABOUT THE KARATE CLUB

    $about_us_heading      = get_field('about_us_heading');
    $about_us_image        = get_field('about_us_image');
    $about_us_subheading   = get_field('about_us_subheading');
    $about_us_description  = get_field('about_us_description');

    // Team Member Section 

    $section_lien	            = get_field('section_lien');
    $section_url	          = get_field('section_lien');	
	

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
            <div class="text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
              
            	<!-- If user uploaded image -->
            <?php if( !empty($about_us_image)	) : ?>
               <img class="img-fluid mb-3 mb-lg-0" src="<?php echo $about_us_image['url']; ?>"alt="<?php echo $about_us_image['alt']; ?>" alt="Les Professeurs de KSM, Valerie Mabilleau et Fabien Poulin">
              
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-7 col-lg-5 wow fadeInRight">
          <div class="featured-text text-center text-lg-left">
            <h3><?php echo $about_us_subheading; ?></h3>
            <p class="text-black-50">
            <?php echo $about_us_description; ?>
            </p>
            <?php $loop = new WP_Query( array( 'post_type' => 'ksm_professeur', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
              <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <ul class="list-unstyled text-black-50">
              <li>
                <span><?php the_title(); ?></span> 
                <span><?php the_field('section_professeur_title'); ?></span> 
                <span><i class="<?php the_field('section_professeur_icon'); ?> fa-color"></i>
                <?php the_field('section_professeur_dan'); ?></span>
              </li>
            </ul>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
      
    </div><!-- container -->

  <!-- Section Lien -->

  <div class="container pt-5">
    <div class="row justify-content-center">
      <?php $loop = new WP_Query( array( 'post_type' => 'ksm_lien', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php
          $section_lien	            = get_field('section_lien');
          $section_url	          = get_field('section_url');	
        ?>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a href="<?php the_field('section_url'); ?>" target="_blank">
          <img class="img-fluid d-block mx-auto" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
        </a>
      </div>

      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>





</section><!-- a propos de nous -->