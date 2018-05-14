<?php
/**!
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <!-- <div class="container full-width text-white">
    <?php // $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="featured-background sub-page" style="background-image: url('<?php // echo $thumb['0'];?>');"></div>
      <div class="container h-100 my-auto py-5">
        <div class="row h-100">
        </div>
      </div>
    </div> -->
    <header class="pb-5">
      <h1><?php the_title()?></h1>
    </header>
    <main class="my-5">
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>
  </article>
<?php
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
