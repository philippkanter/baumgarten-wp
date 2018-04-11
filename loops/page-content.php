<?php
/**!
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div class="container full-width text-white">
    <div class="featured-background sub-page" style="background-image: url('<?php echo $thumb['0'];?>');"></div>
      <div class="container h-100 my-auto p-5">
        <div class="row h-100">
          <header class="col-sm my-auto border-bottom">
            <h1 class="mt-1"><?php the_title()?></h1>
          </header>
        </div>
      </div>
    </div>
    <main>
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
