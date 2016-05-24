<?php $slider = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'slider'
          )); ?>
    <?php if($slider-> have_posts()): ?>

<!-- 
=====================
SLIDER SECTION BEGINS
=====================
-->
<section class="slider main-carousel">
  <?php while($slider-> have_posts()): ?> 
    <?php $slider-> the_post(); ?>
      <div class="carousel-cell">
        <div class="filter"></div>
      <?php $image = get_field('slider_image'); ?>
      <img src="<?php echo $image['sizes']['large']; ?>" class="sliderImage" alt="">
      <div class="contentOverlay">
        <h2 class="headline"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div><!-- .contentOverlay -->
    </div><!-- .carousel-cell --> 
  <?php endwhile; ?><!-- about custom fields -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
   </section><!-- .slider -->
<!-- 
===================
SLIDER SECTION ENDS
===================
-->
