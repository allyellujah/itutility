<?php $contact = new WP_Query(array(
            'posts_per_page'=> 1,
            'post_type'=> 'contact'
          )); ?>
    <?php if($contact-> have_posts()): ?>

<!-- 
======================
CONTACT SECTION BEGINS
======================
-->
<section class="contact" id="contact">
  <?php while($contact-> have_posts()): ?> 
    <?php $contact-> the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <div class="social">
      <?php while(has_sub_fields('social_media')): ?>
        <a href="<?php the_sub_field('hyperlink'); ?>" target="_blank">
          <?php the_sub_field('icon'); ?>
        </a>
      <?php endwhile; ?><!-- social -->
    </div><!-- .social -->
    <div class="info clearfix">
      <div class="item address">
        <h3>Address</h3>
        <p><?php the_field('address_line_1'); ?></p>
        <p><?php the_field('address_line_2'); ?></p>
        <p><?php the_field('city'); ?>, <?php the_field('province'); ?></p>
        <p><?php the_field('postal_code'); ?></p>
      </div><!-- .address -->
      <div class="item email">
        <h3>Email</h3>
        <p><strong>General inquiries:</strong> <a href="mailto:<?php the_field('general_email'); ?>"><?php the_field('general_email'); ?></a></p>
        <p><strong>Sales:</strong> <a href="mailto:<?php the_field('sales_email'); ?>"><?php the_field('sales_email'); ?></a></p>
        <p><strong>Technical support:</strong> <a href="mailto:<?php the_field('support_email'); ?>"><?php the_field('support_email'); ?></a></p>
      </div><!-- .email -->
      <div class="item phone">
        <h3>Phone</h3>
        <p><strong>Toll-free phone:</strong> <?php the_field('toll_free'); ?></p>
        <p><strong>Local phone:</strong> <?php the_field('local_phone'); ?></p>
        <p><strong>Fax:</strong> <?php the_field('fax'); ?></p>
      </div><!-- .phone -->
    </div><!-- .info -->
  <?php endwhile; ?><!-- contact custom fields -->
    <?php wp_reset_postdata(); ?>
</section><!-- .contact -->
<!-- 
====================
CONTACT SECTION ENDS
====================
-->
<?php endif; ?>