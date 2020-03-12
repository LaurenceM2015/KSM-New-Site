<?php 
    // ADVANCED CUSTOMER FIELD
    $stage_sable_dolonne_heading         = get_field('stage_sable_dolonne_heading');
    $stage_sable_dolonne_body            = get_field('stage_sable_dolonne_body');
    
?>

<section class="section-primary slogan" id="slogan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 u-text-center my-5 mx-auto">
              <h2 class="text-white heading-secondary"><?php echo $stage_sable_dolonne_heading; ?></h2>
              <p class="my-5 lead mx-auto">
                <?php echo $stage_sable_dolonne_body; ?>       
              </p>
            </div>
        </div>
    </div>
</section><!-- Le Karate -->