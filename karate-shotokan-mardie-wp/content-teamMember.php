<?php
  $section_professeur_heading       = get_field('section_professeur_heading');
	$section_lien	            = get_field('section_lien');
	$section_url	          = get_field('section_lien');	
?>

 <!-- Team Sections -->
<section class="bg-light page-section section-team" id="team">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="heading-secondary heading-secondary--1 mb-5 pb-5 text-center"><?php echo $section_professeur_heading; ?></h2>
      </div>
    </div>

    <div class="row text-center">
      <?php $loop = new WP_Query( array( 'post_type' => 'ksm_professeur', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>


      <div class="col-sm-4">
        <div class="team h-100">
          <div class="team__member">
            <img class="mx-auto rounded-circle team__img" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
            <h4 class="team__heading team__name"> <?php the_title(); ?></h4>
            <p class="text-muted team__title">
              <span class="team__title--main">
               <?php the_field('section_professeur_title'); ?>
              </span>
              <span class="team__title--sub">
                <i class="<?php the_field('section_professeur_icon'); ?> fa-color"></i>
                <?php the_field('section_professeur_dan'); ?>
              </span>
              
            </p>
          </div>
        </div> 
      </div> <!-- team-box 1-->
      
      <?php endwhile; wp_reset_query(); ?>

      </div> <!-- row -->
         
    </div><!-- container -->
</section>

<?php
?>

 <!-- no lien -->
<section class="section-lien py-5">
  <div class="row">
    <?php $loop = new WP_Query( array( 'post_type' => 'ksm_lien', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php
        $section_lien	            = get_field('section_lien');
        $section_url	          = get_field('section_url');	
      ?>

    <div class="col-md-2 col-sm-4 col-xs-6">
      <a href="<?php the_field('section_url'); ?>" target="_blank">
        <img class="img-fluid d-block mx-auto" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
      </a>
    </div>

    <?php endwhile; wp_reset_query(); ?>
  </div>

  
  
</section>