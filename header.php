<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#a4c03e">
  <meta name="apple-mobile-web-app-title" content="Alte Schule">
  <meta name="application-name" content="Alte Schule">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">

  <?php
    if ( is_page( $page = '9' ) ) :
      if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
          wpcf7_enqueue_scripts();
      }
      if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
          wpcf7_enqueue_styles();
      }
    endif;
  ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light fixed-top px-3" id="mainNav">
  <div class="container px-0 px-sm-3">

    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
      <?php  
        if ( function_exists( 'the_custom_logo' ) ) {
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
                  echo '<img src="'. esc_url( $logo[0] ) .'" alt="'. get_bloginfo() .'">';
          } else {
                  echo get_bloginfo( 'name' );
          }
        }
      ?>
    </a>

    <button class="navbar-toggler px-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <!-- <span class="menutext">Men??</span> -->
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>

    <div class="text-right collapse navbar-collapse px-0" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto mt-5 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>
    </div>

  </div>
</nav>