<?php
   // SECTION CHARITE PARRAIN
   $section_charite_heading         = get_field('section_charite_heading');
   $section_charite_title   = get_field('section_charite_title');
   $section_charite_body        = get_field('section_charite_body');
   $section_charite_image_top       = get_field('section_charite_image_top');
   $section_charite_image_bottom       = get_field('section_charite_image_bottom');


?>

 <!-- Section Les Charite -->
 <section class="section-charite page-section" id="charite">
        
        <div class="container">
              
          <div class="row">
            <div class="col-md-12">
              <h2 class="heading-secondary heading-secondary--1 mb-5 pb-5 text-center"><?php echo $section_charite_heading; ?></h2>
            </div>
          </div>
              
          <div class="row wow fadeIn align-items-center section-primary no-gutters">
    
            <div class="col-lg-4">
              <div class="article h-100 wow fadeInLeft">
                <div class="article__left h-100 w-100">
                    <img src="<?php echo $section_charite_image_top[url]; ?>" alt="<?php echo $$section_charite_image_top[alt]; ?>" class="img-fluid w-100 article__img">
                    <img src="<?php echo $section_charite_image_bottom[url]; ?>" alt="<?php echo $section_charite_image_bottom[alt]; ?>" class="img-fluid w-100 article__img">
                </div>
              </div>
            </div>
               
            <div class="col-lg-8">
              <div class="article h-100 wow fadeInRight px-5">
                <div class="article__right h-100">
                    <div class="">
                        <h3 class="heading-tertiary text-white text-center pt-4"><?php echo $section_charite_title; ?></h3>
                    </div>
                    <p class="article__text lead">
                        <?php echo $section_charite_body; ?>
                    </p>
                </div>
              </div>
    
            </div>
    
          </div><!-- row -->
              
        </div><!-- container -->
          
      </section>