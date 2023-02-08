<?php
/**
 * Contains the header.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container">
        <div class="site-branding">
        <?php if ( has_custom_logo() ): ?>
            <?php the_custom_logo(); ?>
        <?php endif; ?>
            <h1 class="site-title"><a href="/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          
</div>
<div class="hamburger">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
  <?php
  wp_nav_menu( 
    array (
      'theme-location' => 'top-menu',
      'menu_class' => 'top-bar'
    )
    );
   ?>
   </div>
        </header><!-- End Header -->

