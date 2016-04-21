<?php get_header();  ?>
  <div class="wrapper">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2 class="pageTitle"><?php the_title(); ?></h2>
	    <?php the_content(); ?>
  	<?php endwhile; // end the loop?>
  </div> <!-- /.wrapper -->
<?php get_footer(); ?>