<?php
  $section_competition_rencontre_title      = get_field('section_competition_rencontre_title');

  $section_competition_title                  = get_field('section_competition_title');
  $section_competition_description            = get_field('section_competition_description');
  $section_competition_image                  = get_field('section_competition_image');

  $section_rencontre_title                  = get_field('section_rencontre_title');
  $section_rencontre_description           = get_field('section_rencontre_description');
  $section_rencontre_image                  = get_field('section_rencontre_image');

?>


 <!-- LES COMPETITION-->
 <section class="page-section projects-section" id="competition">
    <div class="wow fadeIn">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-secondary heading-secondary--1 mb-5 pb-4"><?php echo $section_competition_rencontre_title; ?> </h2>
                </div>
            </div>

              <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6">
                   <div class="wow fadeInLeft">
                    <?php if( !empty($section_competition_image)	) : ?>
                    <img src="<?php echo $section_competition_image['url']; ?>"alt="<?php echo $section_competition_image['alt']; ?>" class="img-fluid w-100">
                    <?php endif; ?>
                    </div>
                    
                </div>

                <div class="col-lg-6 align-items-center">
                    <div class="bg-black text-center project h-100 section-primary wow fadeInRight">
                        <div class="d-flex">
                            <div class="project-text w-100 h-100 text-center text-lg-left">
                            <h4 class="text-white page-header page-header--1 mt-0"><?php echo $section_competition_title; ?></h4>
                            <p class="mb-0">
                               <?php echo $section_competition_description; ?>
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ./ row -->

           <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <div class="wow fadeInRight">
            <?php if( !empty($section_rencontre_image)	) : ?>
                <img src="<?php echo $section_rencontre_image['url']; ?>"alt="<?php echo $section_rencontre_image['alt']; ?>" class="img-fluid">
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black h-100 project section-primary wow fadeInLeft">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto">
                  <h4 class="text-white page-header page-header--1 mt-0"><?php echo $section_rencontre_title; ?></h4>
                  <p class="mb-0 text-white">
                    <?php echo $section_rencontre_description; ?>
                  </p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        </div> <!-- container -->
    </div>
</section><!-- Competition -->
