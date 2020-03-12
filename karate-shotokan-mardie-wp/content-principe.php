<?php
   // SECTION CHARITE PARRAIN
   $section_principe_heading         = get_field('section_principe_heading');
   $section_principe_body   = get_field('section_principe_body');
  


?>
 <!-- NOS PRINCIPE -->
 <section class="section-primary slogan" id="slogan">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 u-text-center my-5">
          <h2 class="text-white"><?php echo $section_principe_heading; ?></h2>
          <p class="my-5 lead">
            <?php echo $section_principe_body; ?>
          </p>
           
        </div>
      </div>
    </div>
  </section><!-- Nos Principe -->