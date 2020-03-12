<?php
?>


 <!-- div gallery -->
 <section class="section-gallery">
    <div class="row no-gutters galleryShowcase">
        <?php $loop = new WP_Query( array( 'post_type' => 'ksm_gallery', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-2 col-md-4">
        <div class="parent" onclick="">
            <div class="child bg-three">
            <img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url(); }?>" alt="">
            <span><?php the_title(); ?></span>
            </div>
        </div>
        </div><!-- ./ box 1 -->
        <?php endwhile; wp_reset_query(); ?>
        
    </div>
  </section>