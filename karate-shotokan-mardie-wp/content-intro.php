
<?php 
    // ADVANCED CUSTOMER FIELD
    $introduction_section_title         = get_field('introduction_section_title');
    $introduction_section_description   = get_field('introduction_section_description');
    $introduction_section_button        = get_field('introduction_section_button');

?>



<!-- Slogan with primary color -->
<section class="section-primary slogan slogan--img" id="slogan">
     <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <h2 class="text-white heading-secondary"><?php echo $introduction_section_title; ?></h2>
          </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 u-text-center my-5">
               
                <p class="lead">
                    <?php echo $introduction_section_description; ?>
                </p>
                <a class="btn btn--white js-scroll-trigger" href="#apropodenous"><?php echo $introduction_section_button; ?></a>
            </div>
        </div>
     </div>
</section><!-- Le Karate -->