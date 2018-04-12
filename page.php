<?php get_header(); ?>
<?php if ( !is_front_page() ) : ?> <!-- Standardseite -->
  <div class="container">
    <div class="row">
      <div class="col-sm" style="margin-top: 60px;">
        <div id="content" role="main">
          <?php get_template_part('loops/page-content'); ?>
        </div><!-- /#content -->
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php endif; ?>
<?php if ( is_front_page() ) : ?><!-- Startseite -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      <header class="text-center text-white d-flex">
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="featured-background front-page" style="background-image: url('<?php echo $thumb['0'];?>');"></div>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong><?php bloginfo('name'); ?></strong>
              </h1>
              <hr>
            </div>
            <div class="col-lg-9 mx-auto">
              <?php the_content()?>
              <div class="mt-5">
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="./cafe">zum Café</a>
              </div>
            </div>
          </div>
        </div>
      </header>
    </article>
  <?php endwhile; else: wp_redirect(esc_url( home_url() ) . '/404', 404); exit; endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
