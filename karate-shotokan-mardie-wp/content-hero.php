 
 <?php 
 
   // CUSTOM FIELD
  $hero_section_title     = get_field('hero_section_title');
  $hero_section_description   = get_field('hero_section_description');
  $hero_section_thumbnail     = get_field('hero_section_thumbnail');
  $hero_section_button        = get_field('hero_section_button');
 
 ?>
 
 <!-- main Header -->
 <header class="header text-white" id="paralaxBkgimgJS">
      <div class="header__jumbotron jumbotron-fluid">
          <div class="container header__container h-100">
              <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-9">
                  
                  <div class="header__text hero-text animated fadeInLeft">
                    <h1 class="text-left"><?php echo $hero_section_title; ?></h1>
                      <div class="">
                      <p class="lead my-5"><?php echo $hero_section_description; ?></p>
                      <a class="btn btn--orange js-scroll-trigger" href="#slogan"><?php echo $hero_section_button; ?></a>
                      </div>
                      
                  </div>
                  
                </div>
                <div class="col-md-3">
                  <div class="header__img animated fadeInUp text-right">
                  <?php if( !empty($hero_section_thumbnail)	) : ?>
                    <img class="img-fluid mb-3 mb-lg-0" src="<?php echo $hero_section_thumbnail['url']; ?>"alt="<?php echo $hero_section_thumbnail['alt']; ?>" alt="KSM shine">
              
                  <?php endif; ?>
                </div>
                </div>
              </div>
            </div>
      </div>

     
      
    </header>