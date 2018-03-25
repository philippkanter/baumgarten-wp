<?php get_header(); ?>
<?php if ( !is_front_page() ) : ?> 
  <div class="container-responsive my-5">
    <div class="row">
      <div class="col-sm mt-5">
        <div id="content" role="main">
          <?php get_template_part('loops/page-content'); ?>
        </div><!-- /#content -->
      </div>
      <!-- <?php // get_sidebar(); ?> -->
    </div><!-- /.row -->
  </div><!-- /.container-responsive -->
<?php endif; ?>
<?php if ( is_front_page() ) : ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      <header class="masthead text-center text-white d-flex">
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
