<?php
  $section_contact_heading       = get_field('section_contact_heading');

  $section_contact_address_title       = get_field('section_contact_address_title');
  $section_contact_address_body       = get_field('section_contact_address_body');

  $section_contact_telephone_title       = get_field('section_contact_telephone_title');
  $section_contact_telephone_body       = get_field('section_contact_telephone_body');

  $section_contact_email_title       = get_field('section_contact_email_title');
  $section_contact_email_body       = get_field('section_contact_email_body');

  $section_contact_tarif_title       = get_field('section_contact_tarif_title');
  $section_contact_tarif_body       = get_field('section_contact_tarif_body');

  $section_contact_tarif_icon       = get_field('section_contact_tarif_icon');
 

  
?>

<!-- CONTACT US -->
<section id="contact" class="page-section section-dark page-contact">
    <div class="container">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12 mb-3 text-center text-white">
            <h2 class="heading-secondary heading-secondary--2"><?php echo $section_contact_heading; ?></h2>
          </div>
        </div>
              
        <div class="row my-5">
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt mb-2"></i>
                <h4 class="text-uppercase m-0"><?php echo $section_contact_address_title; ?></h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <address>
                    <p><?php echo $section_contact_address_body; ?></p>
                  </address>
                </div>
              </div>
            </div>
          </div><!-- contact-box 1-->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt mb-2"></i>
                <h4 class="text-uppercase m-0"><?php echo $section_contact_telephone_title; ?></h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <p>
                  <?php echo $section_contact_telephone_body; ?>
                  </p>
                </div>
              </div>
            </div>
          </div><!-- contact-box 2 -->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <abbr title="Email"></abbr><a href="mailto:valerie.mabilleau@sfr.fr">valerie.mabilleau@sfr.fr</a>
                </div>
              </div>
            </div>
          </div><!-- contact-box 3 -->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-tags mb-2"></i>
                <h4 class="text-uppercase m-0"><?php echo $section_contact_tarif_title; ?></h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <ul class="list-unstyled list-social-icons">
                  
                    <li><?php echo $section_contact_tarif_body; ?>
                    
                      <i class="<?php the_field('section_contact_tarif_icon'); ?>"></i>
                     
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- conctact-box 4 -->

        </div> <!-- row --> 
                   
      </div><!-- fade in -->
 
    </div><!-- container -->
</section><!-- Nos Principe -->