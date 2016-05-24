<?php $benefits = new WP_Query(array(
            'posts_per_page'=> -1,
            'post_type'=> 'benefits_section'
          )); ?>
    <?php if($benefits-> have_posts()): ?>

<!-- 
=======================
BENEFITS SECTION BEGINS
=======================
-->
<section class="benefits clearfix" id="benefits">
  <?php while($benefits-> have_posts()): ?> 
    <?php $benefits-> the_post(); ?>
    <h2><?php the_title(); ?></h2>
      <div class="description">
        <?php the_content(); ?>
      </div><!-- .description -->
      <div class="content">
      <?php while(has_sub_fields('list')): ?>
        <div class="item clearfix"> 
          <div class="bullets">
            <i class="fa fa-check" aria-hidden="true"></i>
          </div><!-- .bullets -->
          <div class="text">
            <h3><?php the_sub_field('benefit_header'); ?></h3>
            <p><?php the_sub_field('benefit_description'); ?></p>
          </div><!-- .text -->
        </div><!-- .item -->
      <?php endwhile; ?><!-- list -->
    </div><!-- .content -->
      <img src="<?php bloginfo('template_url'); ?>/images/cloud.jpg" alt="man holding tablet with cloud visualized above" class="cloud">
  <?php endwhile; ?><!-- benefits custom fields -->
    <?php wp_reset_postdata(); ?>
</section><!-- .benefits -->
<!-- 
=====================
BENEFITS SECTION ENDS
=====================
-->
<?php endif; ?>