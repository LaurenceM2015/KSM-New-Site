<?php 
    // ADVANCED CUSTOMER FIELD
    $info_feature_heading         = get_field('info_feature_heading');
    $info_feature_description     = get_field('info_feature_description');

    $info_feature_image           = get_field('info_feature_image');
    $info_feature_description     = get_field('info_feature_description');
    $add_button                   = get_field('add_button');
    $button_text                  = get_field('button_text');
    $button_url                   = get_field('button_url');



   
    

?>

<!-- Blog Section -->
<section class="section-features page-section" id="blogNews">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pb-5">
        <h2 class="mb-5 heading-secondary heading-secondary--1"><?php echo $info_feature_heading; ?></h2>
      </div>
    </div>
      
    <?php $loop = new WP_Query( array( 'post_type' => 'info_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

      <div class="row">
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php
            $info_feature_image	    = get_field('info_feature_image');
						$button_url	            = get_field('button_url');
						$button_text	          = get_field('button_text');	
					?>
          
        <div class="col-lg-4 my-4">
          <div class="feature-box card h-100">
            <div class="card-img-top feature-box__img-box">
              <img class="img-fluid feature-box__img" src="<?php echo $info_feature_image[url]; ?>" alt="<?php echo $info_feature_image[alt]; ?>">
            </div>
            <div class="card-body">
              <h4 class="card-title feature-box__text"><?php the_title(); ?></h4>
              <p class="card-text"><?php the_content(); ?></p>
              <?php if( !empty($button_text)	) : ?>
                <a role="button" href="<?php echo $button_url; ?>" target="_blank" class="btn-text"><?php echo $button_text; ?> &rarr;</a>
              <?php endif; ?>
            </div>
          </div>
        </div> <!-- feature box 1 -->
  
      <?php endwhile; wp_reset_query(); ?>
    </div><!-- row -->
  </div> <!-- container -->   
</section>
