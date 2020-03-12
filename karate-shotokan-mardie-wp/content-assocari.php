<?php 
    // ADVANCED CUSTOMER FIELD
    $section_asso_caritative_heading         = get_field('section_asso_caritative_heading');
    $section_asso_caritative_subheading   = get_field('section_asso_caritative_subheading');
    $section_asso_caritative_body        = get_field('section_asso_caritative_body');

?>
 
 <!-- Portfolio -->
<section class="page-section bg-light" id="assocari">
  <div class="container">
    <div class="content-section-heading text-center pb-5 my-5">
      <h2 class="heading-secondary heading-secondary--1"><?php echo $section_asso_caritative_heading; ?></h2>
      <h3 class="text-secondary"><?php echo $section_asso_caritative_subheading; ?></h3>

      <?php if( !empty($section_asso_caritative_body)	) : ?>
        <p class="lead">
          <?php echo $section_asso_caritative_body; ?>
        </p>
      <?php endif; ?>
      
    </div>

    

    <div class="row no-gutters">
      <?php $loop = new WP_Query( array( 'post_type' => 'asso_caritative', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
			
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
      
      <div class="col-lg-6">
        <div class="gallery mb-0">
          <div class="gallery__item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h4><?php the_title(); ?></h4>
                <p class="mb-0"><?php the_content(); ?></p>
              </span>
            </span>
            <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>">
          </div>
        </div>
      </div><!-- ./ col -->

      <?php endwhile; wp_reset_query(); ?>
    </div>
      
  </section>