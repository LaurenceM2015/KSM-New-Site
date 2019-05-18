 
 <?php 
 
   // CUSTOM FIELD
    $course_url				= get_post_meta( 11, 'course_url', true );
    $button_text			= get_post_meta( 11, 'button_text', true );
 
 ?>
 
 <!-- main Header -->
 <header class="header text-white" id="paralaxBkgimgJS">
      <div class="header__jumbotron jumbotron-fluid">
          <div class="container header__container h-100">
              <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-7">
                  
                  <div class="header__text hero-text animated fadeInLeft">
                      <h1 class="text-left"><?php bloginfo('name'); ?></h1>
                      <div class="">
                        <p class="lead my-5"><?php bloginfo('description'); ?></p>
                        <a class="js-scroll-trigger btn btn--orange" href="#<?php echo $course_url; ?>"><?php echo $button_text; ?></a>
                      </div>
                      
                  </div>
                  
                </div>
                <div class="col-md-5">
                  <div class="header__img animated fadeInUp text-right">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/shin.jpg" alt="KSM shine">
                </div>
                </div>
              </div>
            </div>
      </div>

     
      
    </header>