<?php $products = new WP_Query(array(
            'posts_per_page'=> 1,
            'post_type'=> 'products'
          )); ?>
    <?php if($products-> have_posts()): ?>

<!-- 
=======================
PRODUCTS SECTION BEGINS
=======================
-->
<section class="products" id="products">
  <?php while($products-> have_posts()): ?> 
    <?php $products-> the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <div class="list clearfix">
      <?php while(has_sub_fields('product')): ?>
        <a href="/itutility/<?php the_sub_field('link'); ?>">
          <div class="product">
            <?php $logo = get_sub_field('logo'); ?>
            <div class="imgContainer">
              <img src="<?php echo $logo['sizes']['medium']; ?>" class="logo" alt="<?php the_sub_field('product_name'); ?>">
            </div><!-- .imgContainer -->
          <p><?php the_sub_field('product_name'); ?></p>
          </div><!-- .product -->
        </a>
      <?php endwhile; ?><!-- products -->
    </div><!-- .list -->
  <?php endwhile; ?><!-- products custom fields -->
    <?php wp_reset_postdata(); ?>
   </section><!-- .products -->
<!-- 
=====================
PRODUCTS SECTION ENDS
=====================
-->
<?php endif; ?>