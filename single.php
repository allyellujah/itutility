<?php get_header(); ?>

<div class="wrapper">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
</div><!-- .wrapper -->
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
           <img src="<?php echo $url; ?>" class="feature" alt="" />
<div class="wrapper blog">
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <h3><?php the_time(get_option('date_format')) ?></h3>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
</div><!-- .wrapper -->

<?php get_footer(); ?>