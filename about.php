<?php $about = new WP_Query(array(
            'posts_per_page'=> 1,
            'post_type'=> 'about'
          )); ?>
    <?php if($about-> have_posts()): ?>

<!-- 
====================
ABOUT SECTION BEGINS
====================
-->
<section class="about clearfix" id="about">
<a href="https://welcome.itutility.net/default.aspx"><button class="partner">Partner Login</button></a>
  <?php while($about-> have_posts()): ?> 
    <?php $about-> the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <div class="layout clearfix">
      <div class="mockupCont">
        <?php $image = get_field('mockup_photo'); ?>
        <img src="<?php echo $image['sizes']['large'] ?>" class="mockup" alt="ITUtility login page on a laptop">
      </div><!-- .mockupCont -->
      <div class="features clearfix">
        <?php while(has_sub_fields('features')): ?>
        <div class="feature clearfix">
          <div class="content">
            <h3><?php the_sub_field('title'); ?></h3>
          <p><?php the_sub_field('short_desc'); ?></p>
          </div><!-- .content -->
          <img src="<?php bloginfo('template_url'); ?>/images/gears.png" alt="ITUtility gear icon" class="gears">
        </div><!-- .feature -->
        <?php endwhile; ?><!-- features -->
      </div><!-- /.features -->
    </div><!-- .layout -->
    <div class="partner clearfix">
      <p><?php the_field('partnership_benefits'); ?></p>
      <a href="mailto:<?php the_field('email_to_join'); ?>"><button>Join our Partners</button></a>
    </div><!-- .partner -->
  <?php endwhile; ?><!-- about custom fields -->
    <?php wp_reset_postdata(); ?>
</section><!-- .about -->
<!-- 
==================
ABOUT SECTION ENDS
==================
-->
<?php endif; ?>