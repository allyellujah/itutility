<?php  ?>
<section class="blog" id="blog">
	<h2><a href="itutility/blog">Blog</a></h2>
	<?php $postslist = get_posts('numberposts=1&order=DESC&orderby=date');
 foreach ($postslist as $post) :
    setup_postdata($post); ?>
 <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
 <div class="imgContainer">
	<img src="<?php echo $url; ?>" class="feature" alt="" />
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 </div><!-- .imgContainer -->
 <div class="content">
	 <h3><?php the_time(get_option('date_format')) ?></h3>
	 <?php the_excerpt(); ?>
 </div><!-- .content -->
 <?php endforeach; ?>
</section>


