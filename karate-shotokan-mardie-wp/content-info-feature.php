<?php 
    // ADVANCED CUSTOMER FIELD
    $le_titre_des_info         = get_field('le_titre_des_info');
    $la_description_des_info   = get_field('la_description_des_info');

    $button_url				= get_post_meta( 11, 'course_url', true );
	$button_text			= get_post_meta( 11, 'button_text', true );
    

?>

<!-- Blog Section -->
<section class="section-features page-section" id="blogNews">

  <div class="container">
        <div class="row">
          <div class="col-md-12 pb-5">
            <h2 class="mb-5 heading-secondary heading-secondary--1"><?php echo $le_titre_des_info; ?></h2>
          </div>
        </div>
  
        
    <div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'info_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            
        <div class="col-lg-4 my-4">
          <div class="feature-box card h-100">
            <div class="card-img-top feature-box__img-box">
              <img class="img-fluid feature-box__img" src="<?php if( has_post_thumbnail() ){ the_post_thumbnail_url(); } ?>">
            </div>
            <div class="card-body">
              <h4 class="card-title feature-box__text"><?php the_title(); ?></h4>
              <p class="card-text"><?php the_content(); ?></p>
              <a role="button" href="<?php echo $button_url; ?>" target="_blank" class="btn-text"><?php echo $button_text; ?> &rarr;</a>
            </div>
          </div>
        </div> <!-- feature box 1 -->
  
      <?php endwhile; wp_reset_query(); ?>

    </div><!-- row -->
  </div> <!-- container -->   
</section>

