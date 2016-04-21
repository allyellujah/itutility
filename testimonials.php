<?php $testimonials = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'testimonials'
          )); ?>
    <?php if($testimonials-> have_posts()): ?>

<!-- 
===========================
TESTIMONIALS SECTION BEGINS
===========================
-->
<section class="testimonials" id="testimonials">
  <h2>Testimonials</h2>
  <div class="main-carousel">
    <?php while($testimonials-> have_posts()): ?>
    <?php $testimonials-> the_post(); ?>
    <div class="carousel-cell">
      <div class="card clearfix">
        <?php $logo = get_field('company_logo'); ?>
        <div class="img">
          <img src="<?php echo $logo['sizes']['medium']; ?>" class="logo" alt="<?php the_field('company'); ?> logo">
        </div><!-- .img -->
        <blockquote>
          <?php the_content(); ?>
        </blockquote>
      </div><!-- .card -->
        <p class="src"><?php the_field('quote_source'); ?></p>
        <p class="company"><a href="<?php the_field('company_hyperlink'); ?>" target="_blank"><?php the_field('company'); ?></a></p>
    </div><!-- .carousel-cell -->
  <?php endwhile; ?><!-- testimonials custom fields -->
  </div><!-- .main-carousel -->
    <?php wp_reset_postdata(); ?>
   </section><!-- .testimonials -->
<!-- 
=========================
TESTIMONIALS SECTION ENDS
=========================
-->
<?php endif; ?>