<?php 
    // ADVANCED CUSTOMER FIELD
    $stage_section_title         = get_field('stage_section_title');
    $stage_section_description   = get_field('stage_section_description');
    $stage_section_image         = get_field('stage_section_image');

?>
 
 <!-- Section Les Stage bg image -->
 <section id="stage" class="section-stage page-section h-100 parallax-window" 
    data-z-index="1" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/karate-min.jpg">
    <div class="stage info">
      <div class="container stage__container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <h2 class="heading-secondary heading-secondary--2"><?php echo $stage_section_title; ?></h2>
          </div>
        </div><!-- ./ row heading -->

        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 u-text-center ">
            <div class="stage__box lead wow fadeIn">
                
            <p>
            <?php echo $stage_section_description; ?>
            </p>
            </div>
          </div>
          <div class="col-lg-3 text-center my-5 animated fadeInUp">
            <div>
              <?php if( !empty($stage_section_image)	) : ?>
                <img src="<?php echo $stage_section_image['url']; ?>"alt="<?php echo $stage_section_image['alt']; ?>" class="img-fluid">
              <?php endif; ?>
            </div>
          </div>
        </div> <!-- ./ row content -->
      </div><!-- ./ Container -->
    </div>
</section>