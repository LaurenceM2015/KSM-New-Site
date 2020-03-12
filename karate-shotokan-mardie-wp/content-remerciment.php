<?php
/* Fall back image */	

  $thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

    $section_remerciment_heading         = get_field('section_remerciment_heading');
   
    $section_remerciment_body        = get_field('section_remerciment_body');
    // $section_remerciment_bkg_image       = get_field('section_remerciment_bkg_image');

?>

<!-- remerciment 
<section class="section-bkg__img section-bkg__img--1 page-section h-100 parallax-window" data-z-index="1" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/remerciment-min.jpg"> -->

<section class="section-bkg__img section-bkg__img--1 page-section h-100 parallax-window" data-z-index="1" data-parallax="scroll" 
    data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/remerciment-min.jpg">
    
  <div class="container info">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-white heading-secondary heading-secondary--1"><?php echo $section_remerciment_heading; ?></h2>
        
      </div>
    </div><!-- row 1 -->
        
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center my-5">
        <div class="stage__box wow fadeIn h-100">
          <p class="lead text-center">
            <?php echo $section_remerciment_body; ?>
          </p>
        </div>
        
      </div>
    </div>
  </div><!-- container -->
</section>