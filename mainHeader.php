<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> id="top">

<header>
  <div class="wrap clearfix">
    <div class="filter"></div>
    <div class="logo">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="ITUtility logo">
      </a>
    </div><!-- .logo -->
    <div class="hamburger">
      <span class="one"></span>
      <span class="two"></span>
      <span class="three"></span>
    </div><!-- .hamburger -->
    <?php get_template_part('mainNav'); ?>
  </div><!-- /.wrapper -->
</header><!--/.header-->

